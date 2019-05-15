<?php
$popupMeta = array (
    'moduleMain' => 'msg_SQLReportParameter',
    'varName' => 'msg_SQLReportParameter',
    'orderBy' => 'msg_sqlreportparameter.name',
    'whereClauses' => array (
  'name' => 'msg_sqlreportparameter.name',
  'msg_sqlreportparameter_msg_sqlreport_name' => 'msg_sqlreportparameter.msg_sqlreportparameter_msg_sqlreport_name',
  'position' => 'msg_sqlreportparameter.position',
  'assigned_user_name' => 'msg_sqlreportparameter.assigned_user_name',
),
    'searchInputs' => array (
  1 => 'name',
  4 => 'msg_sqlreportparameter_msg_sqlreport_name',
  5 => 'position',
  6 => 'assigned_user_name',
),
    'searchdefs' => array (
  'msg_sqlreportparameter_msg_sqlreport_name' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_MSG_SQLREPORTPARAMETER_MSG_SQLREPORT_FROM_MSG_SQLREPORT_TITLE',
    'id' => 'MSG_SQLREPORTPARAMETER_MSG_SQLREPORTMSG_SQLREPORT_IDA',
    'width' => '10%',
    'name' => 'msg_sqlreportparameter_msg_sqlreport_name',
  ),
  'position' => 
  array (
    'type' => 'int',
    'label' => 'LBL_POSITION',
    'width' => '10%',
    'name' => 'position',
  ),
  'name' => 
  array (
    'type' => 'name',
    'link' => true,
    'label' => 'LBL_NAME',
    'width' => '10%',
    'name' => 'name',
  ),
  'assigned_user_name' => 
  array (
    'link' => true,
    'type' => 'relate',
    'label' => 'LBL_ASSIGNED_TO_NAME',
    'id' => 'ASSIGNED_USER_ID',
    'width' => '10%',
    'name' => 'assigned_user_name',
  ),
),
    'listviewdefs' => array (
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
    'type' => 'name',
    'link' => true,
    'label' => 'LBL_NAME',
    'width' => '10%',
    'default' => true,
  ),
  'DATE_ENTERED' => 
  array (
    'type' => 'datetime',
    'label' => 'LBL_DATE_ENTERED',
    'width' => '10%',
    'default' => true,
  ),
  'DATE_MODIFIED' => 
  array (
    'type' => 'datetime',
    'label' => 'LBL_DATE_MODIFIED',
    'width' => '10%',
    'default' => true,
  ),
  'ASSIGNED_USER_NAME' => 
  array (
    'link' => true,
    'type' => 'relate',
    'label' => 'LBL_ASSIGNED_TO_NAME',
    'id' => 'ASSIGNED_USER_ID',
    'width' => '10%',
    'default' => true,
  ),
),
);
