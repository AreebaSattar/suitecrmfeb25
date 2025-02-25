<?php 
 //WARNING: The contents of this file are auto-generated


$dictionary['new_Opportunities_Details']['fields']['account_id'] = array(
    'name' => 'account_id',
    'type' => 'id',
    'vname' => 'LBL_ACCOUNT_ID',
    'required' => true,
);

$dictionary['new_Opportunities_Details']['fields']['account_name'] = array(
    'name' => 'account_name',
    'rname' => 'name',
    'id_name' => 'account_id',
    'vname' => 'LBL_ACCOUNT_NAME',
    'type' => 'relate',
    'table' => 'accounts',
    'isnull' => 'true',
    'module' => 'Accounts',
    'dbType' => 'varchar',
    'len' => '255',
    'source' => 'non-db',
    'link' => 'accounts',
    'massupdate' => false,
);

$dictionary['new_Opportunities_Details']['fields']['accounts'] = array(
    'name' => 'accounts',
    'type' => 'link',
    'relationship' => 'accounts_new_opportunities_details',
    'source' => 'non-db',
    'vname' => 'LBL_ACCOUNTS',
    'module' => 'Accounts',
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




$dictionary['new_Opportunities_Details']['fields']['lead_id'] = array(
    'name' => 'lead_id',
    'type' => 'id',
    'vname' => 'LBL_LEAD_ID',
    'required' => true,
);

$dictionary['new_Opportunities_Details']['fields']['lead_name'] = array(
    'name' => 'lead_name',
    'rname' => 'name',
    'id_name' => 'lead_id',
    'vname' => 'LBL_LEAD_NAME',
    'type' => 'relate',
    'table' => 'leads',
    'isnull' => 'true',
    'module' => 'Leads',
    'dbType' => 'varchar',
    'len' => '255',
    'source' => 'non-db',
    'link' => 'leads',
    'massupdate' => false,
);

$dictionary['new_Opportunities_Details']['fields']['leads'] = array(
    'name' => 'leads',
    'type' => 'link',
    'relationship' => 'leads_new_opportunities_details',
    'source' => 'non-db',
    'vname' => 'LBL_LEADS',
    'module' => 'Leads',
);
?>