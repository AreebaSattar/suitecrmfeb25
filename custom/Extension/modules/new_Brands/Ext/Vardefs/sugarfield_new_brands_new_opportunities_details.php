<?php


$dictionary['new_Brands']['relationships']['new_brands_new_opportunities_details'] = array(
    'lhs_module' => 'new_Brands',
    'lhs_table' => 'new_brands',
    'lhs_key' => 'id',
    'rhs_module' => 'new_Opportunities_Details',
    'rhs_table' => 'new_opportunities_details',
    'rhs_key' => 'new_brand_id',
    'relationship_type' => 'one-to-many'
);

$dictionary['new_Brands']['fields']['new_opportunities_details'] = array(
    'name' => 'new_opportunities_details',
    'type' => 'link',
    'relationship' => 'new_brands_new_opportunities_details',
    'module' => 'new_Opportunities_Details',
    'bean_name' => 'new_Opportunities_Details',
    'source' => 'non-db',
    'vname' => 'LBL_NEW_OPPORTUNITIES_DETAILS',
);