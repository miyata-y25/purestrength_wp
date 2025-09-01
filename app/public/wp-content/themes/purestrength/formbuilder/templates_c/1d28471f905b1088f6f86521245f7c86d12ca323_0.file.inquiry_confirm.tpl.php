<?php
/* Smarty version 3.1.33, created on 2020-02-28 20:55:36
  from 'C:\xampp_7.2\htdocs\purestrength\public\formbuilder\templates\inquiry\inquiry_confirm.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5e58ffb8143570_15412215',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1d28471f905b1088f6f86521245f7c86d12ca323' => 
    array (
      0 => 'C:\\xampp_7.2\\htdocs\\purestrength\\public\\formbuilder\\templates\\inquiry\\inquiry_confirm.tpl',
      1 => 1582880916,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e58ffb8143570_15412215 (Smarty_Internal_Template $_smarty_tpl) {
?><form name="form" action="./?send#form-entry" method="post" class="form">
<dl>
<dt>回答希望の有無<span>必須</span></dt>
<dd><?php echo \Service\Constans::$answer[$_smarty_tpl->tpl_vars['arrForm']->value['answer']];?>
</dd>
<dt><label for="name">お名前</label><span>必須</span></dt>
<dd><?php echo $_smarty_tpl->tpl_vars['arrForm']->value['name'];?>
</dd>
<dt><label for="email">メールアドレス</label><span>必須</span></dt>
<dd><?php echo $_smarty_tpl->tpl_vars['arrForm']->value['mail'];?>
</dd>
<dt><label for="tel">電話番号</label><span>必須</span></dt>
<dd><?php echo $_smarty_tpl->tpl_vars['arrForm']->value['tel'];?>
</dd>
<dt><label for="age">年齢</label></dt>
<dd><?php echo \Service\Constans::$age[$_smarty_tpl->tpl_vars['arrForm']->value['age']];?>
</dd>
<dt><label for="gender">性別</label></dt>
<dd><?php echo \Service\Constans::$gender[$_smarty_tpl->tpl_vars['arrForm']->value['gender']];?>
</dd>
<dt><label for="content">お問い合わせ内容</label><span>必須</span></dt>
<dd><?php echo $_smarty_tpl->tpl_vars['arrForm']->value['content'];?>
</dd>
</dl>
<input type="hidden" name="mode" value="complate" />
<input type="hidden" id="key" name="key" value="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
" />
<p class="submit"><input type="submit" value="この内容で送信する"></p>
</form>

<form name="formback" action="./" method="post" class="form">
<input type="hidden" name="mode" value="back" />
<input type="hidden" id="key" name="key" value="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
" />
<p class="submit"><input type="submit" onclick="javaScript:js_back_submit();" value="修正する"></p>
</form>

<?php echo '<script'; ?>
>
function js_back_submit(){
    document.formback.action = '<?php echo \Config::$base_url;?>
/inquiry/';
    document.formback.submit();
}
<?php echo '</script'; ?>
><?php }
}
