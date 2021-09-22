<?php
$module_name = 'msg_SQLReport';
global $mod_strings;
$runReport = <<<HTML
<button title="{$mod_strings['LBL_RUNREPORT']}" id="action_button" class="button" type="submit" name="action" value="run" onclick="window.onbeforeunload=null;document.getElementById('EditView').submit();"><span>{$mod_strings['LBL_RUNREPORT']}</span></button>
HTML;
$viewdefs[$this->ev->module][$this->ev->view] = array(
    'templateMeta' => array(
        'maxColumns' => '2',
        'widths' => array(
            array('label' => '10', 'field' => '30'),
            array('label' => '10', 'field' => '30')
        ),
        'form' => array (
            'hideAudit' => true,
            'button_location' => 'bottom',
            'buttons' => array(0 => array( 'customCode' => $runReport ),
            ),
        ),
    ),
    'panels' => array(
        'default' => array(),
    ),
);
