<?php
// Define fields for the Account side of the relationship
$dictionary['Account']['fields']['brand_id'] = array(
    'name' => 'brand_id',
    'type' => 'id',
    'vname' => 'LBL_BRAND_ID',
    'required' => false,
    'reportable' => true,
    'comment' => 'ID of the associated brand',
);

$dictionary['Account']['fields']['brand_name'] = array(
    'name' => 'brand_name',
    'type' => 'relate',
    'source' => 'non-db',
    'vname' => 'LBL_BRAND_NAME',
    'save' => true,
    'id_name' => 'brand_id',
    'link' => 'brand_link',
    'table' => 'new_brands',
    'module' => 'new_Brands',
    'rname' => 'name',
);

$dictionary['Account']['fields']['brand_link'] = array(
    'name' => 'brand_link',
    'type' => 'link',
    'relationship' => 'brand_accounts',
    'source' => 'non-db',
    'vname' => 'LBL_BRAND',
    'module' => 'new_Brands',
);

// Define the relationship from Account perspective
$dictionary['Account']['relationships']['brand_accounts'] = array(
    'lhs_module' => 'new_Brands',
    'lhs_table' => 'new_brands',
    'lhs_key' => 'id',
    'rhs_module' => 'Accounts',
    'rhs_table' => 'accounts',
    'rhs_key' => 'brand_id',
    'relationship_type' => 'one-to-many',
);