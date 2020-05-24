<?php
// created: 2019-11-11 16:36:01
$dictionary["msg_sqlreportparameter_msg_sqlreport"] = array (
  'true_relationship_type' => 'one-to-many',
  'relationships' => 
  array (
    'msg_sqlreportparameter_msg_sqlreport' => 
    array (
      'lhs_module' => 'msg_SQLReport',
      'lhs_table' => 'msg_sqlreport',
      'lhs_key' => 'id',
      'rhs_module' => 'msg_SQLReportParameter',
      'rhs_table' => 'msg_sqlreportparameter',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'msg_sqlreportparameter_msg_sqlreport_c',
      'join_key_lhs' => 'msg_sqlreportparameter_msg_sqlreportmsg_sqlreport_ida',
      'join_key_rhs' => 'msg_sqlreportparameter_msg_sqlreportmsg_sqlreportparameter_idb',
    ),
  ),
  'table' => 'msg_sqlreportparameter_msg_sqlreport_c',
  'fields' => 
  array (
    0 => 
    array (
      'name' => 'id',
      'type' => 'varchar',
      'len' => 36,
    ),
    1 => 
    array (
      'name' => 'date_modified',
      'type' => 'datetime',
    ),
    2 => 
    array (
      'name' => 'deleted',
      'type' => 'bool',
      'len' => '1',
      'default' => '0',
      'required' => true,
    ),
    3 => 
    array (
      'name' => 'msg_sqlreportparameter_msg_sqlreportmsg_sqlreport_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'msg_sqlreportparameter_msg_sqlreportmsg_sqlreportparameter_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'msg_sqlreportparameter_msg_sqlreportspk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'msg_sqlreportparameter_msg_sqlreport_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'msg_sqlreportparameter_msg_sqlreportmsg_sqlreport_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'msg_sqlreportparameter_msg_sqlreport_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'msg_sqlreportparameter_msg_sqlreportmsg_sqlreportparameter_idb',
      ),
    ),
  ),
);