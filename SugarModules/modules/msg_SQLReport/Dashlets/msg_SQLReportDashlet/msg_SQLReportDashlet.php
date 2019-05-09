<?php
if (!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
require_once('include/Dashlets/DashletGeneric.php');
require_once('modules/msg_SQLReport/msg_SQLReport.php');

class msg_SQLReportDashlet extends DashletGeneric {
    function __construct($id, $def = null) {
        global $current_user, $app_strings;
        require('modules/msg_SQLReport/metadata/dashletviewdefs.php');

        parent::__construct($id, $def);

        if (empty($def['title'])) $this->title = translate('LBL_HOMEPAGE_TITLE', 'msg_SQLReport');

        $this->searchFields = $dashletData['msg_SQLReportDashlet']['searchFields'];
        $this->columns = $dashletData['msg_SQLReportDashlet']['columns'];

        $this->seedBean = new msg_SQLReport();
    }
}