<?php
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