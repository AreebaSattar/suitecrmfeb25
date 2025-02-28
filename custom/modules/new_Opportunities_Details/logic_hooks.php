<?php

$hook_array['before_save'][] = array(
    1,
    'Auto-populate Assigned User from Opportunity',
    'custom/modules/new_Opportunities_Details/OpportunityDetailsHooks.php',
    'OpportunityDetailsHooks',
    'populateAssignedUser'
);
$hook_array['before_save'][] = array(
    1,
    'Auto-populate fields from Opportunity',
    'custom/modules/new_Opportunities_Details/OpportunityDetailsHooks.php',
    'OpportunityDetailsHooks',
    'populateFields'
);
//$hook_array['before_save'][] = array(
//    1,
//    'Check Account or Lead',
//    'custom/modules/New_Opportunities_Details/AccountOrLeadValidator.php',
//    'AccountOrLeadValidator',
//    'validateFields'
//);

$hook_array['before_save'][] = array(
    1,
    'Auto-populate Account from Opportunity',
    'custom/modules/new_Opportunities_Details/OpportunityDetailsHooks.php',
    'OpportunityDetailsHooks',
    'populateAccount'
);
