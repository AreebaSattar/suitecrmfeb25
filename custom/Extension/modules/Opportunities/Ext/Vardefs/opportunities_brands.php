<?php

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