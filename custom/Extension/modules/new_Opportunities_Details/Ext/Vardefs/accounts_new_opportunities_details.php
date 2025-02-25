<?php
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