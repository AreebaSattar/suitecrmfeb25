<?php 
 //WARNING: The contents of this file are auto-generated



$dictionary['new_Opportunities_Details']['fields']['account_id'] = array(
    'name' => 'account_id',
    'type' => 'id',
    'vname' => 'LBL_ACCOUNT_ID',
    'required' => false,
    'reportable' => false,
    'massupdate' => false,
    'duplicate_merge' => 'disabled',
);

$dictionary['new_Opportunities_Details']['fields']['account_link'] = array(
    'name' => 'account_link',
    'type' => 'link',
    'relationship' => 'accounts_new_opportunities_details',
    'source' => 'non-db',
    'vname' => 'LBL_ACCOUNT',
);



$dictionary['Opportunities_Details']['fields']['name'] = array(
    'name' => 'name',
    'vname' => 'LBL_NAME',
    'type' => 'varchar',
    'len' => 255,
    'required' => false,
    'source' => 'non-db',
);

$dictionary['Opportunities_Details']['fields']['assigned_user'] = array(
    'name' => 'assigned_user',
    'vname' => 'LBL_ASSIGNED_USER',
    'type' => 'relate',
    'module' => 'Users',
    'id_name' => 'assigned_user_id',
    'source' => 'non-db',
);

$dictionary['Opportunities_Details']['fields']['sales_stage'] = array(
    'name' => 'sales_stage',
    'vname' => 'LBL_SALES_STAGE',
    'type' => 'enum',
    'options' => 'sales_stage_dom',
    'source' => 'non-db',
);

$dictionary['Opportunities_Details']['fields']['probability'] = array(
    'name' => 'probability',
    'vname' => 'LBL_PROBABILITY',
    'type' => 'varchar',
    'len' => 100,
    'source' => 'non-db',
);

$dictionary['Opportunities_Details']['fields']['amount'] = array(
    'name' => 'amount',
    'vname' => 'LBL_AMOUNT',
    'type' => 'double',
    'source' => 'non-db',
);


?>