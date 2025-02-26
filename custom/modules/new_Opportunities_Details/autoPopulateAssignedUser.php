<?php
class autoPopulateAssignedUser {
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
}
?>
