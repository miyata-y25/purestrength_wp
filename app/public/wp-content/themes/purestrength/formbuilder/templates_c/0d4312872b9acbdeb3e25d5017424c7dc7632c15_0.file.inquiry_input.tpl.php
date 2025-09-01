<?php
/* Smarty version 3.1.33, created on 2020-02-28 20:48:31
  from 'C:\xampp_7.2\htdocs\purestrength\public\formbuilder\templates\inquiry\inquiry_input.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5e58fe0f41bd61_94514651',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0d4312872b9acbdeb3e25d5017424c7dc7632c15' => 
    array (
      0 => 'C:\\xampp_7.2\\htdocs\\purestrength\\public\\formbuilder\\templates\\inquiry\\inquiry_input.tpl',
      1 => 1582889914,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e58fe0f41bd61_94514651 (Smarty_Internal_Template $_smarty_tpl) {
?>
<form action="./index.php?confirm#form-entry" method="post" class="form">
<dl>
<dt>回答希望の有無<span>必須</span></dt>
<div class="radio">
<input type="radio" name="answer" id="type-01" value="1" <?php if ($_smarty_tpl->tpl_vars['arrForm']->value['answer'] == '1' || $_smarty_tpl->tpl_vars['arrForm']->value['answer'] == '') {?>checked="checked"<?php }?>><label for="type-01">回答を希望する</label>
<input type="radio" name="answer" id="type-02" value="2" <?php if ($_smarty_tpl->tpl_vars['arrForm']->value['answer'] == '2') {?>checked="checked"<?php }?>><label for="type-02">回答を希望しない</label>
</div>
<dt><label for="name">お名前</label><span>必須</span></dt>
<dd><input type="text" id="name" name="name" placeholder="例：臼井　花子" class="width-s" value="<?php echo $_smarty_tpl->tpl_vars['arrForm']->value['name'];?>
">
<?php if (isset($_smarty_tpl->tpl_vars['arrErr']->value['name']['error_message'])) {
echo $_smarty_tpl->tpl_vars['arrErr']->value['name']['error_message'];
}?>
</dd>

<dt><label for="email">メールアドレス</label><span>必須</span></dt>
<dd><input type="email" id="email" name="mail" placeholder="例：example@beuto.jp" value="<?php echo $_smarty_tpl->tpl_vars['arrForm']->value['mail'];?>
">
<?php if (isset($_smarty_tpl->tpl_vars['arrErr']->value['mail']['error_message'])) {
echo $_smarty_tpl->tpl_vars['arrErr']->value['mail']['error_message'];
}?>
</dd>
<dt><label for="email">メールアドレス確認</label><span>必須</span></dt>
<dd><input type="email" id="email" name="mail_conf" placeholder="例：example@example.jp" value="<?php echo $_smarty_tpl->tpl_vars['arrForm']->value['mail_conf'];?>
">
<?php if (isset($_smarty_tpl->tpl_vars['arrErr']->value['mail_conf']['error_message'])) {
echo $_smarty_tpl->tpl_vars['arrErr']->value['mail_conf']['error_message'];
}?>
</dd>
<dt><label for="tel">電話番号</label><span>必須</span></dt>
<dd><input type="tel" id="tel" name="tel" placeholder="例：043-462-6470" value="<?php echo $_smarty_tpl->tpl_vars['arrForm']->value['tel'];?>
">
<?php if (isset($_smarty_tpl->tpl_vars['arrErr']->value['tel']['error_message'])) {
echo $_smarty_tpl->tpl_vars['arrErr']->value['tel']['error_message'];
}?>
</dd>
<dt>年齢</dt>
<dd>
<input type="radio" id="age" name="age" value="1" <?php if ($_smarty_tpl->tpl_vars['arrForm']->value['age'] == '1' || $_smarty_tpl->tpl_vars['arrForm']->value['age'] == '') {?>checked="checked"<?php }?>><label for="age1">10代</label>
<input type="radio" id="age" name="age" value="2" <?php if ($_smarty_tpl->tpl_vars['arrForm']->value['age'] == '2') {?>checked="checked"<?php }?>><label for="age2">20代</label>
<input type="radio" id="age" name="age" value="3" <?php if ($_smarty_tpl->tpl_vars['arrForm']->value['age'] == '3') {?>checked="checked"<?php }?>><label for="age3">30代</label>
<input type="radio" id="age" name="age" value="4" <?php if ($_smarty_tpl->tpl_vars['arrForm']->value['age'] == '4') {?>checked="checked"<?php }?>><label for="age4">40代</label>
<input type="radio" id="age" name="age" value="5" <?php if ($_smarty_tpl->tpl_vars['arrForm']->value['age'] == '5') {?>checked="checked"<?php }?>><label for="age5">50代</label>
<input type="radio" id="age" name="age" value="6" <?php if ($_smarty_tpl->tpl_vars['arrForm']->value['age'] == '6') {?>checked="checked"<?php }?>><label for="age5">60代以上</label>
<?php if (isset($_smarty_tpl->tpl_vars['arrErr']->value['age']['error_message'])) {?><p class="error"><?php echo $_smarty_tpl->tpl_vars['arrErr']->value['age']['error_message'];?>
</p><?php }?>
</dd>
<dt>性別<span class="req">必須</span></dt>
<dd>
<input type="radio" id="gender1" name="gender" value="1" <?php if ($_smarty_tpl->tpl_vars['arrForm']->value['gender'] == '1' || $_smarty_tpl->tpl_vars['arrForm']->value['gender'] == '') {?>checked="checked"<?php }?>><label for="gender1">男</label>
<input type="radio" id="gender2" name="gender" value="2" <?php if ($_smarty_tpl->tpl_vars['arrForm']->value['gender'] == '2') {?>checked="checked"<?php }?>><label for="gender2">女</label>
<?php if (isset($_smarty_tpl->tpl_vars['arrErr']->value['gender']['error_message'])) {?><p class="error"><?php echo $_smarty_tpl->tpl_vars['arrErr']->value['gender']['error_message'];?>
</p><?php }?>
</dd>
<dt><label for="content">お問い合わせ内容</label><span>必須</span></dt>
<dd><textarea id="content" name="content"><?php echo $_smarty_tpl->tpl_vars['arrForm']->value['content'];?>
</textarea></dd>
<?php if (isset($_smarty_tpl->tpl_vars['arrErr']->value['content']['error_message'])) {?><p class="error"><?php echo $_smarty_tpl->tpl_vars['arrErr']->value['content']['error_message'];?>
</p><?php }?>
</dl>
	<h3>個人情報取扱規約</h3>
            <div>
				<p>ピュアストレングス伊豆長岡では、皆様のプライバシーを尊重し、個人情報を保護する為に細心の注意を払っています。本クラブに関する取扱いの目的以外には流用致しません。</p>	
                <label onClick=""><p><label><input type="checkbox" name="kiyaku" id="agreement" value="1" <?php if (isset($_smarty_tpl->tpl_vars['arrForm']->value['kiyaku']) && $_smarty_tpl->tpl_vars['arrForm']->value['kiyaku'] == '1') {?> checked="checked"<?php }?>>すべての項目に該当しています</label><?php if (isset($_smarty_tpl->tpl_vars['arrErr']->value['kiyaku']['error_message'])) {
}?>
</p>

            </div>
<div class="submit"><input value="送信確認へ" type="submit"></div>
<input type="hidden" id="key" name="key" value="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
" />
<input type="hidden" name="mode" value="confirm" />
</form>
<?php }
}
