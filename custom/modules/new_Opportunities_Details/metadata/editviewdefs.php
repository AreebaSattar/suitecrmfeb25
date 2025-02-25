<?php
$viewdefs['new_Opportunities_Details']['EditView'] = array(
    'templateMeta' => array(
        'maxColumns' => '2',
        'widths' => array(
            array('label' => '10', 'field' => '30'),
            array('label' => '10', 'field' => '30')
        ),
    ),
    'panels' => array(
        'default' => array(
            array(
                array(
                    'name' => 'name',
                    'label' => 'LBL_NAME',
                ),
                array(
                    'name' => 'assigned_user',
                    'label' => 'LBL_ASSIGNED_USER',
                ),
            ),
            array(
                array(
                    'name' => 'sales_stage',
                    'label' => 'LBL_SALES_STAGE',
                ),
                array(
                    'name' => 'probability',
                    'label' => 'LBL_PROBABILITY',
                ),
            ),
            array(
                array(
                    'name' => 'amount',
                    'label' => 'LBL_AMOUNT',
                ),
                array(
                    'name' => 'account_name',
                    'label' => 'LBL_ACCOUNT_NAME',
                ),
            ),
            array(
                array(
                    'name' => 'lead_name',
                    'label' => 'LBL_LEAD_NAME',
                ),
                array(
                    'name' => 'new_brand_name',
                    'label' => 'LBL_NEW_BRAND_NAME',
                ),
            ),
        ),
    ),
);
?>