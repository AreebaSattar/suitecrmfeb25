<?php

$dictionary["new_brands_new_opportunities_details"] = array (
    'true_relationship_type' => 'one-to-many',
    'relationships' => array (
        'new_brands_new_opportunities_details' => array (
            'lhs_module' => 'new_Brands',
            'lhs_table' => 'new_brands',
            'lhs_key' => 'id',
            'rhs_module' => 'new_Opportunities_Details',
            'rhs_table' => 'new_opportunities_details',
            'rhs_key' => 'new_brand_id',
            'relationship_type' => 'one-to-many',
        ),
    ),
);
