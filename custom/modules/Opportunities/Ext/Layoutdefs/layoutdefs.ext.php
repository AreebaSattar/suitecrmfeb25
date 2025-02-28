<?php 
 //WARNING: The contents of this file are auto-generated


// Define subpanel for brands on opportunity detail view
$layout_defs["Opportunity"]["subpanel_setup"]['brands'] = array(
    'order' => 20,
    'module' => 'new_Brands',
    'subpanel_name' => 'default',
    'sort_order' => 'asc',
    'sort_by' => 'name',
    'title_key' => 'LBL_BRANDS',
    'get_subpanel_data' => 'brands',
    'top_buttons' => array(
        array('widget_class' => 'SubPanelTopCreateButton'),
        array('widget_class' => 'SubPanelTopSelectButton', 'mode' => 'MultiSelect'),
    ),
);


$layout_defs['Opportunities']['subpanel_setup']['new_brands'] = array(
    'order' => 100,
    'module' => 'new_Brands',
    'subpanel_name' => 'default',
    'sort_order' => 'asc',
    'sort_by' => 'name',
    'title_key' => 'LBL_NEW_BRANDS',
    'get_subpanel_data' => 'new_brands',
    'top_buttons' => array(
        array('widget_class' => 'SubPanelTopButtonQuickCreate'),
        array('widget_class' => 'SubPanelTopSelectButton', 'mode' => 'MultiSelect'),
    ),
);

?>