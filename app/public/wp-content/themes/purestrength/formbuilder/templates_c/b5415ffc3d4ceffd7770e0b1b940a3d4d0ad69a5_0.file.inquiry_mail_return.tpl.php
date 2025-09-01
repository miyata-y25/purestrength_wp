<?php
/* Smarty version 3.1.33, created on 2020-02-28 20:55:44
  from 'C:\xampp_7.2\htdocs\purestrength\public\formbuilder\templates\inquiry\mail\inquiry_mail_return.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5e58ffc09be156_87039727',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b5415ffc3d4ceffd7770e0b1b940a3d4d0ad69a5' => 
    array (
      0 => 'C:\\xampp_7.2\\htdocs\\purestrength\\public\\formbuilder\\templates\\inquiry\\mail\\inquiry_mail_return.tpl',
      1 => 1582889914,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e58ffc09be156_87039727 (Smarty_Internal_Template $_smarty_tpl) {
?>このたびは、ピュアストレングス伊豆長岡にお問い合わせをいただきありがとうございました。
このメールはお客様の入力完了後に送られる自動返信メールです。
担当者から折り返しご連絡いたします。

万が一このメールに覚えのない場合には、お手数ですが、
その旨、送信元メールアドレスまでご連絡ください。


入力された内容は以下のとおりです。

■お問い合わせ内容
-------------------------------------------------------

【回答希望の有無】
<?php echo \Service\Constans::$answer[$_smarty_tpl->tpl_vars['arrForm']->value['answer']];?>


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


-------------------------------------------------------
ピュアストレングス伊豆長岡
410-2315 静岡県伊豆の国市長岡126-5
E-mail：info@strength-f.com
-------------------------------------------------------<?php }
}
