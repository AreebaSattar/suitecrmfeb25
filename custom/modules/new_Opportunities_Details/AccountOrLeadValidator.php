<?php
if (!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

class AccountOrLeadValidator
{
    public function validateFields($bean, $event, $arguments)
    {
        // Skip validation during import
        if (!empty($bean->is_import)) {
            return true;
        }

        // Check if both account_id and lead_id are empty
        if (empty($bean->account_id) && empty($bean->lead_id)) {
            // Flag to prevent saving
            $GLOBALS['noSaveTrigger'] = true;

            // Add error message
            $_SESSION['ERROR_MESSAGE'] = $GLOBALS['mod_strings']['LBL_ACCOUNT_OR_LEAD_REQUIRED'];

            // Redirect back to the edit view
            SugarApplication::redirect("index.php?module={$bean->module_dir}&action=EditView&record={$bean->id}");
            die(); // Stop execution
        }

        return true;
    }
}