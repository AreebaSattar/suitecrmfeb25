<?php

$dictionary['new_brands_opportunities'] = array(
    'true_relationship_type' => 'many-to-many',
    'relationships' => array(
        'new_brands_opportunities' => array(
            'lhs_module' => 'new_Brands',
            'lhs_table' => 'new_brands',
            'lhs_key' => 'id',
            'rhs_module' => 'Opportunities',
            'rhs_table' => 'opportunities',
            'rhs_key' => 'id',
            'join_table' => 'new_brands_opportunities_c', // it is the Join table name
            'join_key_lhs' => 'new_brands_id',
            'join_key_rhs' => 'opportunity_id',
            'relationship_type' => 'many-to-many',
        ),
    ),
    'table' => 'new_brands_opportunities_c',
    'fields' => array(
        array(
            'name' => 'id',
            'type' => 'id',
        ),
        array(
            'name' => 'date_modified',
            'type' => 'datetime',
        ),
        array(
            'name' => 'deleted',
            'type' => 'bool',
            'default' => '0',
        ),
        array(
            'name' => 'new_brands_id',
            'type' => 'id',
        ),
        array(
            'name' => 'opportunity_id',
            'type' => 'id',
        ),
    ),
    'indices' => array(
        array(
            'name' => 'new_brands_opportunities_pk',
            'type' => 'primary',
            'fields' => array('id'),
        ),
        array(
            'name' => 'idx_brand_opportunity',
            'type' => 'index',
            'fields' => array('new_brands_id', 'opportunity_id'),
        ),
    ),
);
