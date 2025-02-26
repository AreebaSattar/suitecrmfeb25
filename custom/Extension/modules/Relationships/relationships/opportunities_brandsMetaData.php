<?php
// Define the many-to-many relationship
$dictionary['opportunities_brands'] = array(
    'true_relationship_type' => 'many-to-many',
    'relationships' => array(
        'opportunities_brands' => array(
            'lhs_module' => 'Opportunities',
            'lhs_table' => 'opportunities',
            'lhs_key' => 'id',
            'rhs_module' => 'new_Brands',
            'rhs_table' => 'new_brands',
            'rhs_key' => 'id',
            'relationship_type' => 'many-to-many',
            'join_table' => 'opportunities_brands',
            'join_key_lhs' => 'opportunity_id',
            'join_key_rhs' => 'brand_id',
        ),
    ),
    'table' => 'opportunities_brands',
    'fields' => array(
        'id' => array(
            'name' => 'id',
            'type' => 'varchar',
            'len' => 36,
        ),
        'date_modified' => array(
            'name' => 'date_modified',
            'type' => 'datetime',
        ),
        'deleted' => array(
            'name' => 'deleted',
            'type' => 'bool',
            'len' => '1',
            'default' => '0',
            'required' => true,
        ),
        'opportunity_id' => array(
            'name' => 'opportunity_id',
            'type' => 'varchar',
            'len' => 36,
        ),
        'brand_id' => array(
            'name' => 'brand_id',
            'type' => 'varchar',
            'len' => 36,
        ),
    ),
    'indices' => array(
        array(
            'name' => 'opportunities_brands_pk',
            'type' => 'primary',
            'fields' => array('id'),
        ),
        array(
            'name' => 'idx_opp_brands_opp',
            'type' => 'index',
            'fields' => array('opportunity_id'),
        ),
        array(
            'name' => 'idx_opp_brands_brand',
            'type' => 'index',
            'fields' => array('brand_id'),
        ),
        array(
            'name' => 'opportunities_brands_ida1_deleted',
            'type' => 'index',
            'fields' => array('opportunity_id', 'deleted'),
        ),
        array(
            'name' => 'opportunities_brands_idb2_deleted',
            'type' => 'index',
            'fields' => array('brand_id', 'deleted'),
        ),
    ),
);