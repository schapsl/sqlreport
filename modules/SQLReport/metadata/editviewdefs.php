<?php
$module_name = 'msg_SQLReport';
$viewdefs[$module_name]['EditView'] = array(
    'templateMeta' => array('maxColumns' => '2',
        'widths' => array(
            array('label' => '10', 'field' => '30'),
            array('label' => '10', 'field' => '30')
        ),
    ),
    'panels' => array(
        'default' => array(
            array(
                'name',
                'assigned_user_name',
            ),
            array(
                'description',
            ),
            array(
                0 => array (
                    'name' => 'sqlquery',
                    'studio' => 'visible',
                    'label' => 'LBL_SQLQUERY',
                    'displayParams' => array(
                        'rows' => 10,
                        'cols' => 80,
                    ),
                ),
            ),
        ),
    ),
);
