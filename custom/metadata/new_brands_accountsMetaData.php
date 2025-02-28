<?php

$dictionary['new_brands_accounts'] = array(
    'true_relationship_type' => 'one-to-many',
    'relationships' => array(
        'new_brands_accounts' => array(
            'lhs_module' => 'new_Brands',     // Parent module yahan aye ga
            'lhs_table' => 'new_brands',
            'lhs_key' => 'id',
            'rhs_module' => 'Accounts',      // Child module will come here
            'rhs_table' => 'accounts',
            'rhs_key' => 'new_brand_id',     // Foreign key in Accounts
            'relationship_type' => 'one-to-many',
        ),
    ),
);
