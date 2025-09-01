<?php
/* Smarty version 3.1.33, created on 2020-02-29 16:57:23
  from '/home/purestrength/purestrength.jp/public_html/formbuilder/templates/contact/mail/contact_mail.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5e5a1963a55f71_22907362',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8e888dcb5165c1d7c8dd655dc14014b8948bce26' => 
    array (
      0 => '/home/purestrength/purestrength.jp/public_html/formbuilder/templates/contact/mail/contact_mail.tpl',
      1 => 1582962920,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e5a1963a55f71_22907362 (Smarty_Internal_Template $_smarty_tpl) {
?>ホームページからお問い合わせがありました。
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
<?php echo $_smarty_tpl->tpl_vars['arrForm']->value['content'];
}
}
