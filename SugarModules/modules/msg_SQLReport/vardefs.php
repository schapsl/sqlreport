<?php
$dictionary['msg_SQLReport'] = array(
    'table'=>'msg_sqlreport',
    'audited'=>true,
    'inline_edit'=>true,
        'duplicate_merge'=>true,
        'fields'=>array (
  'sqlquery' => 
  array (
    'required' => true,
    'name' => 'sqlquery',
    'vname' => 'LBL_SQLQUERY',
    'type' => 'text',
    'massupdate' => 0,
    'no_default' => false,
    'comments' => '',
    'help' => 'SQL-Query for report.',
    'importable' => 'true',
    'duplicate_merge' => 'disabled',
    'duplicate_merge_dom_value' => '0',
    'audited' => true,
    'inline_edit' => true,
    'reportable' => true,
    'unified_search' => false,
    'merge_filter' => 'disabled',
    'size' => '20',
    'studio' => 'visible',
    'rows' => '10',
    'cols' => '40',
  ),
),
    'relationships'=>array (
),
    'optimistic_locking'=>true,
        'unified_search'=>true,
    );
if (!class_exists('VardefManager')){
        require_once('include/SugarObjects/VardefManager.php');
}
VardefManager::createVardef('msg_SQLReport','msg_SQLReport', array('basic','assignable','security_groups'));