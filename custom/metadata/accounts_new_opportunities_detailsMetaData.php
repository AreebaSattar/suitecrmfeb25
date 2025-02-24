<?php
// created: 2025-02-25
$dictionary["accounts_new_opportunities_details"] = array (
    'true_relationship_type' => 'one-to-many',
    'relationships' => array (
        'accounts_new_opportunities_details' => array (
            'lhs_module' => 'Accounts',
            'lhs_table' => 'accounts',
            'lhs_key' => 'id',
            'rhs_module' => 'new_Opportunities_Details', // Your custom module
            'rhs_table' => 'new_opportunities_details',
            'rhs_key' => 'account_id', // Foreign key in new_Opportunities_Details
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
            'name' => 'account_id', // Foreign key for Accounts
            'type' => 'varchar',
            'len' => 36,
        ),
        4 => array (
            'name' => 'new_opportunity_detail_id', // Foreign key for new_Opportunities_Details
            'type' => 'varchar',
            'len' => 36,
        ),
    ),
    'indices' => array (
        0 => array (
            'name' => 'accounts_new_opportunities_details_pk',
            'type' => 'primary',
            'fields' => array ('id'),
        ),
        1 => array (
            'name' => 'idx_accounts_new_opportunities_details_account_id',
            'type' => 'index',
            'fields' => array ('account_id'),
        ),
        2 => array (
            'name' => 'idx_accounts_new_opportunities_details_opportunity_detail_id',
            'type' => 'index',
            'fields' => array ('new_opportunity_detail_id'),
        ),
    ),
);
