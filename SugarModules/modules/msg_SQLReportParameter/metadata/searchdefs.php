<?php
$module_name = 'msg_SQLReportParameter';
$searchdefs [$module_name] = 
array (
  'layout' => 
  array (
    'basic_search' => 
    array (
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
        'name' => 'name',
        'default' => true,
        'width' => '10%',
      ),
      'assigned_user_id' => 
      array (
        'name' => 'assigned_user_id',
        'label' => 'LBL_ASSIGNED_TO',
        'type' => 'enum',
        'function' => 
        array (
          'name' => 'get_user_array',
          'params' => 
          array (
            0 => false,
          ),
        ),
        'width' => '10%',
        'default' => true,
      ),
      'current_user_only' => 
      array (
        'name' => 'current_user_only',
        'label' => 'LBL_CURRENT_USER_FILTER',
        'type' => 'bool',
        'default' => true,
        'width' => '10%',
      ),
    ),
    'advanced_search' => 
    array (
      0 => 'name',
      1 => 
      array (
        'name' => 'assigned_user_id',
        'label' => 'LBL_ASSIGNED_TO',
        'type' => 'enum',
        'function' => 
        array (
          'name' => 'get_user_array',
          'params' => 
          array (
            0 => false,
          ),
        ),
      ),
    ),
  ),
  'templateMeta' => 
  array (
    'maxColumns' => '3',
    'maxColumnsBasic' => '4',
    'widths' => 
    array (
      'label' => '10',
      'field' => '30',
    ),
  ),
);
?>
