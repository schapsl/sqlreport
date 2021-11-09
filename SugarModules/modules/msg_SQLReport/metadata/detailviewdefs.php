<?php
$module_name = 'msg_SQLReport';
global $mod_strings;
$runReport = <<<HTML
<input title="{$mod_strings['LBL_RUNREPORT']}" accessKey="B" class="button" type="submit" name="action"
 value="{$mod_strings['LBL_RUNREPORT']}"
    onclick="window.open('index.php?module={$module_name}&action=run&record={\$fields.id.value}', '_self');">
HTML;
$viewdefs[$module_name]['DetailView'] = array(
    'templateMeta' => array(
        'form' => array(
            'buttons' => array(
                'EDIT', 'DUPLICATE', 'DELETE', 'FIND_DUPLICATES',
                array('customCode' => $runReport)
            )),
        'maxColumns' => '2',
        'widths' => array(
            array('label' => '10', 'field' => '30'),
            array('label' => '10', 'field' => '30')
        ),
    ),
    'panels' => array(
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
            ),
        ),
        array(
            array(
                'name' => 'date_entered',
                'customCode' => '{$fields.date_entered.value} {$APP.LBL_BY} {$fields.created_by_name.value}',
                'label' => 'LBL_DATE_ENTERED',
            ),
            array(
                'name' => 'date_modified',
                'customCode' => '{$fields.date_modified.value} {$APP.LBL_BY} {$fields.modified_by_name.value}',
                'label' => 'LBL_DATE_MODIFIED',
            ),
        ),
    )
);
