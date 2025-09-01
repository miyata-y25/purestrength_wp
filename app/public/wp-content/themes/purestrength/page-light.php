<?php 
/**
 * @package Purestrength
 */
get_header('light'); 
?>
    <main id="l-main">
      <div id="intro">
        <p class="max-width-none full-width taC is-animation-fadeInUp"><img class="full-width il-hide-md" src="<?php echo esc_url(home_url()); ?>/shared/light/img/txt-intro-01.webp" alt="「伊豆の国市」初！AIによる画期的な時短トレーニングジム！　PURE STRENGTH LIGHT　時間なんてかけたくない！"><img class="il-show-md" src="<?php echo esc_url(home_url()); ?>/shared/light/img/txt-intro-01-pc.webp" alt="「伊豆の国市」初！AIによる画期的な時短トレーニングジム！　PURE STRENGTH LIGHT　時間なんてかけたくない！" width="1100">
        </p>
      </div>
      <div id="catch1">
        <div class="inner max-width-none full-width">
          <!--h2 class="taC"><img class="full-width il-hide-md" src="<?php echo esc_url(home_url()); ?>/shared/light/img/h-catch-01.webp" alt="2023 2月上旬 GRAND-OPEN!"><img class="il-show-md" src="<?php echo esc_url(home_url()); ?>/shared/light/img/h-catch-01-pc.webp" alt="2023 2月上旬 GRAND-OPEN!" width="1066">
          </h2-->
          <p class="taC"><img class="full-width_ il-hide-md" src="<?php echo esc_url(home_url()); ?>/shared/light/img/txt-catch-01_.webp" alt="1日20分だけでOK!画期的なサーキットトレーニング！　■AI（人工知能）があなたに最適なトレーニングプログラムを作成！　■記憶したウエルネスバンドでログインするだけでトレーニングスタート！！ ■マシン調節も自動にセッティング！ガイド通りにトレーニングするだけ！　これなら続く！無理せず理想ボディへ近づく！"><img class="il-show-md_" src="<?php echo esc_url(home_url()); ?>/shared/light/img/txt-catch-01-pc_.webp" alt="1日20分だけでOK!画期的なサーキットトレーニング！　■AI（人工知能）があなたに最適なトレーニングプログラムを作成！　■記憶したウエルネスバンドでログインするだけでトレーニングスタート！！ ■マシン調節も自動にセッティング！ガイド通りにトレーニングするだけ！　これなら続く！無理せず理想ボディへ近づく！" width="1440">
          </p>
        </div>
      </div>
      <div id="catch2">
        <h3 class="taC">運動はした方がいいと思っている<br class="il-hide-md">このような方にオススメ！</h3>
        <ul class="taC clWhite fwBold full-width">
          <li>運動は苦手だ…</li>
          <li>毎日忙しい…</li>
          <li>太ってきた…</li>
        </ul>
        <p>運動初心者の方も、本格ジムには抵抗のある方も、ココなら大丈夫。<br class="il-show-md">ライト感覚で気軽に始められる24時間年中無休のお手軽フィットネスジムです。</p>
      </div>
      <section class="CTA taC">
        <div class="inner max-width-none full-width">
          <h2><img class="il-hide-md" src="<?php echo esc_url(home_url()); ?>/shared/light/img/h-cta-01.webp" alt="Open Campaign! オープン前先行入会キャンペーン" loading="lazy"><img class="il-show-md" src="<?php echo esc_url(home_url()); ?>/shared/light/img/h-cta-01-pc.webp" alt="Open Campaign! オープン前先行入会キャンペーン" loading="lazy" width="1080">
          </h2>
          <p class="benefit-01"><img class="il-hide-md" src="<?php echo esc_url(home_url()); ?>/shared/light/img/txt-cta-01.webp" alt="オープン前特典 01　オープン後もずっとおトク！ 月会費永久550円引き！ 男性会員なら通常7,128円（税込）が¥6,578税込　女性会員なら通常6,380円（税込）が¥5,830税込　高校生なら通常5,500円（税込）が¥4,950税込" loading="lazy"><img class="il-show-md" src="<?php echo esc_url(home_url()); ?>/shared/light/img/txt-cta-01-pc.webp" alt="オープン前特典 01　オープン後もずっとおトク！ 月会費永久550円引き！ 男性会員なら通常7,128円（税込）が¥6,578税込　女性会員なら通常6,380円（税込）が¥5,830税込　高校生なら通常5,500円（税込）が¥4,950税込" loading="lazy" width="755">
          </p>
          <p class="btn-area"><a href="https://www.slim-sng.jp/slim/web/d/sng/web_admission_procedure/?c=Su5Rf9wA3m&f=00002" target="_blank" rel="noopener"><img class="il-hide-md" src="<?php echo esc_url(home_url()); ?>/shared/light/img/btn-cta-01.webp" alt="先行WEB入会はコチラ！" loading="lazy"><img class="il-show-md" src="<?php echo esc_url(home_url()); ?>/shared/light/img/btn-cta-01-pc.webp" alt="先行WEB入会はコチラ！" loading="lazy" width="411"></a></p>
        </div>
      </section>
      <section id="information">
      <?php
          $args = array(
            'paged' => $paged,			//ページネーション用
            'post_type' => 'light-info', // 投稿タイプのスラッグを指定
            'posts_per_page' => 5 // 投稿件数の指定
          );
          $info_query = new WP_Query($args); 
          if($info_query->have_posts()):
        ?>
        <h2 class="taC"><img class="il-hide-md" src="<?php echo esc_url(home_url()); ?>/shared/light/img/h-information-01.webp" alt="INFORMATION"><img class="il-show-md" src="<?php echo esc_url(home_url()); ?>/shared/light/img/h-information-01-pc.webp" alt="INFORMATION" width="467"></h2>
        <ul class="information-list">
          <?php while ($info_query->have_posts()): $info_query->the_post(); ?>
          <li class="information-list-item">
              <a class="db" href="<?php the_permalink(); ?>" title="<?php echo get_the_title(); ?>" rel="bookmark">
                <article>
                  <header class="information">
                    <p class="pubtime">
                      <time datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('Y.m.d'); ?></time>
                    </p>
                    <h1 class="title fwMed txt-ellipsis" title="<?php echo get_the_title(); ?>"><?php echo get_the_title(); ?></h1>
                  </header>
                </article>
              </a>
          </li>
          <?php endwhile; ?>
          <?php wp_reset_postdata(); ?>
        </ul>
        <?php endif; ?>
        <a class="toArchive taC fwBold db" href="<?php echo esc_url(home_url()); ?>/light/light-info/">お知らせ一覧</a>
      </section>
      <section id="bio">
        <div class="intro max-width-none full-width clWhite">
          <div class="contentsWidth">
            <h2 class="taC DIN">Bio Circuit<sup>TM</sup><br><img src="<?php echo esc_url(home_url()); ?>/shared/light/img/logo-technogym.webp" alt="technogym" loading="lazy">
            </h2>
            <p class="lead">Biocircuit™ は、イタリアテクノジム社のトレーニングシステム。<br class="il-show-md">人工知能を利用したTechnogym Coachにより、お客さまのワークアウト設定を初回にセッティングし、<br class="il-show-md">ログインするだけで設定に基づいたプログラムをガイドに沿って20分間行うだけ。<br class="il-show-md">マシンの調節も不要で、時間をかけずに効率的なトレーニングが実現します！</p>
            <ul class="bio-list list1">
              <li>
                <h3 class="DIN">MY WELLNESS SYSTEM</h3>
                <p class="fwBold">あなたの情報を<br>ウェルネスバンドに登録。</p>
              </li>
              <li>
                <h3 class="DIN">LOG IN</h3>
                <p class="fwBold">マシンにバンドを<br>かざしてトレーニング開始。</p>
              </li>
              <li>
                <h3 class="DIN">MODE SELECTION</h3>
                <p class="fwBold">5つのモードから自分にあった<br>トレーニングプログラムを選択。</p>
              </li>
            </ul>
            <ul class="list2 taC">
              <li>
                <h3 class="DIN clGreenLight taC">START<br>MOVING</h3>
                <p class="bgGreenLight fwBold vhc">初心者の方に<br>おすすめ！</p>
              </li>
              <li>
                <h3 class="DIN clGreenLight taC">LOSE<br>WEIGHT</h3>
                <p class="bgGreenLight fwBold vhc">ダイエットを<br>成功したい方に！</p>
              </li>
              <li>
                <h3 class="DIN clGreenLight taC">TONE YOUR<br>BODY</h3>
                <p class="bgGreenLight fwBold vhc">メリハリボディを<br>目指したい方に！</p>
              </li>
              <li>
                <h3 class="DIN clGreenLight taC">STAY<br>YOUNG</h3>
                <p class="bgGreenLight fwBold vhc">いつまでも若さを<br>保ちたい方に</p>
              </li>
              <li>
                <h3 class="DIN clGreenLight taC">BOOST<br>PERFORMANCE</h3>
                <p class="bgGreenLight fwBold vhc">筋肉をしっかり<br>つけたい方に！</p>
              </li>
            </ul>
            <ul class="bio-list list3">
              <li>
                <h3 class="DIN">AUTO SETTING</h3>
                <p class="fwBold">シートの高さもトレーニングの<br>可動域も全て自動調整！</p>
              </li>
              <li>
                <h3 class="DIN">TRAINING</h3>
                <p class="fwBold">モニターに表示される波形に<br>合わせてトレーニングします！</p>
              </li>
              <li>
                <h3 class="DIN">EVALUATION</h3>
                <p class="fwBold">正しいトレーニングができて<br>いるかAIが評価します！</p>
              </li>
            </ul>
            <p class="conclusion taC"><img class="il-hide-md" src="<?php echo esc_url(home_url()); ?>/shared/light/img/txt-bio-01.webp" alt="とにかくカンタン！ 時短トレーニング！AIマシンが最適なトレーニングをサポート！"><img class="il-show-md" src="<?php echo esc_url(home_url()); ?>/shared/light/img/txt-bio-01-pc.webp" alt="とにかくカンタン！ 時短トレーニング！AIマシンが最適なトレーニングをサポート！" width="965">
            </p>
          </div>
        </div>
        <div class="point full-width">
          <ul class="point-list">
            <li class="fwHeavy taC">専用アプリで<br>運動量を管理できる！<br>1日の運動量も<br>確認できる！</li>
            <li class="fwHeavy taC">初心者も安心して<br>始められる<br>安全でカンタンな<br>トレーニング！</li>
            <li class="fwHeavy taC">AIマシン<br>バイオサーキットの他に<br>最新のランニングマシン・<br>バイクなども完備！</li>
          </ul>
          <p class="conclusion taC"><img class="il-hide-md" src="<?php echo esc_url(home_url()); ?>/shared/light/img/txt-bio-02.webp" alt="自分では運動が続かないという方、AI（人工知能）に任せてみよう！"><img class="il-show-md" src="<?php echo esc_url(home_url()); ?>/shared/light/img/txt-bio-02-pc.webp" alt="自分では運動が続かないという方、AI（人工知能）に任せてみよう！" width="754">
          </p>
        </div>
      </section>
      <section id="facility">
        <div class="layout-1 taC">
          <h2><img class="il-hide-md" src="<?php echo esc_url(home_url()); ?>/shared/light/img/h-facility-01.webp" alt="FACILITY"><img class="il-show-md" src="<?php echo esc_url(home_url()); ?>/shared/light/img/h-facility-01-pc.webp" alt="FACILITY" width="337">
          </h2>
          <p class="lead fwBold">運動初心者でも楽しみながら成果にこだわれる<br class="il-hide-md">“新感覚ジム”。</p>
        </div>
        <figure class="max-width-none full-width taC"><img class="il-hide-md" src="<?php echo esc_url(home_url()); ?>/shared/light/img/pic-facility-01.webp" alt="施設概要図"><img class="il-show-md" src="<?php echo esc_url(home_url()); ?>/shared/light/img/pic-facility-01-pc.webp" alt="施設概要図" width="1257">
        </figure>
        <div class="layout-2">
          <p class="point clGreen fwHeavy"><em>テクノジム社の<br class="il-hide-md">最新有酸素マシン計8台も完備！</em></p>
          <p class="body">20分のバイオサーキットトレーニングだけじゃない。<br>MY WELLNESSアプリを使用してログインすれば運動履歴も残せます。<br class="il-show-md">ガイドにあわせて簡単にトレーニングができます。</p>
        </div>
        <h3 class="taC">こだわりの設備ラインナップ</h3>
        <ul class="facility-list max-width-none full-width taC fwBold">
          <li>24時間営業<br>年中無休</li>
          <li>無料駐車場<br>17台完備</li>
          <li>防犯カメラ<br>設置</li>
          <li>ウェルネスバンド<br>で入退店</li>
          <li>更衣室<br>完備</li>
          <li>水素水無料<br>飲み放題</li>
          <li>体組成計<br>無料完備</li>
          <li>伊豆長岡店と<br>相互利用ＯＫ</li>
        </ul>
        <div class="max-width-none full-width" id="point01">
          <div class="contentsWidth">
            <div class="heading taC">
              <h3><img class="logo" src="<?php echo esc_url(home_url()); ?>/shared/light/img/logo-technogym.webp" alt="technogym" loading="lazy"><span class="db fwBold">テクノジム 最新デジタル有酸素マシン</span><img class="txt" src="<?php echo esc_url(home_url()); ?>/shared/light/img/h-facility-02.webp" alt=" “LIVEシリーズ”導入！" loading="lazy">
              </h3>
              <p class="fwHeavy clWhite bgGreen">Excite Live ラン</p>
              <p class="fwBold">魅力的なワークアウトが実現！</p>
            </div>
            <div class="contents">
              <h4><img class="il-hide-md" src="<?php echo esc_url(home_url()); ?>/shared/light/img/h-facility-03.webp" alt="大型モニター搭載だから様々な機能が楽しめる！" loading="lazy"><img class="il-show-md" src="<?php echo esc_url(home_url()); ?>/shared/light/img/h-facility-03-pc.webp" alt="大型モニター搭載だから様々な機能が楽しめる！" loading="lazy" width="1059">
              </h4>
              <section class="sec1">
                <h5 class="taC">エンタテイメント機能</h5>
                <h6 class="taC"><img src="<?php echo esc_url(home_url()); ?>/shared/light/img/h-facility-04.webp" alt="好きなTV番組が視聴できる！" loading="lazy">
                </h6>
                <p>TV番組やYouTubeの視聴、WEBサイトの閲覧もＯＫ！</p>
              </section>
              <section class="sec2">
                <h5 class="taC">ルーティン機能</h5>
                <h6 class="taC"><img class="il-hide-md" src="<?php echo esc_url(home_url()); ?>/shared/light/img/h-facility-05.webp" alt="エクササイズや強度が自動で設定できる！" loading="lazy"><img class="il-show-md" src="<?php echo esc_url(home_url()); ?>/shared/light/img/h-facility-05-pc.webp" alt="エクササイズや強度が自動で設定できる！" loading="lazy" width="393">
                </h6>
                <p>大画面で動画を見ながらエクササイズが可能！<br class="il-hide-md">エンタテイメントコンテンツを楽しんでいる場合はポップアップメッセージでガイダンスします！</p>
              </section>
              <section class="sec3">
                <h5 class="taC">アウトドア機能</h5>
                <h6 class="taC"><img src="<?php echo esc_url(home_url()); ?>/shared/light/img/h-facility-06.webp" alt="世界中をめぐる驚きの旅を！" loading="lazy">
                </h6>
                <p>魅力的な世界の自然や都会の風景が映し出される大画面映像に引きずり込まれ、夢中でエクササイズが楽しめます！</p>
              </section>
            </div>
          </div>
        </div>
        <div class="max-width-none full-width" id="point02">
          <div class="contentsWidth posr">
            <h3 class="taC"><img class="logo" src="<?php echo esc_url(home_url()); ?>/shared/light/img/logo-tanita.webp" alt="TANITA" loading="lazy"><span class="db fwBold">タニタで「カラダの見える化」を実現</span><img class="txt il-hide-md" src="<?php echo esc_url(home_url()); ?>/shared/light/img/h-facility-07.webp" alt="高性能体組成計完備！（TANITA780）" loading="lazy"><img class="txt il-show-md" src="<?php echo esc_url(home_url()); ?>/shared/light/img/h-facility-07-pc.webp" alt="高性能体組成計完備！（TANITA780）" loading="lazy" width="850">
            </h3>
            <div class="sec1 taC">
              <p><img src="<?php echo esc_url(home_url()); ?>/shared/light/img/txt-facility-01.webp" alt="会員様はいつでも無料で利用いただけます！" loading="lazy">
              </p>
              <p class="fwBold">着衣のままで気軽に<br>高精度な計測が簡単にOK！<br>たったの30～40秒！</p>
            </div>
            <div class="sec2">
              <p class="fwHeavy taC">効果的な<br class="il-hide-md">トレーニングを<br class="il-hide-md">サポート！</p>
              <p><span class="il-hide-md">見た目ではわからない筋肉量・脂肪量・筋肉バランスなどを詳細に測定できる高性能測定分析機「タニタ」を完備。測定結果をトレーニングにフィードバックして、自分に合ったトレーニングが効果的にできます！</span><span class="il-show-md">見た目ではわからない筋肉量・脂肪量・筋肉バランスなどを詳細に測定できる高性能体組成計「TANITA780」を完備。測定結果をトレーニングにフィードバックして、自分に合ったトレーニングが効果的にできます！</span></p>
            </div>
            <div class="sec3">
              <h4 class="taC"><img class="il-hide-md" src="<?php echo esc_url(home_url()); ?>/shared/light/img/h-facility-08.webp" alt="体組成結果がこれまでよりも見やすく、わかりやすく進化。" loading="lazy"><img class="il-show-md" src="<?php echo esc_url(home_url()); ?>/shared/light/img/h-facility-08-pc.webp" alt="体組成結果がこれまでよりも見やすく、わかりやすく進化。" loading="lazy" width="962">
              </h4>
              <div class="txt">
                <p class="fwBold taC">しかも、データは<br>クラウド管理！</p>
                <p class="taC">好きな端末で見られる！</p>
              </div>
              <p class="img"><img class="il-hide-md" src="<?php echo esc_url(home_url()); ?>/shared/light/img/txt-facility-02.webp" alt="スマホならどこでもカンタンに結果をチェック！" loading="lazy"><img class="il-show-md" src="<?php echo esc_url(home_url()); ?>/shared/light/img/txt-facility-02-pc.webp" alt="スマホならどこでもカンタンに結果をチェック！" loading="lazy" width="287">
              </p>
            </div>
          </div>
        </div>
        <div class="max-width-none full-width" id="point03">
          <div class="contentsWidth posr">
            <h3 class="taC"><span class="db fwBold">カラダにイイ水がなんと、無料！</span><img class="txt il-hide-md" src="<?php echo esc_url(home_url()); ?>/shared/light/img/h-facility-09.webp" alt="水素水飲み放題！（ドクターズ・マン社製）" loading="lazy"><img class="txt il-show-md" src="<?php echo esc_url(home_url()); ?>/shared/light/img/h-facility-09-pc.webp" alt="水素水飲み放題！（ドクターズ・マン社製）" loading="lazy" width="882">
            </h3>
            <div class="sec1 taC">
              <p>水素水はおいしいミネラルウォーター。<br>ナノレベルで豊富な水素を含み、<br>良質な水分補給に最適な飲料です。</p>
              <p class="fwNormal"><small>※給水の際は専用ボトルをご利用ください。</small></p>
              <p class="img"><img class="il-hide-md" src="<?php echo esc_url(home_url()); ?>/shared/light/img/txt-facility-03.webp" alt="専用ボトル購入の方に プラスチック500円(税込） アルミボトル700円(税込） （全6色）" loading="lazy"><img class="il-show-md" src="<?php echo esc_url(home_url()); ?>/shared/light/img/txt-facility-03-pc.webp" alt="専用ボトル購入の方に プラスチック500円(税込） アルミボトル700円(税込） （全6色）" loading="lazy" width="420">
              </p>
            </div>
          </div>
        </div>
      </section>
      <section class="CTA taC">
        <div class="inner max-width-none full-width">
          <h2><img class="il-hide-md" src="<?php echo esc_url(home_url()); ?>/shared/light/img/h-cta-01.webp" alt="Open Campaign! オープン前先行入会キャンペーン" loading="lazy"><img class="il-show-md" src="<?php echo esc_url(home_url()); ?>/shared/light/img/h-cta-01-pc.webp" alt="Open Campaign! オープン前先行入会キャンペーン" loading="lazy" width="1080">
          </h2>
          <p class="benefit-01"><img class="il-hide-md" src="<?php echo esc_url(home_url()); ?>/shared/light/img/txt-cta-01.webp" alt="オープン前特典 01　オープン後もずっとおトク！ 月会費永久550円引き！ 男性会員なら通常7,128円（税込）が¥6,578税込　女性会員なら通常6,380円（税込）が¥5,830税込　高校生なら通常5,500円（税込）が¥4,950税込" loading="lazy"><img class="il-show-md" src="<?php echo esc_url(home_url()); ?>/shared/light/img/txt-cta-01-pc.webp" alt="オープン前特典 01　オープン後もずっとおトク！ 月会費永久550円引き！ 男性会員なら通常7,128円（税込）が¥6,578税込　女性会員なら通常6,380円（税込）が¥5,830税込　高校生なら通常5,500円（税込）が¥4,950税込" loading="lazy" width="755">
          </p>
          <p class="btn-area"><a href="https://www.slim-sng.jp/slim/web/d/sng/web_admission_procedure/?c=Su5Rf9wA3m&f=00002" target="_blank" rel="noopener"><img class="il-hide-md" src="<?php echo esc_url(home_url()); ?>/shared/light/img/btn-cta-01.webp" alt="先行WEB入会はコチラ！" loading="lazy"><img class="il-show-md" src="<?php echo esc_url(home_url()); ?>/shared/light/img/btn-cta-01-pc.webp" alt="先行WEB入会はコチラ！" loading="lazy" width="411"></a></p>
        </div>
      </section>
      <section class="taC" id="joining">
        <h2>入会もカンタン！</h2>
        <p class="caution fwBold">WEB入会登録完了後、<br class="il-hide-md">店頭へお越しいただき入会手続きを完了してください。</p>
        <p class="strong fwBold">入会時諸費用をお支払い後、<br>ウェルネスバンド（出入口キー）のお渡し、<br class="il-hide-md">初期設定のご予約をお取りいたします。</p>
        <h3 class="fwMed">《お持ちいただく物》</h3>
        <div class="joining-list fwBold full-width">
          <div class="kaihi">
            <p><span class="db">カード発行手数料 + 初月分・次月分月会費</span><br><span class="fee">まとめて&nbsp;<span class="num">8,800</span><small>円(税込）</small></span></p>
            <p><small class="fwNormal">※お支払い方法は現金 、PayPay 、LINEPayのみとなります。</small></p>
          </div>
          <p class="id">本人確認書類<br class="il-hide-md">（免許証など）</p>
          <p class="card">金融機関<br class="il-hide-md">キャッシュカード</p>
        </div>
        <h3 class="fwMed">《高校生会員ご希望の皆様へ 》</h3>
        <p>お手続きの際は、学生証のご提示をお願いいたします。<br>また、入会手続きの際は、必ず親権者様と一緒にお越しください。</p>
        <p><small class="fwNormal">※親権者様のキャッシュカードでご登録させていただきます。</small></p>
      </section>
      <section id="price">
        <h2 class="taC"><img class="il-hide-md" src="<?php echo esc_url(home_url()); ?>/shared/light/img/h-price-01.webp" alt="PRICE" loading="lazy"><img class="il-show-md" src="<?php echo esc_url(home_url()); ?>/shared/light/img/h-price-01-pc.webp" alt="PRICE" loading="lazy" width="467">
        </h2>
        <ul class="price-list full-width">
          <li class="male vhc"><span class="type">男性会員</span><span class="title">月会費</span><span class="price"><span class="num DIN"><small class="yen">¥</small>7,128</span><small class="tax">税込</small></span></li>
          <li class="female vhc"><span class="type">女性会員</span><span class="title">月会費</span><span class="price"><span class="num DIN"><small class="yen">¥</small>6,380</span><small class="tax">税込</small></span></li>
          <li class="student">
            <div class="vhc"><span class="type">高校生</span><span class="title">月会費</span><span class="price"><span class="num DIN"><small class="yen">¥</small>5,500</span><small class="tax">税込</small></span></div>
            <p class="taC"><small>※高校生会員のご利用可能時間は5:00～22:00となります。<br>※15歳の方はご入会いただけません。</small></p>
          </li>
          <li class="joining vhc"><span class="title">入会時のみ</span><span class="fee">入会登録料</span><span class="price"><span class="num DIN"><small class="yen">¥</small>3,300</span><small class="tax">税込</small></span></li>
        </ul>
        <h3 class="taC"><img class="il-hide-md" src="<?php echo esc_url(home_url()); ?>/shared/light/img/h-price-02.webp" alt="OPTION" loading="lazy"><img class="il-show-md" src="<?php echo esc_url(home_url()); ?>/shared/light/img/h-price-02-pc.webp" alt="OPTION" loading="lazy" width="164">
        </h3>
        <div class="izunagaoka taC">
          <p class="strong fwBold">本格24ジム［ピュアストレングス伊豆長岡］<strong class="db">相互利用できます！</strong></p>
          <p class="price"><span class="title">1ヶ月</span><span class="num DIN"><small class="yen">¥</small>1,100</span><small class="tax">税込</small></p>
          <p class="link"><a class="ib" href="https://www.purestrength.jp" target="_blank" rel="noopener"><img src="<?php echo esc_url(home_url()); ?>/shared/light/img/pic-price-04.webp" alt="ピュアストレングス伊豆長岡" loading="lazy"></a><span class="location db">〒410-2211  伊豆の国市長岡126-5</span></p>
        </div>
      </section>
      <section id="faq">
        <h2 class="taC"><img class="il-hide-md" src="<?php echo esc_url(home_url()); ?>/shared/light/img/h-faq-01.webp" alt="FAQ" loading="lazy"><img class="il-show-md" src="<?php echo esc_url(home_url()); ?>/shared/light/img/h-faq-01-pc.webp" alt="FAQ" loading="lazy" width="467">
        </h2>
        <p class="lead taC">よくある質問にお応えいたします。</p>
        <dl class="faq-list">
          <dt><span>24時間スタッフがいますか？</span></dt>
          <dd><span>店舗にスタッフがいる時間は11：00～20：00（月曜/木曜/臨時スタッフ不在日を除く）となります。お手続きご希望の場合はスタッフ対応時間にご来店ください。<small class="db">※毎週月曜/木曜はスタッフが不在となりますのでご注意ください。<br>※年末年始など臨時にスタッフが不在の場合がございます。インフォメーションをご確認のうえ、ご来店ください。</small></span></dd>
          <dt><span>休館日はありますか？</span></dt>
          <dd><span>休館日はございませんので、会員様でしたらいつでもご利用いただけます。<small class="db">※入会ご希望の方はスタッフ対応時間にご来店ください。</small></span></dd>
          <dt><span>トレーニング指導はありますか？<br class="il-hide-md">またトレーニングメニューは作成してもらえますか？</span></dt>
          <dd><span>AIによるトレーニングシステムなので、画面の指示に沿ってご利用いただきます。初回のシートや重量などの設定はスタッフが一緒に設定させていただきます 。</span></dd>
          <dt><span>ロッカーはありますか？</span></dt>
          <dd><span>ジムエリアに無料の荷物棚をご用意しております。</span></dd>
          <dt><span>更衣室やシャワールームはありますか？</span></dt>
          <dd><span>シャワールームはございません。更衣室は完備しております。</span></dd>
          <dt><span>駐車場、駐輪場はありますか？</span></dt>
          <dd><span>無料の駐車場（17台）と駐輪場をご用意しております。</span></dd>
          <dt><span>レンタルタオル、ウェア、シューズはありますか？</span></dt>
          <dd><span>レンタルはございませんので、施設利用に必要なものは各自でお持ちください。</span></dd>
          <dt><span>未成年でも入会できますか？</span></dt>
          <dd><span>満16歳以上の方でしたら、親権者様の同意があればご入会いただけます。<small class="db">※入会申込書の保護者記入欄にご記入ください。<br>★16歳～18歳の高校生会員ご希望の方は下記点にご注意ください。<br>・ご利用可能時間　5:00～22:00（22:00～5:00の間は入退店ができなくなります。）<br>・ご入会の際は、必ず親権者様と一緒に店舗へお越しください。</small></span></dd>
          <dt><span>月会費の支払い方法は？</span></dt>
          <dd><span>入会時に金融機関の口座情報をご登録いただき、毎月26日（金融機関休業日の場合は翌営業日）に翌月分の月会費を口座振替にて引落しさせていただきます。</span></dd>
          <dt><span>口座振替にご利用できる金融機関は？</span></dt>
          <dd><span>一部ご利用になれない金融機関・キャッシュカードがございます。<br>届出印が必要となる金融機関もございますため、詳しくは店舗へお問い合わせください。</span></dd>
          <dt><span>領収書の発行はできますか？</span></dt>
          <dd><span>発行は可能です。ご希望の場合は、スタッフへお申し付けください。</span></dd>
          <dt><span>会員証が紛失、破損してしまいました。どうすればよいですか？</span></dt>
          <dd><span>再発行が必要となりますので、スタッフ対応時間に店舗へお越しください。なお、再発行には手数料￥2,200（税込）をいただきます。</span></dd>
          <dt><span>休会はできますか？</span></dt>
          <dd><span>休会制度がございますので可能です。<br>お手続きが必要となりますので、スタッフ対応時間に店舗へお越しください。<br>締日は毎月10日で、翌月1日から休会となります。（10日がスタッフ不在日の場合は、前日9日が締日となりますのでご注意ください。）<small class="db">※休会期間は休会費¥1,100(税込)/月となります。</small></span></dd>
          <dt><span>退会したい、オプションを解約したい場合は<br class="il-hide-md">どうすればよいですか？</span></dt>
          <dd><span>お手続きが必要となりますので、スタッフ対応時間に店舗へお越しください。<br>締日は毎月10日で、当月の末日退会/解約となります。<br>（10日がスタッフ不在日の場合は、前日9日が締日となりますのでご注意ください。）</span></dd>
          <dt><span>ビジターで利用できますか？</span></dt>
          <dd><span>必要事項にご記入のうえ、ご本人様確認証のご提示とビジター料金 ￥2,750(税込)/1回でご利用いただけます。<br>★ビジター利用日より2週間以内にご入会の方は、入会費用よりビジター料金を割引させていただきます！<small class="db">※スタッフ対応時間（11:00～20:00）内のみご利用いただけます。<br>※スタッフ不在日はインフォメーションをご確認のうえ、ご来店ください。<br>※最終受付は19:00となります。<br>※施設のご利用は16歳以上の方のみとさせていただきます。</small></span></dd>
        </dl>
      </section>
      <section id="access">
        <h2 class="taC"><img class="il-hide-md" src="<?php echo esc_url(home_url()); ?>/shared/light/img/h-access-01.webp" alt="ACCESS" loading="lazy"><img class="il-show-md" src="<?php echo esc_url(home_url()); ?>/shared/light/img/h-access-01-pc.webp" alt="ACCESS" loading="lazy" width="467">
        </h2>
        <p class="location taC">〒410-2317　静岡県伊豆の国市守木844-2</p>
        <div class="info">
          <p class="car"><span class="caution">お車の場合</span><span class="body">国道136号沿いにございます　《駐車場17台完備》</span></p>
          <p class="train"><span class="caution">電車の場合</span><span class="body">伊豆箱根鉄道駿豆線 「田京駅」から徒歩8分</span></p>
        </div>
        <figure class="map embed-figure max-width-none full-width">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3267.450795289083!2d138.94370071524082!3d35.020450780353606!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60199376840f526d%3A0x8bdd6135b9511b28!2z44CSNDEwLTIzMTcg6Z2Z5bKh55yM5LyK6LGG44Gu5Zu95biC5a6I5pyo77yY77yU77yU4oiS77yS!5e0!3m2!1sja!2sjp!4v1670052837159!5m2!1sja!2sjp" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </figure>
      </section>
    </main>

<?php get_footer('light'); ?>