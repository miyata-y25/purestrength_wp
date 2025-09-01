<form name="form" action="./index.php?send" method="post" class="form">
{*
{foreach from=$arrForm item=form key=key}
{if is_array($form)}
{foreach from=$form key=key2 item=form2}
            <input type="hidden" name="{$key}[{$key2}]" value="{$form2|escape:'html'}" />
{/foreach}
{else}
            <input type="hidden" name="{$key}" value="{$form|escape:'html'}" />
{/if}
{/foreach}
*}
<dl class="form-table">
<dt>回答希望の有無</dt>
<dd>{\Service\Constans::$reply[$arrForm['reply']]}</dd>
<dt><label for="name">お名前</label></dt>
<dd>{$arrForm['name']}</dd>
<dt><label for="email">メールアドレス</label></dt>
<dd>{$arrForm['mail']}</dd>
<dt><label for="tel">電話番号</label></dt>
<dd>{$arrForm['tel']}</dd>
<dt><label for="age">年齢</label></dt>
<dd>{\Service\Constans::$age[$arrForm['age']]}</dd>
<dt><label for="gender">性別</label></dt>
<dd>{\Service\Constans::$gender[$arrForm['gender']]}</dd>
<dt><label for="contents">お問い合わせ内容</label></dt>
<dd>{$arrForm['content']}</dd>
</dl>
<input type="hidden" name="mode" value="complate" />
<input type="hidden" id="key" name="key" value="{$key}" />
<p class="submit"><input type="submit" value="この内容で送信する"></p>
</form>