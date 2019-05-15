<?php

require_once 'include/MVC/View/views/view.edit.php';
require_once 'modules/msg_SQLReport/msg_SQLReport.php';
require_once 'modules/msg_SQLReportParameter/msg_SQLReportParameter.php';

 class ViewRun extends ViewEdit {

     /** @var msg_SQLReport */
     public $bean;

     /**
     * @see SugarView::preDisplay()
     */
    public function preDisplay(){
        parent::preDisplay();
        $viewdefs[$this->ev->module][$this->ev->view]= array();
        include 'modules/msg_SQLReport/metadata/runviewdefs.php';
        /** @var msg_SQLReport $bean */
        $parameter= $this->bean->msg_sqlreportparameter_msg_sqlreport->getBeans();
        foreach ($parameter as /** @var msg_SQLReportParameter $item */ $item ){
            $id= $item->getNameAsId();
            $new = array (
                0 => array (
                    'name' => $id,
                    'label' => $item->name . ' - ' . $item->description,
                    'customCode' => "<input name='$id' id='$id' size='25' maxlength='25' type='text' value=''>",
                ),
            );
            $viewdefs[ $this->ev->module][ $this->ev->view]['panels']['default'][] = $new;
        }
        $this->ev->defs = $viewdefs[$this->ev->module][$this->ev->view];
    }

     /**
      * Return the "breadcrumbs" to display at the top of the page
      *
      * @param bool $show_help optional, true if we show the help links
      * @return string
      * @throws Exception
      */
     public function getModuleTitle($show_help = true) {
         $module = $GLOBALS['mod_strings']['LBL_MODULE_TITLE'];
         $params = array( $this->bean->name, 'Parameter' );

         $count = count($params);
         $index = 0;
         $paramString = '';
         foreach($params as $parm){
             $index++;
             $paramString .= $parm;
             if($index < $count){
                 $paramString .= $this->getBreadCrumbSymbol();
             }
         }
         $theTitle= <<<HTML
<div class='moduleTitle'>
    <h2><a href="{$_SERVER['PHP_SELF']}?action=ajaxui#ajaxUILoc=index.php%3Fmodule%3D{$module}%26action%3Dindex">{$module}</a> / {$paramString}</h2><span>
    <div class='clear'></div>
</div>
HTML;
         return $theTitle;
     }
}
