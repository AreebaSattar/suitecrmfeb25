<?php
class OpportunityDetailsHooks
{
    function populateAssignedUser($bean, $event, $arguments) {
        // Ensure opportunity_id exists
        if (!empty($bean->opportunity_id)) {
            $opportunity = BeanFactory::getBean('Opportunities', $bean->opportunity_id);

            if (!empty($opportunity->assigned_user_id)) {
                if ($bean->assigned_user_id != $opportunity->assigned_user_id) {
                    $bean->assigned_user_id = $opportunity->assigned_user_id;
                    $bean->save();
                }
            }
        }
    }
    function populateAccount($bean, $event, $arguments)
    {
        global $log;
        // opportunity_id exists before proceeding
        if (!empty($bean->opportunity_id)) {
            $opportunity = BeanFactory::getBean('Opportunities', $bean->opportunity_id);
            // Populate account_id from Opportunity
            if (!empty($opportunity->account_id)) {
                if ($bean->account_id != $opportunity->account_id) {
                    $bean->account_id = $opportunity->account_id;
                }
            }
        }
    }
    public function populateFields($bean, $event, $arguments)
    {
        // Only proceed if we have a related opportunity
        if (!empty($bean->opportunity_id)) {
            // Load the related opportunity
            $opportunity = BeanFactory::getBean('Opportunities', $bean->opportunity_id);

            if ($opportunity) {

                $this->generateName($bean);
            }
        }
    }

    /**Generate the name field based on the specified logic:
     * name = Opportunity - Account - Brand
     * If account is empty and lead is selected, use lead instead
     */
    private function generateName($bean)
    {
        $nameParts = array();

        // Get opportunity name
        if (!empty($bean->opportunity_id)) {
            $opportunity = BeanFactory::getBean('Opportunities', $bean->opportunity_id);
            if ($opportunity) {
                $nameParts[] = $opportunity->name;
            }
        }

        // Get account or lead name based on logic
        if (!empty($bean->account_id)) {
            // Account is selected
            $account = BeanFactory::getBean('Accounts', $bean->account_id);
            if ($account) {
                $nameParts[] = $account->name;
            }
        } elseif (!empty($bean->lead_id)) {
            // Lead is selected and account is not
            $lead = BeanFactory::getBean('Leads', $bean->lead_id);
            if ($lead) {
                $nameParts[] = trim($lead->first_name . ' ' . $lead->last_name);
            }
        }

        // Get brand name if set
        if (!empty($bean->new_brand_id)) {
            $brand = BeanFactory::getBean('new_Brands', $bean->new_brand_id);
            if ($brand) {
                $nameParts[] = $brand->name;
            }
        }
        if (!empty($nameParts)) {
            $bean->name = implode(' - ', $nameParts);
        }
    }
}

