<?php

namespace Service;

class Constans {

    // サイトタイトル
    public static $site_title = array(
        'sfform_index' => '問い合わせフォーム戒',
        'sfform_confirm' => 'お問い合わせ確認 ｜ 問い合わせフォーム戒',
        'sfform_thanks' => 'お問い合わせ完了 ｜ 問い合わせフォーム戒',
        '404' => 'ページが見つかりませんでした ｜ 問い合わせフォーム戒',
        'error' => 'システムエラー ｜ 問い合わせフォーム戒',
    );

    // エラーメッセージ
    public static $error_message = array(
        'pref_required_error' => '選択を入力して下さい。',
        'name_required_error' => 'お名前を入力して下さい。',
        'name_valid_error' => 'お名前を全角で入力して下さい。',
        'zip_required_error' => '郵便番号を入力して下さい。',
        'zip_valid_error' => '郵便番号に無効な文字が指定されています。',
        'tel_required_error' => '電話番号を入力して下さい。',
        'tel_valid_error' => '電話番号に無効な文字が指定されています。',
        'email_required_error' => 'メールアドレスを入力して下さい。',
        'email_valid_error' => 'メールアドレスを正しく入力して下さい。',
        'sex_required_error' => '性別を選択して下さい。',
        'cake_required_error' => 'ケーキを選択して下さい。',
        'address_required_error' => '住所を入力して下さい。',
        'content_required_error' => 'お問い合わせ内容を入力して下さい。',
        'kiyaku_required_error' => '規約に同意をチェックして下さい。',
    );

    // エラークラス
    public static $error_class = ' error';

    // エラー開始タグ
    public static $error_start_tag = '<p class="error">';

    // エラー終了タグ
    public static $error_end_tag = '</p>';

    // reCAPTCHA サイトキー
    public static  $recaptcha_sitekey = '6LeiEd0UAAAAABAS3TolwO1-tajEyNK7AwYYcaV6';

    // reCAPTCHA シークレットキー
    public static  $recaptcha_secretkey = '6LeiEd0UAAAAAAMXXQTc200HIWvgb2WnXYJZF-uy';

    // 管理者メール TO
    public static $admin_mail_to = array(
        'contact' => array(
            'info@strength-f.com' => '管理者',
            // 'info@netra.jp' => '管理者',
        ),
    );

    // 管理者メール CC
    public static $admin_mail_cc = array(
        'contact' => array(),
    );

    // 管理者メール BCC
    public static $admin_mail_bcc = array(
        'contact' => array(),
    );

    // 管理者メール FROM メールアドレス
    public static $admin_mail_from_addr = array(
        'contact' => 'info@strength-f.com',
    );

    // 管理者メール FROM 名前
    public static $admin_mail_from_name = array(
        'contact' => 'ピュアストレングス',
    );

    // 管理者メール 件名
    public static $admin_mail_title = array(
        'contact' => '【ピュアストレングス】お問い合わせがありました',
    );

    // ユーザーメール FROM メールアドレス
    public static $customer_mail_from_addr = array(
        'contact' => 'info@strength-f.com',
    );

    // ユーザーメール FROM 名前
    public static $customer_mail_from_name = array(
        'contact' => 'ピュアストレングス',
    );

    // ユーザーメール 件名
    public static $customer_mail_title = array(
        'contact' => '【ピュアストレングス】お問い合わせありがとうございます',
    );

    // 回答希望の有無 ラジオボタン
    public static $reply = array(
        '1' => '回答を希望する',
		'2' => '回答を希望しない',
    );
    // 回答希望の有無 ラジオボタン
    public static $gender = array(
        '' => '',
        '1' => '男',
		'2' => '女',
    );
    //年齢　ラジオボタン
    public static $age = array(
        '' => '',
        '1' => '10代',
		'2' => '20代',
		'3' => '30代',
		'4' => '40代',
		'5' => '50代',
		'6' => '60歳以上',
    );
      // 利用規約の確認
    public static $consent = array(
        '1'=>"同意します",
        '2'=>"同意しません",
    );

    


}