<?php 
 //WARNING: The contents of this file are auto-generated




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