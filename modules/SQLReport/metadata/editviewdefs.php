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
            0 => array(
                'name',
                'assigned_user_name',
            ),
            1 => array(
                'description',
            ),
            2 => array(
                0 => array (
                    'name' => 'sqlquery',
                    'studio' => 'visible',
                    'label' => 'LBL_SQLQUERY',
                    'displayParams' => array(
                        'rows' => 10,
                        'cols' => 160,
                        'style' => 'width:120%;',
                    ),
                ),
            ),
        ),
    ),
);
