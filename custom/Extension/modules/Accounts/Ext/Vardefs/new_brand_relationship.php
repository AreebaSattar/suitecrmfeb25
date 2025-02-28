<?php

$dictionary['Account']['fields']['new_brand_id'] = array(
    'name' => 'new_brand_id',
    'type' => 'id',
    'vname' => 'LBL_NEW_BRAND_ID',
    'required' => false,
    'reportable' => false,
    'massupdate' => false,
    'duplicate_merge' => 'disabled',
);

$dictionary['Account']['fields']['new_brand_name'] = array(
    'name' => 'new_brand_name',
    'type' => 'relate',
    'source' => 'non-db',
    'vname' => 'LBL_NEW_BRAND',
    'id_name' => 'new_brand_id',
    'module' => 'new_Brands',
    'link' => 'new_brand_link',
);

$dictionary['Account']['fields']['new_brand_link'] = array(
    'name' => 'new_brand_link',
    'type' => 'link',
    'relationship' => 'new_brands_accounts',
    'source' => 'non-db',
    'vname' => 'LBL_NEW_BRAND',
);
