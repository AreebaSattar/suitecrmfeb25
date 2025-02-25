<?php

$dictionary['new_Opportunities_Details']['fields']['new_brand_id'] = array(
    'name' => 'new_brand_id',
    'type' => 'id',
    'vname' => 'LBL_NEW_BRAND_ID',
    'required' => true,
);

$dictionary['new_Opportunities_Details']['fields']['new_brand_name'] = array(
    'name' => 'new_brand_name',
    'rname' => 'name',
    'id_name' => 'new_brand_id',
    'vname' => 'LBL_NEW_BRAND_NAME',
    'type' => 'relate',
    'table' => 'new_brands',
    'isnull' => 'true',
    'module' => 'new_Brands',
    'dbType' => 'varchar',
    'len' => '255',
    'source' => 'non-db',
    'link' => 'new_brands',
    'massupdate' => false,
);

$dictionary['new_Opportunities_Details']['fields']['new_brands'] = array(
    'name' => 'new_brands',
    'type' => 'link',
    'relationship' => 'new_brands_new_opportunities_details',
    'source' => 'non-db',
    'vname' => 'LBL_NEW_BRANDS',
    'module' => 'new_BRANDS',
);