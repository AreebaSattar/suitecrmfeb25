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



// created: 2025-02-26 15:39:12
$dictionary["Opportunity"]["fields"]["new_brands_opportunities_1"] = array(
    'name' => 'new_brands_opportunities_1',
    'type' => 'link',
    'relationship' => 'new_brands_opportunities_1',
    'source' => 'non-db',
    'module' => 'new_Brands',
    'bean_name' => 'new_Brands',
    'vname' => 'LBL_NEW_BRANDS_OPPORTUNITIES_1_FROM_NEW_BRANDS_TITLE',
);

//
//$dictionary["Opportunities"]["fields"]["opportunities_brands"] = array(
//    'name' => 'opportunities_brands',
//    'type' => 'link',
//    'relationship' => 'opportunities_brands',
//    'module' => 'new_Brands',
//    'bean_name' => 'new_Brands',
//    'source' => 'non-db',
//    'vname' => 'LBL_BRANDS',
//);
//
//


 // created: 2025-02-24 20:13:57
$dictionary['Opportunity']['fields']['jjwg_maps_address_c']['inline_edit']=1;

 

 // created: 2025-02-24 20:13:57
$dictionary['Opportunity']['fields']['jjwg_maps_geocode_status_c']['inline_edit']=1;

 

 // created: 2025-02-24 20:13:57
$dictionary['Opportunity']['fields']['jjwg_maps_lat_c']['inline_edit']=1;

 

 // created: 2025-02-24 20:13:57
$dictionary['Opportunity']['fields']['jjwg_maps_lng_c']['inline_edit']=1;

 
?>