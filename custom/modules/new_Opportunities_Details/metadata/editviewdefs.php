
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
                    'name' => 'sales_stage',
                    'label' => 'LBL_SALES_STAGE',
                ),
                array(
                    'name' => 'amount',
                    'label' => 'LBL_AMOUNT',
                ),
            ),
            array(
                array(
                    'name' => 'account_name',
                    'label' => 'LBL_ACCOUNT_NAME',
                    'required' => false,
                ),
                array(
                    'name' => 'lead_name',
                    'label' => 'LBL_LEAD_NAME',
                    'required' => false,
                ),
            ),
            array(
                array(
                    'name' => 'new_brand_name',
                    'label' => 'LBL_NEW_BRAND_NAME',
                ),
                array(
                    'name' => 'opportunity_name',
                    'displayParams' => array(
                        'field_to_name_array' => array(
                            'id' => 'opportunity_id',
                            'name' => 'opportunity_name',
                            'probability' => 'probability',
                            'sales_stage' => 'sales_stage',
                            'amount' => 'amount',

                        ),
                    ),
                ),

            ),
            array(
                array(
                    'name' => 'probability',
                    'label' => 'LBL_PROBABILITY',
                    'readonly' => false,
                ),
            ),
        ),
    ),
);
?>
