<?php

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