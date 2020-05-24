<?php
// created: 2019-11-11 16:36:01
$dictionary["msg_SQLReportParameter"]["fields"]["msg_sqlreportparameter_msg_sqlreport"] = array (
  'name' => 'msg_sqlreportparameter_msg_sqlreport',
  'type' => 'link',
  'relationship' => 'msg_sqlreportparameter_msg_sqlreport',
  'source' => 'non-db',
  'module' => 'msg_SQLReport',
  'bean_name' => false,
  'vname' => 'LBL_MSG_SQLREPORTPARAMETER_MSG_SQLREPORT_FROM_MSG_SQLREPORT_TITLE',
  'id_name' => 'msg_sqlreportparameter_msg_sqlreportmsg_sqlreport_ida',
);
$dictionary["msg_SQLReportParameter"]["fields"]["msg_sqlreportparameter_msg_sqlreport_name"] = array (
  'name' => 'msg_sqlreportparameter_msg_sqlreport_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_MSG_SQLREPORTPARAMETER_MSG_SQLREPORT_FROM_MSG_SQLREPORT_TITLE',
  'save' => true,
  'id_name' => 'msg_sqlreportparameter_msg_sqlreportmsg_sqlreport_ida',
  'link' => 'msg_sqlreportparameter_msg_sqlreport',
  'table' => 'msg_sqlreport',
  'module' => 'msg_SQLReport',
  'rname' => 'name',
);
$dictionary["msg_SQLReportParameter"]["fields"]["msg_sqlreportparameter_msg_sqlreportmsg_sqlreport_ida"] = array (
  'name' => 'msg_sqlreportparameter_msg_sqlreportmsg_sqlreport_ida',
  'type' => 'link',
  'relationship' => 'msg_sqlreportparameter_msg_sqlreport',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_MSG_SQLREPORTPARAMETER_MSG_SQLREPORT_FROM_MSG_SQLREPORTPARAMETER_TITLE',
);
