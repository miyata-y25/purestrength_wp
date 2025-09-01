<?php

class BaseForm {

    protected $_objPage;
    protected $_objForm;
    protected $_arrGenre;
    protected $_arrFairDetailData;
    protected $_arrFairIconData;
    protected $_tpl;
    protected $controller;
    protected $session;
    protected $arrForm;
    protected $formTemplateDirectory;

    public function __construct() {
        $this->_objPage = new Page();
        $this->_objForm = new Form();
        $this->session = new Session(); 
        $this->_tpl = "";
        \Session::init();
        \Session::setPrefix($this->controller . '_');
    }

    /*
     * CSRFトークンをセットする
     */
    public function setCsrfToken() {
        $key = sha1(uniqid(rand(), true));
        $this->_objPage->setAssign("key", $key);
        \Session::set('key', $key);
    }

    /*
     * CSRFトークンをチェックする
     */
    public function checkCsrfToken($key) {
        if (\Session::get('key') === $key) {
            $this->_objPage->setAssign("key", $key);
            return;
        }
        $this->createLog('Function checkCsrfToken Error');
        header("Location: " . \Config::$base_url);
        exit();
    }

    /*
     * ログを出力する
     */
    public function createLog($message) {
        $filename = \Config::$log_path . date('Y-m-d') . '.log';
        file_put_contents($filename, date('Y-m-d H:i:s') . ' - ' . $message . PHP_EOL, FILE_APPEND | LOCK_EX);
    }
    
}
