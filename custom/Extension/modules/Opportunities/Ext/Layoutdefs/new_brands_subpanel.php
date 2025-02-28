<?php

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
