<?php
/* Smarty version 3.1.33, created on 2020-02-29 16:57:20
  from '/home/purestrength/purestrength.jp/public_html/formbuilder/templates/contact/contact_confirm.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5e5a19600c0516_14992920',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f7a3a6539154f6cca28634a39b413debcb122aa1' => 
    array (
      0 => '/home/purestrength/purestrength.jp/public_html/formbuilder/templates/contact/contact_confirm.tpl',
      1 => 1582962920,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e5a19600c0516_14992920 (Smarty_Internal_Template $_smarty_tpl) {
?><form name="form" action="./index.php?send" method="post" class="form">
<dl class="form-table">
<dt>回答希望の有無</dt>
<dd><?php echo \Service\Constans::$reply[$_smarty_tpl->tpl_vars['arrForm']->value['reply']];?>
</dd>
<dt><label for="name">お名前</label></dt>
<dd><?php echo $_smarty_tpl->tpl_vars['arrForm']->value['name'];?>
</dd>
<dt><label for="email">メールアドレス</label></dt>
<dd><?php echo $_smarty_tpl->tpl_vars['arrForm']->value['mail'];?>
</dd>
<dt><label for="tel">電話番号</label></dt>
<dd><?php echo $_smarty_tpl->tpl_vars['arrForm']->value['tel'];?>
</dd>
<dt><label for="age">年齢</label></dt>
<dd><?php echo \Service\Constans::$age[$_smarty_tpl->tpl_vars['arrForm']->value['age']];?>
</dd>
<dt><label for="gender">性別</label></dt>
<dd><?php echo \Service\Constans::$gender[$_smarty_tpl->tpl_vars['arrForm']->value['gender']];?>
</dd>
<dt><label for="contents">お問い合わせ内容</label></dt>
<dd><?php echo $_smarty_tpl->tpl_vars['arrForm']->value['content'];?>
</dd>
</dl>
<input type="hidden" name="mode" value="complate" />
<input type="hidden" id="key" name="key" value="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
" />
<p class="submit"><input type="submit" value="この内容で送信する"></p>
</form><?php }
}
