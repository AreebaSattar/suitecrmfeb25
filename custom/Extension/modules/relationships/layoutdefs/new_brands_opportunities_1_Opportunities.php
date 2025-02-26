<?php
$layout_defs["Opportunities"]["subpanel_setup"]['new_brands_opportunities_1'] = array(
    'order' => 100,
    'module' => 'new_Brands',
    'subpanel_name' => 'default',
    'sort_order' => 'asc',
    'sort_by' => 'id',
    'title_key' => 'LBL_NEW_BRANDS_OPPORTUNITIES_1_FROM_NEW_BRANDS_TITLE',
    'get_subpanel_data' => 'new_brands_opportunities_1',
    'top_buttons' =>
        array(
            0 =>
                array(
                    'widget_class' => 'SubPanelTopButtonQuickCreate',
                ),
            1 =>
                array(
                    'widget_class' => 'SubPanelTopSelectButton',
                    'mode' => 'MultiSelect',
                ),
        ),
);