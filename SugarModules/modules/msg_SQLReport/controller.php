<?php

use PhpOffice\PhpSpreadsheet\IOFactory;
use PhpOffice\PhpSpreadsheet\Spreadsheet;

require_once 'include/MVC/Controller/SugarController.php';
require_once 'modules/msg_SQLReport/msg_SQLReport.php';
require_once 'modules/msg_SQLReportParameter/msg_SQLReportParameter.php';
require_once 'include/database/DBManagerFactory.php';
require_once 'modules/msg_SQLReport/vendor/autoload.php';
require_once 'modules/msg_SQLReport/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Spreadsheet.php';

class msg_SQLReportController extends SugarController {
    const XLSX = 'Xlsx';
    const SUGAR_CONFIG = 'sugar_config';
    const UPLOAD_DIR   = 'upload_dir';

    /** @var msg_SQLReport */
    public $bean;

    /**
     * Run action - generates the report for download.
     */
    public function action_run(){
        $this->bean->load_relationship('msg_sqlreportparameter_msg_sqlreport');
        $parameterMisssing= false;
        $parameter = $this->bean->msg_sqlreportparameter_msg_sqlreport->getBeans();
        $sqlParameter= array();
        if(isset($parameter) && is_array($parameter ) && !empty(array_filter($parameter))) {
            foreach ($parameter as /** @var msg_SQLReportParameter $item */ $item) {
                if (!isset($_REQUEST[$item->getNameAsId()])) {
                    $parameterMisssing = true;
                    break;
                }
                // Zero-based: -1
                $sqlParameter[ $item->position - 1 ]= $_REQUEST[$item->getNameAsId()];
            }
        }
        if(!$parameterMisssing){
            $this->runReport($sqlParameter);
        } else {
            $this->view = 'run';
        }
    }

    /**
     * @param array $sqlParameter
     */
    private function runReport($sqlParameter){
        try{
            /** @var msg_SQLReport $report */
            $report= $this->bean;
            $sql = htmlspecialchars_decode($report->sqlquery, ENT_QUOTES);
            $db= DBManagerFactory::getInstance();
            $res= $db->pQuery($sql, $sqlParameter);
            if( false === $res ) {
                throw new Exception('DB-Fehler: Die Anzahl Parameter stimmt nicht mit der Anzahl der Platzhalter überein');
            }
            $row= $db->fetchRow($res);
            if(!$row) {
                throw new Exception('DB-Fehler: ' . $db->lastError());
            }

            $spreadSheet = new Spreadsheet();
            $sheet = $spreadSheet->getActiveSheet();
            $sheet->fromArray(array_keys($row));
            $line = 2;

            while ($row) {
                $sheet->fromArray($row, '', 'A' . $line++, true);
                $row = $db->fetchRow($res);
            }
            $writer = IOFactory::createWriter($spreadSheet, self::XLSX);

            $dir = rtrim($GLOBALS[self::SUGAR_CONFIG][self::UPLOAD_DIR]);
            $guid = create_guid();
            $fileName = $dir . $guid . '.' . '' . strtolower(self::XLSX);
            $writer->save($fileName);
            $spreadSheet->disconnectWorksheets();
            unset($spreadSheet);
            do {
                $running = ob_get_level() && @ob_end_clean();
            } while ($running);
            header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
            header('Content-Disposition: attachment;filename="' . $report->name . '_' . date('Y-m-d') . '.xlsx"');
            header('Cache-Control: max-age=0');
            header('Content-Length: ' . filesize($fileName));
            readfile($fileName);
            unlink($fileName);
            exit();
        } catch (\PhpOffice\PhpSpreadsheet\Exception $e) {
            SugarApplication::appendErrorMessage('Fehler: Report konnte nicht generiert werden.');
            $this->view = 'detail';
        } catch (Exception $e){
            SugarApplication::appendErrorMessage($e->getMessage());
            $this->view = 'detail';
        }
    }

    public function action_save() {
        parent::action_save();
        if(empty($this->bean->id)){
            $this->return_action = 'edit';
        }
    }
}
