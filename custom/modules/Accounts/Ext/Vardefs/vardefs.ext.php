<?php 
 //WARNING: The contents of this file are auto-generated



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




$dictionary['Account']['relationships']['accounts_new_opportunities_details'] = array(
    'lhs_module' => 'Accounts',
    'lhs_table' => 'accounts',
    'lhs_key' => 'id',
    'rhs_module' => 'new_Opportunities_Details',
    'rhs_table' => 'new_opportunities_details',
    'rhs_key' => 'account_id',
    'relationship_type' => 'one-to-many'
);

$dictionary['Account']['fields']['new_opportunities_details'] = array(
    'name' => 'new_opportunities_details',
    'type' => 'link',
    'relationship' => 'accounts_new_opportunities_details',
    'module' => 'new_Opportunities_Details',
    'bean_name' => 'new_Opportunities_Details',
    'source' => 'non-db',
    'vname' => 'LBL_NEW_OPPORTUNITIES_DETAILS',
);

 // created: 2025-02-24 20:13:55
$dictionary['Account']['fields']['jjwg_maps_address_c']['inline_edit']=1;

 

 // created: 2025-02-24 20:13:55
$dictionary['Account']['fields']['jjwg_maps_geocode_status_c']['inline_edit']=1;

 

 // created: 2025-02-24 20:13:55
$dictionary['Account']['fields']['jjwg_maps_lat_c']['inline_edit']=1;

 

 // created: 2025-02-24 20:13:55
$dictionary['Account']['fields']['jjwg_maps_lng_c']['inline_edit']=1;

 
?>