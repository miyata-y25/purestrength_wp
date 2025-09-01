<form action="./index.php?confirm" method="post">
<dl class="form-table">
    
<dt>回答希望の有無<span class="req">必須</span></dt>
<dd><label><input type="radio" name="reply" value="1" {if $arrForm['reply'] eq '1' || $arrForm['reply'] eq ''}checked="checked"{/if}> 回答を希望する</label>
<label><input type="radio" name="reply" value="2" {if $arrForm['reply'] eq '2'}checked="checked"{/if}> 回答を希望しない</label>
{if isset($arrErr['reply']['error_message']) }{$arrErr['reply']['error_message']}{/if}</dd>
<dt><label for="name">お名前<span class="req">必須</span></label></dt>
<dd><input type="text" name="name" id="name" placeholder="名前" value="{$arrForm['name']}">{if isset($arrErr['name']['error_message']) }{$arrErr['name']['error_message']}{/if}</dd>
<dt><label for="email">メールアドレス<span class="req">必須</span></label></dt>
<dd><input type="email" name="mail" id="email" placeholder="メールアドレスを入力してください" value="{$arrForm['mail']}">
{if isset($arrErr['mail']['error_message']) }{$arrErr['mail']['error_message']}{/if}<br>
<input type="email" name="mail_conf" placeholder="メールアドレスを入力してください（確認）" value="{$arrForm['mail_conf']}">
{if isset($arrErr['mail_conf']['error_message']) }{$arrErr['mail_conf']['error_message']}{/if}
</dd>
<dt><label for="tel">電話番号</label></dt>
<dd><input type="tel" id="tel" name="tel" placeholder="電話番号" value="{$arrForm['tel']}">{if isset($arrErr['tel']['error_message']) }<p class="error">{$arrErr['tel']['error_message']}</p>{/if}</dd>
<dt>年齢</dt>
<dd><label><input type="radio" name="age" value="1" {if $arrForm['age'] eq '1' || $arrForm['age'] eq ''}checked="checked"{/if}> 10代</label>　 
<label><input type="radio" name="age" value="2" {if $arrForm['age'] eq '2'}checked="checked"{/if}> 20代</label>　 
<label><input type="radio" name="age" value="3" {if $arrForm['age'] eq '3'}checked="checked"{/if}> 30代</label>　 
<label><input type="radio" name="age" value="4" {if $arrForm['age'] eq '4'}checked="checked"{/if}> 40代</label>　 
<label><input type="radio" name="age" value="5" {if $arrForm['age'] eq '5'}checked="checked"{/if}> 50代</label>　 
<label><input type="radio" name="age" value="6" {if $arrForm['age'] eq '6'}checked="checked"{/if}> 60歳以上</label>
{if isset($arrErr['age']['error_message']) }{$arrErr['age']['error_message']}{/if}</dd>
<dt>性別</dt>
<dd><label><input type="radio" id="gender1" name="gender" value="1" {if $arrForm['gender'] eq '1' || $arrForm['gender'] eq ''}checked="checked"{/if}> 男性</label>　 
<label><input type="radio" id="gender2" name="gender" value="2" {if $arrForm['gender'] eq '2'}checked="checked"{/if}> 女性</label>
{if isset($arrErr['gender']['error_message']) }{$arrErr['gender']['error_message']}{/if}</dd>
<dt><label for="contents">お問合わせ内容<span class="req">必須</span></label></dt>
<dd><textarea id="contents" name="content">{$arrForm['content']}</textarea>
{if isset($arrErr['content']['error_message']) }{$arrErr['content']['error_message']}{/if}</dd>
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
<div class="input"><label><input type="radio" name="consent" value="1" {if $arrForm['consent'] eq '1'|| $arrForm['consent'] eq ''}checked="checked"{/if}> 同意しません</label>
<label><input type="radio" name="consent" value="2" {if $arrForm['consent'] eq '2'}checked="checked"{/if}> 同意します</label></div>
{if isset($arrErr['consent']['error_message']) }<p style="color: #D00E00;">{$arrErr['consent']['error_message']}</p>{/if}
</div>
</div>
<div class="g-recaptcha" data-sitekey="{\Service\Constans::$recaptcha_sitekey}"></div>
{if isset($arrErr['grecap']['error_message']) }<p style="color: #D00E00;">{$arrErr['grecap']['error_message']}{/if}
<div class="submit"><input value="入力内容のご確認" type="submit"></div>
<input type="hidden" id="key" name="key" value="{$key}" />
<input type="hidden" name="mode" value="confirm" />
</form>