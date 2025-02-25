<?php
// created: 2025-02-25
$dictionary["brand_accounts"] = array (
    'true_relationship_type' => 'one-to-many',
    'relationships' => array (
        'brand_accounts' => array (
            'lhs_module' => 'new_Brands',
            'lhs_table' => 'new_brands',
            'lhs_key' => 'id',
            'rhs_module' => 'Accounts',
            'rhs_table' => 'accounts',
            'rhs_key' => 'brand_id',
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
            'name' => 'brand_id',
            'type' => 'varchar',
            'len' => 36,
        ),
        4 => array (
            'name' => 'account_id', // Foreign key for new_Opportunities_Details
            'type' => 'varchar',
            'len' => 36,
        ),
    ),
    'indices' => array (
        0 => array (
            'name' => 'brand_accounts_pk',
            'type' => 'primary',
            'fields' => array ('id'),
        ),
        1 => array (
            'name' => 'idx_brand_accounts_brand_id',
            'type' => 'index',
            'fields' => array ('brand_id'),
        ),
        2 => array (
            'name' => 'idx_brand_accounts_account_id',
            'type' => 'index',
            'fields' => array ('account_id'),
        ),
    ),
);
