<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$SIMPLE_VER = 1;

date_default_timezone_set('Asia/Tokyo');

class Config
{
    public static $USE_SMTP = false;
    // SMTPメールを使用する場合のサーバー情報 -start
    public static $SMTP_MAIL_SERVER_HOST = "";
    public static $SMTP_MAIL_SERVER_PORT = 25;
    public static $SMTP_MAIL_USERNAME = "";
    public static $SMTP_MAIL_PASSWORD = "";
    // SMTPメールを使用する場合のサーバー情報 -end
    public static $SERVER_ENV;
    public static $DBHOST;
    public static $DBUSER;
    public static $DBPASSWORD;
    public static $DBNAME;
    public static $DBENCODING;
    
    public static $INPUT_ENCODING = 'UTF-8';

    public static $app_path;
    public static $base_url;

    public static $set_lib_page;
    public static $set_lib_util;
    public static $set_lib_session;
    public static $set_lib_form;
    
    public static $set_controller_baseform;

    public static $set_module;
    public static $set_smartyclass;

    public static $set_mysmarty;

    public static $set_phpmailer;

    public static $templatepath;
    public static $compilepath;

    public static $set_service_constans;

    public static $log_path;
}

if ( $_SERVER['SERVER_NAME'] == 'www.purestrength.jp' ||
    $_SERVER['SERVER_NAME'] == 'purestrength.jp' ) { // 本番環境
    error_reporting(0); // 全てのエラー出力をオフにする
    //ini_set('display_errors', 1);
    //error_reporting(E_ALL); // 全ての PHP エラーを表示する

    Config::$SERVER_ENV = 'PRODUCT';

    Config::$app_path = "/slimform/";
    Config::$base_url = "https://www.purestrength.jp";

    Config::$set_lib_page = __DIR__ . '/../../formbuilder/lib/Page.php';
    Config::$set_lib_util = __DIR__ . '/../../formbuilder/lib/Util.php';
    Config::$set_lib_session = __DIR__ . '/../../formbuilder/lib/Session.php';
    Config::$set_lib_form = __DIR__ . '/../../formbuilder/lib/Form.php';

    Config::$set_controller_baseform = __DIR__ . '/../../formbuilder/controller/BaseForm.php';

    Config::$set_module = __DIR__ . '/../../formbuilder/module/';
    Config::$set_smartyclass = __DIR__ . '/../../formbuilder/module/smarty/libs/SmartyBC.class.php';
    
    Config::$set_mysmarty =  __DIR__ . '/../../formbuilder/lib/MySmarty.php';

    Config::$set_phpmailer =  __DIR__ . '/../../formbuilder/module/phpmailer/class.phpmailer.php';
    
    Config::$templatepath =  __DIR__ . '/../../formbuilder/templates';
    Config::$compilepath =  __DIR__ . '/../../formbuilder/templates_c';

    Config::$set_service_constans =  __DIR__ . '/../../formbuilder/service/constans.php';

    Config::$log_path = __DIR__ . '/../logs/';

} elseif ($_SERVER['SERVER_NAME'] == 'netra-simple-form.netra-test.net') { // テスト環境
    error_reporting(0); // 全てのエラー出力をオフにする
    //ini_set('display_errors', 1);
    //error_reporting(E_ALL); // 全ての PHP エラーを表示する

    Config::$SERVER_ENV = 'STAGING';

    Config::$app_path = "/slimform/";
    Config::$base_url = "https://netra-simple-form.netra-test.net";

    Config::$set_lib_page = __DIR__ . '/../../formbuilder/lib/Page.php';
    Config::$set_lib_util = __DIR__ . '/../../formbuilder/lib/Util.php';
    Config::$set_lib_session = __DIR__ . '/../../formbuilder/lib/Session.php';
    Config::$set_lib_form = __DIR__ . '/../../formbuilder/lib/Form.php';

    Config::$set_controller_baseform = __DIR__ . '/../../formbuilder/controller/BaseForm.php';

    Config::$set_module = __DIR__ . '/../../formbuilder/module/';
    Config::$set_smartyclass = __DIR__ . '/../../formbuilder/module/smarty/libs/SmartyBC.class.php';
    
    Config::$set_mysmarty =  __DIR__ . '/../../formbuilder/lib/MySmarty.php';

    Config::$set_phpmailer =  __DIR__ . '/../../formbuilder/module/phpmailer/class.phpmailer.php';
    
    Config::$templatepath =  __DIR__ . '/../../formbuilder/templates';
    Config::$compilepath =  __DIR__ . '/../../formbuilder/templates_c';

    Config::$set_service_constans =  __DIR__ . '/../../formbuilder/service/constans.php';

    Config::$log_path = __DIR__ . '/../logs/';

} else { // ローカル環境
    ini_set('display_errors', 1); 
    error_reporting(E_ALL); // 全ての PHP エラーを表示する
    ini_set('scream.enabled', true); // エラー制御演算子を無効化してすべてのエラーを報告

    Config::$SERVER_ENV = 'DEVELOPMENT';

    Config::$app_path = "/slimform/";
    Config::$base_url = "http://purestrength.localhost";

    Config::$set_lib_page = __DIR__ . '/../../formbuilder/lib/Page.php';
    Config::$set_lib_util = __DIR__ . '/../../formbuilder/lib/Util.php';
    Config::$set_lib_session = __DIR__ . '/../../formbuilder/lib/Session.php';
    Config::$set_lib_form = __DIR__ . '/../../formbuilder/lib/Form.php';

    Config::$set_controller_baseform = __DIR__ . '/../../formbuilder/controller/BaseForm.php';

    Config::$set_module = __DIR__ . '/../../formbuilder/module/';
    Config::$set_smartyclass = __DIR__ . '/../../formbuilder/module/smarty/libs/SmartyBC.class.php';
    
    Config::$set_mysmarty =  __DIR__ . '/../../formbuilder/lib/MySmarty.php';

    Config::$set_phpmailer =  __DIR__ . '/../../formbuilder/module/phpmailer/class.phpmailer.php';

    Config::$templatepath =  __DIR__ . '/../../formbuilder/templates';
    Config::$compilepath =  __DIR__ . '/../../formbuilder/templates_c';

    Config::$set_service_constans =  __DIR__ . '/../../formbuilder/service/constans.php';

    Config::$log_path = __DIR__ . '/../logs/';

}

