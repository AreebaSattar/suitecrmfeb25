<?php

$hook_array['after_save'][] = array(
    1,
    'Auto-populate Assigned User from Opportunity',
    'custom/modules/new_Opportunities_Details/autoPopulateAssignedUser.php',
    'autoPopulateAssignedUser',
    'populateAssignedUser'
);
$hook_array['before_save'][] = array(
    1, // Processing index
    'Auto-populate fields from Opportunity', // Description
    'custom/modules/New_Opportunities_Details/OpportunityDetailsAutoPopulate.php', // File path to the custom PHP file
    'OpportunityDetailsAutoPopulate', // Class name
    'populateFields' // Method name
);
$hook_array['before_save'][] = array(
    1, // Processing index
    'Check Account or Lead', // Description
    'custom/modules/New_Opportunities_Details/AccountOrLeadValidator.php', // PHP file
    'AccountOrLeadValidator', // Class name
    'validateFields' // Method name
);
