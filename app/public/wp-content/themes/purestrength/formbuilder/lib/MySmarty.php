<?php
/*********************
 * Smarty設定クラス
 */
define('ROOTPATH', $_SERVER["DOCUMENT_ROOT"]."/");
set_include_path(\Config::$set_module);

// 読み込み
require_once \Config::$set_smartyclass;

// クラスの定義
class MySmarty extends SmartyBC {
    
    function __construct() {
        parent::__construct();
        // $this->allow_php_tag = false;
        $this->template_dir = \Config::$templatepath;
        $this->compile_dir = \Config::$compilepath;
    }
}
?>