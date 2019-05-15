<?php
$module_name = 'msg_SQLReportParameter';
$listViewDefs [$module_name] = 
array (
  'MSG_SQLREPORTPARAMETER_MSG_SQLREPORT_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_MSG_SQLREPORTPARAMETER_MSG_SQLREPORT_FROM_MSG_SQLREPORT_TITLE',
    'id' => 'MSG_SQLREPORTPARAMETER_MSG_SQLREPORTMSG_SQLREPORT_IDA',
    'width' => '10%',
    'default' => true,
  ),
  'POSITION' => 
  array (
    'type' => 'int',
    'default' => true,
    'label' => 'LBL_POSITION',
    'width' => '10%',
  ),
  'NAME' => 
  array (
    'width' => '32%',
    'label' => 'LBL_NAME',
    'default' => true,
    'link' => true,
  ),
  'ASSIGNED_USER_NAME' => 
  array (
    'width' => '9%',
    'label' => 'LBL_ASSIGNED_TO_NAME',
    'module' => 'Employees',
    'id' => 'ASSIGNED_USER_ID',
    'default' => true,
  ),
);
?>
