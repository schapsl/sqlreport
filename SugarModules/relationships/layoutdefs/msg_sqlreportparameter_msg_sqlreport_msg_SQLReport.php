<?php
 // created: 2021-09-21 15:55:23
$layout_defs["msg_SQLReport"]["subpanel_setup"]['msg_sqlreportparameter_msg_sqlreport'] = array (
  'order' => 100,
  'module' => 'msg_SQLReportParameter',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_MSG_SQLREPORTPARAMETER_MSG_SQLREPORT_FROM_MSG_SQLREPORTPARAMETER_TITLE',
  'get_subpanel_data' => 'msg_sqlreportparameter_msg_sqlreport',
  'top_buttons' => 
  array (
    0 => 
    array (
      'widget_class' => 'SubPanelTopButtonQuickCreate',
    ),
    1 => 
    array (
      'widget_class' => 'SubPanelTopSelectButton',
      'mode' => 'MultiSelect',
    ),
  ),
);
