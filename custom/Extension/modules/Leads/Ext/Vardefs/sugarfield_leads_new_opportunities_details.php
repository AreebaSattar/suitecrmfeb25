<?php


$dictionary['Lead']['relationships']['leads_new_opportunities_details'] = array(
    'lhs_module' => 'Leads',
    'lhs_table' => 'leads',
    'lhs_key' => 'id',
    'rhs_module' => 'new_Opportunities_Details',
    'rhs_table' => 'new_opportunities_details',
    'rhs_key' => 'lead_id',
    'relationship_type' => 'one-to-many'
);

$dictionary['Lead']['fields']['new_opportunities_details'] = array(
    'name' => 'new_opportunities_details',
    'type' => 'link',
    'relationship' => 'leads_new_opportunities_details',
    'module' => 'new_Opportunities_Details',
    'bean_name' => 'new_Opportunities_Details',
    'source' => 'non-db',
    'vname' => 'LBL_NEW_OPPORTUNITIES_DETAILS',
);