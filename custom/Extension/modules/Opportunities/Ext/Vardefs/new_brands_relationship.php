<?php
$dictionary['Opportunity']['fields']['new_brands'] = array(
    'name' => 'new_brands',
    'type' => 'link',
    'relationship' => 'new_brands_opportunities',
    'source' => 'non-db',
    'vname' => 'LBL_NEW_BRANDS',
    'module' => 'new_Brands',
);

$dictionary['Opportunity']['fields']['new_brands_id'] = array(
    'name' => 'new_brands_id',
    'type' => 'id',
    'vname' => 'LBL_NEW_BRAND_ID',
    'reportable' => false,
    'massupdate' => false,
    'duplicate_merge' => 'disabled',
);
