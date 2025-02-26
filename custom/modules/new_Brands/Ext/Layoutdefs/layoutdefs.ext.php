<?php 
 //WARNING: The contents of this file are auto-generated


$layout_defs["new_Brands"]["subpanel_setup"]['accounts'] = array(
    'order' => 10,
    'module' => 'Accounts',
    'subpanel_name' => 'default',
    'sort_order' => 'asc',
    'sort_by' => 'name',
    'title_key' => 'LBL_ACCOUNTS',
    'get_subpanel_data' => 'accounts',
    'top_buttons' => array(
        array('widget_class' => 'SubPanelTopCreateButton'),
        array('widget_class' => 'SubPanelTopSelectButton', 'mode' => 'MultiSelect'),
    ),
);


$layout_defs["new_Brands"]["subpanel_setup"]['new_brands_opportunities_1'] = array(
    'order' => 100,
    'module' => 'Opportunities',
    'subpanel_name' => 'default',
    'sort_order' => 'asc',
    'sort_by' => 'id',
    'title_key' => 'LBL_NEW_BRANDS_OPPORTUNITIES_1_FROM_OPPORTUNITIES_TITLE',
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


// Define subpanel for opportunities on brand detail view
$layout_defs["new_Brands"]["subpanel_setup"]['opportunities'] = array(
    'order' => 20,
    'module' => 'Opportunities',
    'subpanel_name' => 'default',
    'sort_order' => 'asc',
    'sort_by' => 'name',
    'title_key' => 'LBL_OPPORTUNITIES',
    'get_subpanel_data' => 'opportunities',
    'top_buttons' => array(
        array('widget_class' => 'SubPanelTopCreateButton'),
        array('widget_class' => 'SubPanelTopSelectButton', 'mode' => 'MultiSelect'),
    ),
);

?>