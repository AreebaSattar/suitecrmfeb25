<?php

$layout_defs['new_Brands']['subpanel_setup']['accounts'] = array(
    'order' => 100,
    'module' => 'Accounts',
    'subpanel_name' => 'default',
    'sort_order' => 'asc',
    'sort_by' => 'name',
    'title_key' => 'LBL_ACCOUNTS',
    'get_subpanel_data' => 'accounts',
    'top_buttons' => array(
        array('widget_class' => 'SubPanelTopButtonQuickCreate'),
        array('widget_class' => 'SubPanelTopSelectButton', 'mode' => 'MultiSelect'),
    ),
);
