<?php
$dictionary['new_Opportunities_Details']['fields']['probability'] = array(
    'name' => 'probability',
    'vname' => 'LBL_PROBABILITY',
    'type' => 'varchar',
    'required' => false,
    'reportable' => true,
);
$dictionary['new_Opportunities_Details']['fields']['amount'] = array(
    'name' => 'amount',
    'vname' => 'LBL_AMOUNT',
    'type' => 'decimal',
    'len' => '18,2',
    'precision' => 2,
    'required' => false,
    'reportable' => true,
    'importable' => 'true',
);

$dictionary['new_Opportunities_Details']['fields']['sales_stage'] = array(
    'name' => 'sales_stage',
    'vname' => 'LBL_SALES_STAGE',
    'type' => 'enum',
    'options' => 'sales_stage_dom',
    'len' => 100,
    'audited' => true,
    'required' => false,
    'massupdate' => true,
    'reportable' => true,
    'importable' => 'true',
);


$dictionary['new_Opportunities_Details']['fields']['opportunity_name'] = array(
    'name' => 'opportunity_name',
    'rname' => 'name',
    'id_name' => 'opportunity_id',
    'vname' => 'LBL_OPPORTUNITY_NAME',
    'type' => 'relate',
    'link' => 'opportunities_link',
    'table' => 'opportunities',
    'module' => 'Opportunities',
    'source' => 'non-db',
);

$dictionary['new_Opportunities_Details']['fields']['assigned_user_id'] = array(
    'name' => 'assigned_user_id',
    'vname' => 'LBL_ASSIGNED_TO',
    'type' => 'varchar',
    'required' => false,
    'reportable' => true,
);
$dictionary['new_Opportunities_Details']['fields']['opportunity_id'] = array(
    'name' => 'opportunity_id',
    'vname' => 'LBL_OPPORTUNITY_ID',
    'type' => 'id',
    'required' => false,
    'reportable' => true,
);

$dictionary['new_Opportunities_Details']['fields']['opportunities_link'] = array(
    'name' => 'opportunities_link',
    'type' => 'link',
    'relationship' => 'new_opportunities_details_opportunities',
    'source' => 'non-db',
    'vname' => 'LBL_OPPORTUNITY_NAME',
);
