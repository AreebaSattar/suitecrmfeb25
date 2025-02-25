<?php
// created: 2025-02-25
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
    'fields' => array (
        0 => array (
            'name' => 'id',
            'type' => 'varchar',
            'len' => 36,
        ),
        1 => array (
            'name' => 'date_modified',
            'type' => 'datetime',
        ),
        2 => array (
            'name' => 'deleted',
            'type' => 'bool',
            'len' => '1',
            'default' => '0',
            'required' => true,
        ),
        3 => array (
            'name' => 'new_brand_id',
            'type' => 'varchar',
            'len' => 36,
        ),
        4 => array (
            'name' => 'new_opportunity_detail_id',
            'type' => 'varchar',
            'len' => 36,
        ),
    ),
    'indices' => array (
        0 => array (
            'name' => 'new_brands_new_opportunities_details_pk',
            'type' => 'primary',
            'fields' => array ('id'),
        ),
        1 => array (
            'name' => 'idx_new_brands_new_opportunities_details_new_brand_id',
            'type' => 'index',
            'fields' => array ('new_brand_id'),
        ),
        2 => array (
            'name' => 'idx_new_brands_new_opportunities_details_opportunity_detail_id',
            'type' => 'index',
            'fields' => array ('new_opportunity_detail_id'),
        ),
    ),
);
