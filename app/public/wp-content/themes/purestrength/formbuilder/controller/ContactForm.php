<?php

// 設定ファイル呼び出し
require_once __DIR__ . '/../../formbuilder/config/config.php';

// 必要モジュール
require_once \Config::$set_lib_page;
require_once \Config::$set_lib_util;
require_once \Config::$set_lib_session;
require_once \Config::$set_lib_form;
require_once \Config::$set_controller_baseform;
require_once \Config::$set_service_constans;
require_once \Config::$set_phpmailer;

class ContactForm extends BaseForm {

    protected $controller = 'contact';

    // template内でディレクトリを分けたい時に入力　contactを作る場合は「contact/」
    // ディレクトリ作成しない場合は空のままにする
    protected $formTemplateDirectory = 'contact/';

    public function __construct() {
        parent::__construct();
        
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // POSTデータを取得
            $this->arrForm = $this->_objForm->getForm($_POST);
            $this->setFormItem();
            // ページ切り替え
            switch ($this->arrForm['mode']) {
                case 'confirm':
                    // 確認画面
                    $this->confirm();
                    break;
                case 'complate':
                    // 完了画面
                    $this->complate();
                    break;
                case 'back':
                    // 確認画面から戻ってきた場合
                    $this->getSessionData($this->arrForm['mode']);
                    $this->_objPage->setAssign("key", $this->arrForm['key']);
                    $this->_tpl = $this->formTemplateDirectory . $this->controller . "_input.tpl";
                    break;
                default:
                    $this->_tpl = $this->formTemplateDirectory . $this->controller . "_input.tpl";
                    break;
            }
        } else {
            // 入力画面
            $this->index();
        }
        // フォームをSmartyにアサイン
        $this->_objPage->setAssign("arrForm", $this->arrForm);
    }

    // 入力画面
    private function index () {
        // CSRFトークンをセットする
        $this->setCsrfToken();
        // 初期値を格納する
        $this->setDefaultData();
        $this->_tpl = $this->formTemplateDirectory . $this->controller . "_input.tpl";
    }

    // 確認画面
    private function confirm () {
        // CSRFトークンをチェックする
        $this->checkCsrfToken($this->arrForm['key']);
        // エラーチェック
        $arrErr = $this->getErrCheck();
        if (count($arrErr) > 0) {
            // エラーあり
            $this->arrForm['mode'] = "confirm";
            $this->_tpl = $this->formTemplateDirectory . $this->controller . "_input.tpl";
            $this->_objPage->setAssign("arrErr", $arrErr);
        } else {
            // エラーなし
            // Sessionへ入力値を格納する
            $this->setSessionData();
            // 確認画面表示
            $this->arrForm['mode'] = "complate";
            $this->_tpl = $this->formTemplateDirectory . $this->controller . "_confirm.tpl";
        } 
    }

    // 完了画面
    private function complate () {
        $error_flag = false;
        // CSRFトークンをチェックする
        $this->checkCsrfToken($this->arrForm['key']);
        // Sessionから入力値を取得する
        $this->getSessionData();
        // エラーチェック
        $arrErr = $this->getErrCheck();
        if (count($arrErr) > 0) {
            // 入力エラー
            $error_flag = true;
            $this->createLog('complate Function getErrCheck Error');
            $this->arrForm['mode'] = "confirm";
            $arrErr['complate_error'] = "validation";
            $this->_tpl = $this->formTemplateDirectory . $this->controller . "_input.tpl";
            $this->_objPage->setAssign("arrErr", $arrErr);
        } else {
            // エラーなし
            // contactdate 文字化け修正
            $contactdate = date('Y年n月j日 H時i分');
            $this->_objPage->setAssign("arrForm", $this->arrForm);
            $this->_objPage->setAssign("arrGenre", $this->_arrGenre);
            $this->_objPage->setAssign("contactdate", $contactdate);

            // 管理者宛てメール送信
            try {
                \Util::sendmail(
                    \Service\Constans::$admin_mail_to[$this->controller], // 管理者メール TO
                    \Service\Constans::$admin_mail_cc[$this->controller], // 管理者メール CC
                    \Service\Constans::$admin_mail_bcc[$this->controller], // 管理者メール BCC
                    \Service\Constans::$admin_mail_from_addr[$this->controller], // 管理者メール FROM メールアドレス
                    \Service\Constans::$admin_mail_from_name[$this->controller], // 管理者メール FROM 名前
                    \Service\Constans::$admin_mail_title[$this->controller], // 管理者メール 件名
                    $this->_objPage->getHtml($this->formTemplateDirectory . "mail/" . $this->controller . "_mail.tpl"),  // 管理者メール テンプレート
                    false // SMTP
                );
            } catch (Exception $ex) {
                // 送信エラー
                $error_flag = true;
                $this->createLog($ex);
                $this->createLog('complate Function sendmail admin Error');
                $arrErr['send'] = "送信に失敗しました。";
                $arrErr['complate_error'] = "sendmail";
                $this->_tpl = $this->formTemplateDirectory . $this->controller . "_input.tpl";
                $this->_objPage->setAssign("arrErr", $arrErr);
            }

            // ユーザー宛てメール送信
            try {
                \Util::sendmail(
                    array($this->arrForm['mail'] => $this->arrForm['name']), // ユーザーメール TO
                    null, // ユーザーメール CC
                    null, // ユーザーメール BCC
                    \Service\Constans::$customer_mail_from_addr[$this->controller], // ユーザーメール FROM メールアドレス
                    \Service\Constans::$customer_mail_from_name[$this->controller], // ユーザーメール FROM 名前
                    \Service\Constans::$customer_mail_title[$this->controller], // ユーザーメール 件名
                    $this->_objPage->getHtml($this->formTemplateDirectory . "mail/" . $this->controller . "_mail_return.tpl"), // ユーザーメール テンプレート
                    false // SMTP
                );
            } catch (Exception $ex) {
                // 送信エラー
                $error_flag = true;
                $this->createLog($ex);
                $this->createLog('complate Function sendmail customer Error');
                $arrErr['send'] = "送信に失敗しました。";
                $arrErr['complate_error'] = "sendmail";
                $this->_tpl = $this->formTemplateDirectory . $this->controller . "_input.tpl";
                $this->_objPage->setAssign("arrErr", $arrErr);
            }
        }

        if (!$error_flag) {
            // Session削除
            \Session::destroy('', true);
            // 完了画面へ遷移
            header("Location: thanks.html");
            exit();
        }
    }

    function getErrCheck() {
        $arrErr = $this->_objForm->getFormCheck($this->arrForm);

        // reCAPTCHA(v2)チェック
        $captcha = '';
        if (isset($this->arrForm['g-recaptcha-response'])) {
            $captcha =  $this->arrForm['g-recaptcha-response'];
        }
        if ($captcha == '') {
             $arrErr['grecap']['error_message'] = 'reCAPTCHAにチェックをいれてください。';
        } elseif (isset($_POST['mode']) && $_POST['mode'] == 'complate') {
            // 完了画面ではapiを呼び出さない
        } else {
            $response_json = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=" . \Service\Constans::$recaptcha_secretkey . "&response=" . $captcha . "&remoteip=" . $_SERVER['REMOTE_ADDR']);
            $response_data = json_decode($response_json, TRUE);
            if ($response_data['success'] != 1) {
                $arrErr['grecap']['error_message'] = "もう一度reCAPTCHAにチェックを入れてください。";
            } else {
            }
        }

        // 規約チェック
        if ($this->arrForm['consent'] == '1') {
            $arrErr['consent']['error_message'] = '「同意します」に印を付けてから「確認」ボタンをクリックしてください。';
            $arrErr['consent']['error_class'] = \Service\Constans::$error_class;
        }

        // メールアドレス一致チェック
        if (($this->arrForm['mail'] != "" && $this->arrForm['mail_conf'] != "") && $this->arrForm['mail'] != $this->arrForm['mail_conf']) {
            $arrErr['mail_conf']['error_message'] = \Service\Constans::$error_start_tag . 'メールアドレス（確認用）が一致しません。' . \Service\Constans::$error_end_tag;
        }

        return $arrErr;
    }

    // フォーム項目設定
    function setFormItem() {
        $this->_objForm->addParam("reply", "回答希望の有無", array("require"));
        $this->_objForm->addParam("name", "お名前", array("require"));
        $this->_objForm->addParam("mail", "メールアドレス", array("require", "mail"));
        $this->_objForm->addParam("mail_conf", "メールアドレス（確認用）", array("require", "mail"));
        $this->_objForm->addParam("tel", "電話番号", array(""));
        $this->_objForm->addParam("age", "年齢", array(""));
        $this->_objForm->addParam("gender", "性別", array(""));
        $this->_objForm->addParam("consent", "利用規約に同意",array("require"));
        $this->_objForm->addParam("content", "お問い合わせ内容", array("require"));
        $this->_objForm->addParam("g-recaptcha-response", "reCAPTCHA", array(""));
    }

	// フォーム画面設定
	function getFormDisplay() {
		return $this->_objPage->getHtml($this->_tpl);
	}

    /*
     * 初期値を格納する
     */
    function setDefaultData() {
        $this->arrForm = array(
            'reply' => '',
            'name' => '',
            'mail' => '',
            'mail_conf' => '',
            'tel' => '',
            'age' => '',
            'gender' => '',
            'content' => '',
            'consent' => '',
            'g-recaptcha-response' => '',
            // csrfのキーは格納しない
        );
    }

    /*
     * Sessionへ入力値を格納する
     */
    function setSessionData() {
        \Session::set('reply', $this->arrForm['reply']);
        \Session::set('name', $this->arrForm['name']);
        \Session::set('mail', $this->arrForm['mail']);
        \Session::set('mail_conf', $this->arrForm['mail_conf']);
        \Session::set('tel', $this->arrForm['tel']);
        \Session::set('age', $this->arrForm['age']);
        \Session::set('gender', $this->arrForm['gender']);
        \Session::set('content', $this->arrForm['content']);
        \Session::set('consent', $this->arrForm['consent']);
        \Session::set('g-recaptcha-response', $this->arrForm['g-recaptcha-response']);
        // csrfのキーは格納しない
    }

    /*
     * Sessionから入力値を取得する
     */
    public function getSessionData() {
        $this->arrForm['reply'] = \Session::get('reply');
        $this->arrForm['name'] = \Session::get('name');
        $this->arrForm['mail'] = \Session::get('mail');
        $this->arrForm['mail_conf'] = \Session::get('mail_conf');
        $this->arrForm['tel'] = \Session::get('tel');
        $this->arrForm['age'] = \Session::get('age');
        $this->arrForm['gender'] = \Session::get('gender');
        $this->arrForm['content'] = \Session::get('content');
        $this->arrForm['consent'] = \Session::get('consent');
        $this->arrForm['g-recaptcha-response'] = \Session::get('g-recaptcha-response');
        $this->arrForm['key'] = \Session::get('key');
    }
}
?>