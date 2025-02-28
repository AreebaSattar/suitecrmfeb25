<?php
$dictionary['new_Brands']['fields']['opportunities'] = array(
    'name' => 'opportunities',
    'type' => 'link',
    'relationship' => 'new_brands_opportunities',
    'source' => 'non-db',
    'vname' => 'LBL_OPPORTUNITIES',
    'module' => 'Opportunities',
);

$dictionary['new_Brands']['fields']['opportunity_id'] = array(
    'name' => 'opportunity_id',
    'type' => 'id',
    'vname' => 'LBL_OPPORTUNITY_ID',
    'reportable' => false,
    'massupdate' => false,
    'duplicate_merge' => 'disabled',
);
