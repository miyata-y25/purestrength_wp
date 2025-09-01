<?php
/* Smarty version 3.1.33, created on 2020-02-29 11:14:24
  from 'C:\xampp_7.2\htdocs\purestrength\public\formbuilder\templates\contact\mail\contact_mail_return.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5e59c900f0c005_64078898',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0fd0f09212c5b4df9d822bc5ca88eafec38d58ed' => 
    array (
      0 => 'C:\\xampp_7.2\\htdocs\\purestrength\\public\\formbuilder\\templates\\contact\\mail\\contact_mail_return.tpl',
      1 => 1582942306,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e59c900f0c005_64078898 (Smarty_Internal_Template $_smarty_tpl) {
?>このたびは、ピュアストレングス伊豆長岡にお問い合わせをいただきありがとうございました。

このメールはお客様の入力完了後に送られる自動返信メールです。
担当者から折り返しご連絡いたします。
──────────────────────────

【回答希望の有無】
<?php echo \Service\Constans::$reply[$_smarty_tpl->tpl_vars['arrForm']->value['reply']];?>


【お名前】
<?php echo $_smarty_tpl->tpl_vars['arrForm']->value['name'];?>


【メールアドレス】
<?php echo $_smarty_tpl->tpl_vars['arrForm']->value['mail'];?>


【電話番号】
<?php echo $_smarty_tpl->tpl_vars['arrForm']->value['tel'];?>


【年齢】
<?php echo \Service\Constans::$age[$_smarty_tpl->tpl_vars['arrForm']->value['age']];?>


【性別】
<?php echo \Service\Constans::$gender[$_smarty_tpl->tpl_vars['arrForm']->value['gender']];?>


【お問い合わせ内容】
<?php echo $_smarty_tpl->tpl_vars['arrForm']->value['content'];?>


──────────────────────────

このメールに心当たりの無い場合は、お手数ですが
下記連絡先までお問い合わせください。

━━━━━━━━━━━━━━━━━━━━━━━━━━
ピュアストレングス伊豆長岡
410-2315 静岡県伊豆の国市長岡126-5
E-mail：info@strength-f.com
━━━━━━━━━━━━━━━━━━━━━━━━━━<?php }
}
