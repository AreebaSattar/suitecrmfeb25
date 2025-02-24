<?php

$dictionary['new_Opportunities_Details']['fields']['account_id'] = array(
    'name' => 'account_id',
    'type' => 'id',
    'vname' => 'LBL_ACCOUNT_ID',
    'required' => false,
    'reportable' => false,
    'massupdate' => false,
    'duplicate_merge' => 'disabled',
);

$dictionary['new_Opportunities_Details']['fields']['account_link'] = array(
    'name' => 'account_link',
    'type' => 'link',
    'relationship' => 'accounts_new_opportunities_details',
    'source' => 'non-db',
    'vname' => 'LBL_ACCOUNT',
);
