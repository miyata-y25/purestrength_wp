<?php
/* Smarty version 3.1.33, created on 2020-02-28 20:55:44
  from 'C:\xampp_7.2\htdocs\purestrength\public\formbuilder\templates\inquiry\mail\inquiry_mail.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5e58ffc03a9924_11728156',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5a15697429f5e355d7c2cfe2ac944851401bd7a9' => 
    array (
      0 => 'C:\\xampp_7.2\\htdocs\\purestrength\\public\\formbuilder\\templates\\inquiry\\mail\\inquiry_mail.tpl',
      1 => 1582880916,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e58ffc03a9924_11728156 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp_7.2\\htdocs\\purestrength\\public\\formbuilder\\module\\smarty\\libs\\plugins\\modifier.date_format.php','function'=>'smarty_modifier_date_format',),));
?>
以下の内容でお問い合わせがありました。
受付日：<?php echo smarty_modifier_date_format(time(),"%Y年%m月%d日 %H時%M分%S秒");?>


-------------------------------------
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
<?php echo $_smarty_tpl->tpl_vars['arrForm']->value['content'];
}
}
