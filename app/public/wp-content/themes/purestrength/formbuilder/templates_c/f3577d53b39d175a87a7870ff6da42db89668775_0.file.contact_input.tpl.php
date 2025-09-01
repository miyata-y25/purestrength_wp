<?php
/* Smarty version 3.1.33, created on 2020-03-10 13:23:10
  from '/home/purestrength/purestrength.jp/public_html/formbuilder/templates/contact/contact_input.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5e67162e5e9513_81408365',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f3577d53b39d175a87a7870ff6da42db89668775' => 
    array (
      0 => '/home/purestrength/purestrength.jp/public_html/formbuilder/templates/contact/contact_input.tpl',
      1 => 1583814187,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e67162e5e9513_81408365 (Smarty_Internal_Template $_smarty_tpl) {
?><form action="./index.php?confirm" method="post">
<dl class="form-table">
    
<dt>回答希望の有無<span class="req">必須</span></dt>
<dd><label><input type="radio" name="reply" value="1" <?php if ($_smarty_tpl->tpl_vars['arrForm']->value['reply'] == '1' || $_smarty_tpl->tpl_vars['arrForm']->value['reply'] == '') {?>checked="checked"<?php }?>> 回答を希望する</label>
<label><input type="radio" name="reply" value="2" <?php if ($_smarty_tpl->tpl_vars['arrForm']->value['reply'] == '2') {?>checked="checked"<?php }?>> 回答を希望しない</label>
<?php if (isset($_smarty_tpl->tpl_vars['arrErr']->value['reply']['error_message'])) {
echo $_smarty_tpl->tpl_vars['arrErr']->value['reply']['error_message'];
}?></dd>
<dt><label for="name">お名前<span class="req">必須</span></label></dt>
<dd><input type="text" name="name" id="name" placeholder="名前" value="<?php echo $_smarty_tpl->tpl_vars['arrForm']->value['name'];?>
"><?php if (isset($_smarty_tpl->tpl_vars['arrErr']->value['name']['error_message'])) {
echo $_smarty_tpl->tpl_vars['arrErr']->value['name']['error_message'];
}?></dd>
<dt><label for="email">メールアドレス<span class="req">必須</span></label></dt>
<dd><input type="email" name="mail" id="email" placeholder="メールアドレスを入力してください" value="<?php echo $_smarty_tpl->tpl_vars['arrForm']->value['mail'];?>
">
<?php if (isset($_smarty_tpl->tpl_vars['arrErr']->value['mail']['error_message'])) {
echo $_smarty_tpl->tpl_vars['arrErr']->value['mail']['error_message'];
}?><br>
<input type="email" name="mail_conf" placeholder="メールアドレスを入力してください（確認）" value="<?php echo $_smarty_tpl->tpl_vars['arrForm']->value['mail_conf'];?>
">
<?php if (isset($_smarty_tpl->tpl_vars['arrErr']->value['mail_conf']['error_message'])) {
echo $_smarty_tpl->tpl_vars['arrErr']->value['mail_conf']['error_message'];
}?>
</dd>
<dt><label for="tel">電話番号</label></dt>
<dd><input type="tel" id="tel" name="tel" placeholder="電話番号" value="<?php echo $_smarty_tpl->tpl_vars['arrForm']->value['tel'];?>
"><?php if (isset($_smarty_tpl->tpl_vars['arrErr']->value['tel']['error_message'])) {?><p class="error"><?php echo $_smarty_tpl->tpl_vars['arrErr']->value['tel']['error_message'];?>
</p><?php }?></dd>
<dt>年齢</dt>
<dd><label><input type="radio" name="age" value="1" <?php if ($_smarty_tpl->tpl_vars['arrForm']->value['age'] == '1' || $_smarty_tpl->tpl_vars['arrForm']->value['age'] == '') {?>checked="checked"<?php }?>> 10代</label>　 
<label><input type="radio" name="age" value="2" <?php if ($_smarty_tpl->tpl_vars['arrForm']->value['age'] == '2') {?>checked="checked"<?php }?>> 20代</label>　 
<label><input type="radio" name="age" value="3" <?php if ($_smarty_tpl->tpl_vars['arrForm']->value['age'] == '3') {?>checked="checked"<?php }?>> 30代</label>　 
<label><input type="radio" name="age" value="4" <?php if ($_smarty_tpl->tpl_vars['arrForm']->value['age'] == '4') {?>checked="checked"<?php }?>> 40代</label>　 
<label><input type="radio" name="age" value="5" <?php if ($_smarty_tpl->tpl_vars['arrForm']->value['age'] == '5') {?>checked="checked"<?php }?>> 50代</label>　 
<label><input type="radio" name="age" value="6" <?php if ($_smarty_tpl->tpl_vars['arrForm']->value['age'] == '6') {?>checked="checked"<?php }?>> 60歳以上</label>
<?php if (isset($_smarty_tpl->tpl_vars['arrErr']->value['age']['error_message'])) {
echo $_smarty_tpl->tpl_vars['arrErr']->value['age']['error_message'];
}?></dd>
<dt>性別</dt>
<dd><label><input type="radio" id="gender1" name="gender" value="1" <?php if ($_smarty_tpl->tpl_vars['arrForm']->value['gender'] == '1' || $_smarty_tpl->tpl_vars['arrForm']->value['gender'] == '') {?>checked="checked"<?php }?>> 男性</label>　 
<label><input type="radio" id="gender2" name="gender" value="2" <?php if ($_smarty_tpl->tpl_vars['arrForm']->value['gender'] == '2') {?>checked="checked"<?php }?>> 女性</label>
<?php if (isset($_smarty_tpl->tpl_vars['arrErr']->value['gender']['error_message'])) {
echo $_smarty_tpl->tpl_vars['arrErr']->value['gender']['error_message'];
}?></dd>
<dt><label for="contents">お問合わせ内容<span class="req">必須</span></label></dt>
<dd><textarea id="contents" name="content"><?php echo $_smarty_tpl->tpl_vars['arrForm']->value['content'];?>
</textarea>
<?php if (isset($_smarty_tpl->tpl_vars['arrErr']->value['content']['error_message'])) {
echo $_smarty_tpl->tpl_vars['arrErr']->value['content']['error_message'];
}?></dd>
</dl>
<div class="consent">
<h2>お問い合わせいただく前のご注意</h2>
<ul class="kome">
<li>お客様よりお問い合わせいただいた内容に関しましては、迅速に対応させていただいておりますが、内容によっては対応にお時間を頂戴する場合がございます。また、お返事をさしあげる事が出来ない場合もございます。</li>
<li>お問い合わせいただいた内容によりましては、メール以外の方法にてお返事させていただく場合もございます。</li>
<li>ご入力いただいた内容につきましては、当社の「プライバシーポリシー」に従って取り扱いさせていただきます。</li>
<li>ご入力いただいた個人情報につきましては、お問い合わせ内容の対応のために使用させていただきます。</li>
<li>当社からの回答内容を一部または全部の転用、二次使用することは固くお断りいたします。</li>
<li>携帯のメールアドレスをご記入した場合、ドメイン指定受信を利用しておりますとメールが届かないことがございますのでご注意くださいませ。</li>
<li>PCメール（@strength-f.com）を受け取れるよう、設定くださいませ。</li>
</ul>
<div class="box">
<p>「お問い合わせいただく前のご注意」にご同意いただける場合は、<br>
下記の「同意します」に印を付けてから「確認」ボタンをクリックしてください。</p>
<div class="input"><label><input type="radio" name="consent" value="1" <?php if ($_smarty_tpl->tpl_vars['arrForm']->value['consent'] == '1' || $_smarty_tpl->tpl_vars['arrForm']->value['consent'] == '') {?>checked="checked"<?php }?>> 同意しません</label>
<label><input type="radio" name="consent" value="2" <?php if ($_smarty_tpl->tpl_vars['arrForm']->value['consent'] == '2') {?>checked="checked"<?php }?>> 同意します</label></div>
<?php if (isset($_smarty_tpl->tpl_vars['arrErr']->value['consent']['error_message'])) {?><p style="color: #D00E00;"><?php echo $_smarty_tpl->tpl_vars['arrErr']->value['consent']['error_message'];?>
</p><?php }?>
</div>
</div>
<div class="g-recaptcha" data-sitekey="<?php echo \Service\Constans::$recaptcha_sitekey;?>
"></div>
<?php if (isset($_smarty_tpl->tpl_vars['arrErr']->value['grecap']['error_message'])) {?><p style="color: #D00E00;"><?php echo $_smarty_tpl->tpl_vars['arrErr']->value['grecap']['error_message'];
}?>
<div class="submit"><input value="入力内容のご確認" type="submit"></div>
<input type="hidden" id="key" name="key" value="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
" />
<input type="hidden" name="mode" value="confirm" />
</form><?php }
}
