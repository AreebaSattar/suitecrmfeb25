<?php

$hook_array['after_save'][] = array(
    1,
    'Auto-populate Assigned User from Opportunity',
    'custom/modules/new_Opportunities_Details/autoPopulateAssignedUser.php',
    'autoPopulateAssignedUser',
    'populateAssignedUser'
);
$hook_array['before_save'][] = array(
    1,
    'Auto-populate fields from Opportunity',
    'custom/modules/New_Opportunities_Details/OpportunityDetailsAutoPopulate.php',
    'OpportunityDetailsAutoPopulate',
    'populateFields'
);
$hook_array['before_save'][] = array(
    1,
    'Check Account or Lead',
    'custom/modules/New_Opportunities_Details/AccountOrLeadValidator.php',
    'AccountOrLeadValidator',
    'validateFields'
);