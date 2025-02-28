<?php

$layout_defs['new_Brands']['subpanel_setup']['opportunities'] = array(
    'order' => 100,
    'module' => 'Opportunities',
    'subpanel_name' => 'default',
    'sort_order' => 'asc',
    'sort_by' => 'name',
    'title_key' => 'LBL_OPPORTUNITIES',
    'get_subpanel_data' => 'opportunities',
    'top_buttons' => array(
        array('widget_class' => 'SubPanelTopButtonQuickCreate'),
        array('widget_class' => 'SubPanelTopSelectButton', 'mode' => 'MultiSelect'),
    ),
);
