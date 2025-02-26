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



// Define the link field for the Opportunity side
$dictionary['Opportunity']['fields']['brands'] = array(
    'name' => 'brands',
    'type' => 'link',
    'relationship' => 'opportunities_brands',
    'module' => 'new_Brands',
    'bean_name' => 'new_Brands',
    'source' => 'non-db',
    'vname' => 'LBL_BRANDS',
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