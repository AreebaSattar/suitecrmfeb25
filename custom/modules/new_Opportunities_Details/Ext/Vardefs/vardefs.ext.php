<?php 
 //WARNING: The contents of this file are auto-generated



$dictionary['Opportunities_Details']['fields']['name'] = array(
    'name' => 'name',
    'vname' => 'LBL_NAME',
    'type' => 'varchar',
    'len' => 255,
    'required' => false,
    'source' => 'non-db',
);

$dictionary['Opportunities_Details']['fields']['assigned_user'] = array(
    'name' => 'assigned_user',
    'vname' => 'LBL_ASSIGNED_USER',
    'type' => 'relate',
    'module' => 'Users',
    'id_name' => 'assigned_user_id',
    'source' => 'non-db',
);

$dictionary['Opportunities_Details']['fields']['sales_stage'] = array(
    'name' => 'sales_stage',
    'vname' => 'LBL_SALES_STAGE',
    'type' => 'enum',
    'options' => 'sales_stage_dom',
    'source' => 'non-db',
);

$dictionary['Opportunities_Details']['fields']['probability'] = array(
    'name' => 'probability',
    'vname' => 'LBL_PROBABILITY',
    'type' => 'varchar',
    'len' => 100,
    'source' => 'non-db',
);

$dictionary['Opportunities_Details']['fields']['amount'] = array(
    'name' => 'amount',
    'vname' => 'LBL_AMOUNT',
    'type' => 'double',
    'source' => 'non-db',
);


?>