<?php

// File: custom/modules/New_Opportunities_Details/OpportunityDetailsAutoPopulate.php

if (!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

class OpportunityDetailsAutoPopulate
{

    public function populateFields($bean, $event, $arguments)
    {
        // Skip if this is coming from an import
        if (!empty($bean->is_import)) {
            return;
        }

        // Only proceed if we have a related opportunity
        if (!empty($bean->opportunity_id)) {
            // Load the related opportunity
            $opportunity = BeanFactory::getBean('Opportunities', $bean->opportunity_id);

            if ($opportunity) {
                // Set the assigned user from the opportunity
//                $bean->assigned_user_id = $opportunity->assigned_user_id;
//
//                // Populate other fields from opportunity
//                $bean->sales_stage = $opportunity->sales_stage;
//                $bean->probability = $opportunity->probability;
//                $bean->amount = $opportunity->amount;

                // Generate the name field according to the specified logic
                $this->generateName($bean);
            }
        }
    }

    /**
     * Generate the name field based on the specified logic:
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
            // Lead is selected (and account is not)
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