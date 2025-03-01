<?php 
 //WARNING: The contents of this file are auto-generated



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



$layout_defs['new_Brands']['subpanel_setup']['new_opportunities_details'] = array(
    'order' => 100,
    'module' => 'new_Opportunities_Details',
    'subpanel_name' => 'default',
    'title_key' => 'LBL_NEW_OPPORTUNITIES_DETAILS_SUBPANEL',
    'get_subpanel_data' => 'new_opportunities_details',
);


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

?>