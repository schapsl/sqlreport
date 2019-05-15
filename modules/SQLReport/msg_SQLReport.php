<?php

require_once 'modules/msg_SQLReport/msg_SQLReport_sugar.php';

class msg_SQLReport extends msg_SQLReport_sugar {

    const SUGAR_CONFIG = 'sugar_config';
    const UPLOAD_DIR   = 'upload_dir';


    private static $mod_strings;

    /** @var Link2 */
    public $msg_sqlreportparameter_msg_sqlreport;

    public function __construct() {
        parent::__construct();
        if(!isset(self::$mod_strings)) {
            self::$mod_strings= return_module_language(
                $GLOBALS['current_language'],
                self::class);
        }
    }

    public function save($check_notify = false){
        $this->sqlquery = htmlspecialchars_decode($this->sqlquery, ENT_QUOTES);
        $strippedName = preg_replace('/[^A-Za-z0-9 _.-]/', '', $this->name );
        if( $strippedName !==  $this->name ) {
            SugarApplication::appendErrorMessage("Invalid name given. May only contain 'A-Za-z0-9 _.-'. Invalid characters have been stripped.");
            $this->name = $strippedName;
        }

        if(empty($this->sqlquery)){
            SugarApplication::appendErrorMessage('SQL statement empty.');
            return false;
        }
        if(strpos($this->sqlquery, '\\' ) ) {
            SugarApplication::appendErrorMessage(
                'For security reasons, a backslash character (\'\\\' / escaping ) is not allowed.');
            return false;
        }
        if(strpos($this->sqlquery, ';' ) ) {
            SugarApplication::appendErrorMessage(
                'For security reasons, multiple statements / the semi-colon \';\' is not allowed.');
            return false;
        }
        $sql= $this->extractQuotedParts(
            $this->extractQuotedParts(
                $this->extractQuotedParts(
                    $this->sqlquery,
                    '"'),
                '\''),
            '`');
        if( false === preg_match('/^\s*select\s+/i', $sql)){
            SugarApplication::appendErrorMessage('Only SELECT statements are allowed.');
            return false;
        }
        parent::save($check_notify);
    }

    /**
     * Remove quoted parts from string.
     * @param string $string The string qith quoted parts.
     * @param string $quote The quote character.
     * @return string The string without the quoted parts.
     */
    protected function extractQuotedParts(string $string, string $quote) {
        $sqlparts = explode($quote, $string );
        $outside = true;
        $newString='';
        foreach ($sqlparts as $part) {
            $newString .= $outside ? $part : '';
        }
        return $newString;
    }
}
