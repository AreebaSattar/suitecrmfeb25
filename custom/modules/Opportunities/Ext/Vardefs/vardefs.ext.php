<?php 
 //WARNING: The contents of this file are auto-generated


$dictionary['Opportunities']['relationships']['new_opportunities_details_opportunities'] = array(
    'lhs_module' => 'Opportunities',
    'lhs_table' => 'opportunities',
    'lhs_key' => 'id',
    'rhs_module' => 'new_Opportunities_Details',
    'rhs_table' => 'new_opportunities_details',
    'rhs_key' => 'opportunity_id',
    'relationship_type' => 'one-to-many',
);

$dictionary['Opportunities']['fields']['new_opportunities_details_link'] = array(
    'name' => 'new_opportunities_details_link',
    'type' => 'link',
    'relationship' => 'new_opportunities_details_opportunities',
    'source' => 'non-db',
    'vname' => 'LBL_NEW_OPPORTUNITIES_DETAILS',
);


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


 // created: 2025-02-24 20:13:57
$dictionary['Opportunity']['fields']['jjwg_maps_address_c']['inline_edit']=1;

 

 // created: 2025-02-24 20:13:57
$dictionary['Opportunity']['fields']['jjwg_maps_geocode_status_c']['inline_edit']=1;

 

 // created: 2025-02-24 20:13:57
$dictionary['Opportunity']['fields']['jjwg_maps_lat_c']['inline_edit']=1;

 

 // created: 2025-02-24 20:13:57
$dictionary['Opportunity']['fields']['jjwg_maps_lng_c']['inline_edit']=1;

 
?>