<?php

$dictionary['accounts_new_opportunities_details'] = array(
    'true_relationship_type' => 'one-to-many',
    'relationships' => array(
        'accounts_new_opportunities_details' => array(
            'lhs_module' => 'Accounts',
            'lhs_table' => 'accounts',
            'lhs_key' => 'id',
            'rhs_module' => 'new_Opportunities_Details',
            'rhs_table' => 'new_opportunities_details',
            'rhs_key' => 'account_id',
            'relationship_type' => 'one-to-many',
        ),
    ),
    'table' => 'accounts_new_opportunities_details',
    'fields' => array(
        array(
            'name' => 'id',
            'type' => 'id',
        ),
        array(
            'name' => 'account_id',
            'type' => 'id',
        ),
        array(
            'name' => 'new_opportunities_details_id',
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
    ),
    'indices' => array(
        array(
            'name' => 'accounts_new_opportunities_details_pk',
            'type' => 'primary',
            'fields' => array('id'),
        ),
        array(
            'name' => 'idx_acc_new_opp_details',
            'type' => 'index',
            'fields' => array('account_id'),
        ),
        array(
            'name' => 'idx_opp_details_acc',
            'type' => 'index',
            'fields' => array('new_opportunities_details_id'),
        ),
    ),
);
