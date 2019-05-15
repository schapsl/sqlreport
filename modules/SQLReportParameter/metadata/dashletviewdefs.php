<?php
$dashletData['msg_SQLReportParameterDashlet']['searchFields'] = array (
  'msg_sqlreportparameter_msg_sqlreport_name' => 
  array (
    'default' => '',
  ),
  'position' => 
  array (
    'default' => '',
  ),
  'name' => 
  array (
    'default' => '',
  ),
  'date_entered' => 
  array (
    'default' => '',
  ),
  'date_modified' => 
  array (
    'default' => '',
  ),
  'assigned_user_id' => 
  array (
    'default' => '',
  ),
);
$dashletData['msg_SQLReportParameterDashlet']['columns'] = array (
  'msg_sqlreportparameter_msg_sqlreport_name' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_MSG_SQLREPORTPARAMETER_MSG_SQLREPORT_FROM_MSG_SQLREPORT_TITLE',
    'id' => 'MSG_SQLREPORTPARAMETER_MSG_SQLREPORTMSG_SQLREPORT_IDA',
    'width' => '10%',
    'default' => true,
    'name' => 'msg_sqlreportparameter_msg_sqlreport_name',
  ),
  'position' => 
  array (
    'type' => 'int',
    'default' => true,
    'label' => 'LBL_POSITION',
    'width' => '10%',
    'name' => 'position',
  ),
  'name' => 
  array (
    'width' => '40%',
    'label' => 'LBL_LIST_NAME',
    'link' => true,
    'default' => true,
    'name' => 'name',
  ),
  'date_entered' => 
  array (
    'width' => '15%',
    'label' => 'LBL_DATE_ENTERED',
    'default' => false,
    'name' => 'date_entered',
  ),
  'date_modified' => 
  array (
    'width' => '15%',
    'label' => 'LBL_DATE_MODIFIED',
    'name' => 'date_modified',
    'default' => false,
  ),
  'created_by' => 
  array (
    'width' => '8%',
    'label' => 'LBL_CREATED',
    'name' => 'created_by',
    'default' => false,
  ),
  'assigned_user_name' => 
  array (
    'width' => '8%',
    'label' => 'LBL_LIST_ASSIGNED_USER',
    'name' => 'assigned_user_name',
    'default' => false,
  ),
);
