<?php get_header('flower'); ?>

<div class="top-main anim fadein">
    <picture class="txt">
        <source media="(min-width:769px)" srcset="<?php echo get_template_directory_uri(); ?>/assets/img/top/main.png">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/main_sp.png" alt="10/15WED GRAND OPEN!">
    </picture>
</div>

<section class="about-sec">
    <h2 class="about-sec__ttl anim slideinB"><span>男性の目は気にならない！</span>女性のための安心安全24時間フィットネスジム</h2>
    <picture class="about-sec__img anim slideinB">
        <source media="(min-width:769px)" srcset="<?php echo get_template_directory_uri(); ?>/assets/img/top/about_img.svg">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/about_img_sp.svg" alt="女性専用24時間使い放題 万全のセキュリティ 最新AI機能搭載マシン完備 水素水無料飲み放題">
    </picture>
</section>

<section class="about2-sec">
    <h2 class="about2-sec__ttl anim slideinB">上質な洗練された空間で<br>好きな時に好きなだけボディメイクが楽しめる。</h2>
    <p class="about2-sec__txt anim slideinB">
        「楽しみながらトレーニング」をテーマに、運動初心者も<br class="sp-show">ジム初心者も<br class="pc-show">
        気兼ねなく通える女性のための<br class="sp-show">フィットネス空間を創りました。<br>
        24時間セキュリティ監視や、スマホによる非接触の<br class="sp-show">入退館など安全面・衛生面にも<br class="pc-show">
        とことんこだわり、<br class="sp-show">女性が過ごしやすい快適な環境を追求しました。
    </p>
    <p class="about2-sec__note anim slideinB">※画像はイメージです</p>
</section>

<section class="news-sec">
    <h2 class="news-sec__ttl anim slideinB">INFORMATION</h2>
    <ul class="news-list anim slideinB">
        <?php
            $args = array(
                'paged' => $paged,			//ページネーション用
                'post_type' => 'flower-info', // 投稿タイプのスラッグを指定
                'posts_per_page' => 5 // 投稿件数の指定
            );
            $info_query = new WP_Query($args); 
            if($info_query->have_posts()):
        ?>
        <?php while ($info_query->have_posts()): $info_query->the_post(); ?>
        <li><time datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('Y.m.d'); ?></time><a href="<?php the_permalink(); ?>"><?php echo get_the_title(); ?></a></li>
        <?php endwhile; else : ?>
        <li>記事がありません。</li>
        <?php endif; ?>
    </ul>
    <p class="news-more anim slideinB"><a href="<?php echo home_url('/'); ?>flower/flower-info/">お知らせ一覧</a></p>
</section>

<?php /*
<section class="event-sec">
    <h2 class="event-sec__ttl anim slideinB">
        <picture class="">
            <source media="(min-width:769px)" srcset="<?php echo get_template_directory_uri(); ?>/assets/img/top/event_img.png">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/event_img_sp.png" alt="無料 OPEN前内覧会開催! 10/6mon~14tue 11:00〜20:00 ">
        </picture>
    </h2>
    <p class="event-sec__txt anim slideinB">
        ★事前にWEB登録いただいた方の入会本登録と<br class="sp-show">AIトレーニングマシンの初期設定も実施します
        <span>※AIトレーニングマシンのご利用には必ず初期設定が必要です。</span>
    </p>
</section>
*/?>

<div class="camp-area anim slideinB">
    <picture>
        <source media="(min-width:769px)" srcset="<?php echo get_template_directory_uri(); ?>/assets/img/top/camp_img.png">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/camp_img_sp.png" alt="OPEN CAMPAIGN!">
    </picture>
    <div class="camp-area__btn">
        <p class="camp-area__txt">ピュアストレングスは在籍期間の条件や解約の違約金等ございません。</p>
        <a href="https://www.slim-sng.jp/slim/web/d/sng/web_admission_procedure/?c=Pu7T3mDs2z&f=00003"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/camp_btn.svg" alt="WEB入会はコチラから！"></a>
    </div>
</div>

<section class="appeal-sec">
    <h2 class="appeal-sec__ttl anim slideinB">ピュアストレングス フラワーは女性の想いに応える<br><span>魅力</span>が<span>たっぷり！</span></h2>
    <div class="appeal-cont">
        <h3 class="appeal-cont__ttl anim slideinB"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/appeal_ttl01.svg" alt="魅力01"></h3>
        <div class="appeal-area">
            <h4 class="appeal-area__ttl anim slideinB">エンターテイメント型<br class="sp-show">フィットネス！</h4>
            <p class="appeal-area__txt anim slideinB">楽しくトレーニングして<br class="sp-show">カラダをキレイに健康に整えませんか。</p>
            <picture class="appeal-area__img01 anim slideinB">
                <source media="(min-width:769px)" srcset="<?php echo get_template_directory_uri(); ?>/assets/img/top/appeal_area_img01.png">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/appeal_area_img01_sp.png" alt="エンタメPOINT">
            </picture>
        </div>
    </div>
    <div class="appeal-cont">
        <h3 class="appeal-cont__ttl anim slideinB"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/appeal_ttl02.svg" alt="魅力02"></h3>
        <div class="appeal-area">
            <h4 class="appeal-area__ttl anim slideinB">高性能な測定機を<br class="sp-show">ラインナップ！</h4>
            <p class="appeal-area__txt anim slideinB">データはマシンに連携され、<br class="sp-show">お客さまだけの効果的なトレーニングをサポート！</p>
            <picture class="appeal-area__img01 anim slideinB">
                <source media="(min-width:769px)" srcset="<?php echo get_template_directory_uri(); ?>/assets/img/top/appeal_area_img02.png">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/appeal_area_img02_sp.png" alt="チェックPOINT">
            </picture>
        </div>
    </div>
    <div class="appeal-cont">
        <h3 class="appeal-cont__ttl anim slideinB"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/appeal_ttl03.svg" alt="魅力03"></h3>
        <div class="appeal-area">
            <h4 class="appeal-area__ttl anim slideinB">初心者の方でも安心！<br class="sp-show">しっかりサポート◎</h4>
            <p class="appeal-area__txt anim slideinB">マシン設定＋オリエンテーション実施（約1時間30分）</p>
            <picture class="appeal-area__img01 anim slideinB">
                <source media="(min-width:769px)" srcset="<?php echo get_template_directory_uri(); ?>/assets/img/top/appeal_area_img03.png">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/appeal_area_img03_sp.png" alt="">
            </picture>
        </div>
    </div>
</section>

<section class="dakara-sec">
    <h2 class="dakara-sec__ttl anim slideinB">だから！</h2>
    <p class="dakara-sec__txt anim slideinB">いままで運動が苦手だった方、ジムに通うのに抵抗があった方<span>ここなら、もう心配ありません！</span></p>
</section>

<section class="comfort-sec">
    <h2 class="comfort-sec__ttl anim slideinB">Comfortable space only for women</h2>
    <picture class="comfort-sec__img">
        <source media="(min-width:769px)" srcset="<?php echo get_template_directory_uri(); ?>/assets/img/top/comfort_img01.png">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/comfort_img01_sp.png" alt="ピュアストレングスフラワーは女性の想いに応える安心安全な快適空間をとことん実現しました。">
    </picture>
    <figure class="comfort-sec__madori anim slideinB"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/comfort_madori.svg" alt="間取り例"></figure>
    <div class="comfort-icon">
        <h3 class="comfort-icon__ttl anim slideinB">24時間安心安全に<br class="sp-show">楽しく過ごせる環境を<br class="pc-show">整えております！</h3>
        <picture class="comfort-icon__img anim slideinB">
            <source media="(min-width:769px)" srcset="<?php echo get_template_directory_uri(); ?>/assets/img/top/comfort_icon.svg">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/comfort_icon_sp.svg" alt="">
        </picture>
    </div>
</section>

<section class="facility-sec">
    <h2 class="facility-sec__ttl anim slideinB">Facility</h2>
    <p class="facility-sec__txt anim slideinB">
        <span>ピュアストレングスフラワーのコンセプトカラー、</span>
        <span>ブルーとイエローを基調にした軽やかで優しい空間。</span>
    </p>
    <p class="facility-sec__note">イメージパース</p>
</section>

<section class="gym-sec">
    <h2 class="gym-sec__ttl anim slideinB">Gym</h2>
    <figure class="gym-sec__logo anim slideinB"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/gym_logo.svg" alt=""></figure>
    <div class="gym-sec__txt anim slideinB">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/gym_img.svg" alt="AI機能搭載のフィットネス機器導入！！">
        <p>エンターテイメント型<br class="sp-show">トレーニングが実現！</p>
    </div>
</section>
<picture class="gym-area anim fadein">
    <source media="(min-width:769px)" srcset="<?php echo get_template_directory_uri(); ?>/assets/img/top/gym_img01.png">
    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/gym_img01_sp.png" alt="01 革新的なAIマシン！Checkup">
</picture>
<picture class="gym-area anim fadein">
    <source media="(min-width:769px)" srcset="<?php echo get_template_directory_uri(); ?>/assets/img/top/gym_img02.png">
    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/gym_img02_sp.png" alt="02 最新AI筋力マシン！Biostrength™">
</picture>
<picture class="gym-lineup anim slideinB">
    <source media="(min-width:769px)" srcset="<?php echo get_template_directory_uri(); ?>/assets/img/top/gym_img02_lineup.png">
    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/gym_img02_lineup_sp.png" alt="マシンラインナップ">
</picture>
<picture class="gym-area anim fadein">
    <source media="(min-width:769px)" srcset="<?php echo get_template_directory_uri(); ?>/assets/img/top/gym_img03.png">
    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/gym_img03_sp.png" alt="03 高性能有酸素マシンExcite Live">
</picture>
<picture class="gym-lineup anim slideinB">
    <source media="(min-width:769px)" srcset="<?php echo get_template_directory_uri(); ?>/assets/img/top/gym_img03_lineup.png">
    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/gym_img03_lineup_sp.png" alt="マシンラインナップ">
</picture>

<section class="studio-sec">
    <h2 class="studio-sec__ttl anim slideinB">Studio</h2>
    <p class="studio-sec__read anim slideinB">バーチャル映像レッスン</p>
    <p class="studio-sec__txt anim slideinB">大型スクリーンに映し出す<br>映像プログラムは圧巻！</p>
    <figure class="studio-sec__logo anim slideinB"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/studio_logo.svg" alt="LesMills ロゴ"></figure>
    <p class="studio-sec__abs">
        <span>世界中で人気のレズミルズプログラムが</span><br><span>24時間楽しめる最先端バーチャルスタジオ！</span>
    </p>
</section>

<div class="studio-area">
    <div class="studio-area__head">
        <h3 class="studio-area__logo anim slideinB"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/studio_area_logo.png" alt="LesMills VIRTUAL ロゴ"></h3>
        <div class="studio-area__read">
            <p class="ttl anim slideinB">初心者の方も気軽に参加できる！</p>
            <p class="txt anim slideinB">世界トップクラスのインストラクターによる最先端のグループエクササイズ「レズミルズバーチャル」を24時間いつでも受け放題！！</p>
        </div>
    </div>
    <div class="studio-cont anim slideinB">
        <h4 class="logo sp-show"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/studio_logo01.png" alt="LesMills BODYBALANCE ロゴ"></h4>
        <figure class=""><img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/studio_thum01.png" alt=""></figure>
        <div class="studio-cont__info">
            <h4 class="logo pc-show"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/studio_logo01.png" alt="LesMills BODYBALANCE ロゴ"></h4>
            <p class="txt">
                心と身体、そして生活そのものの質を向上させるエクササイズ。ヨガをベースにしながら太極拳やピラティスの要素を取り入れ、柔軟性を高めつつ体幹を強化します。初心者から経験者まで幅広い層が参加しやすいプログラムです！
            </p>
        </div>
    </div>
    <div class="studio-cont anim slideinB">
        <h4 class="logo sp-show"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/studio_logo02.png" alt="LesMills BODYPUMP ロゴ"></h4>
        <figure class=""><img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/studio_thum02.png" alt=""></figure>
        <div class="studio-cont__info">
            <h4 class="logo pc-show"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/studio_logo02.png" alt="LesMills BODYPUMP ロゴ"></h4>
            <p class="txt">
                バーベルを使って全身を鍛えるワークアウト。プレスやスクワットなどの反復運動で心拍数を上げ、カロリーを消費しながら骨の健康を維持します。低負荷・高回数がベースで、大きな筋肉をつけることなく身体を引き締めたい方にオススメです！
            </p>
        </div>
    </div>
    <div class="studio-cont anim slideinB">
        <h4 class="logo sp-show"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/studio_logo03.png" alt="LesMills BODYCOMBAT ロゴ"></h4>
        <figure class=""><img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/studio_thum03.png" alt=""></figure>
        <div class="studio-cont__info">
            <h4 class="logo pc-show"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/studio_logo03.png" alt="LesMills BODYCOMBAT ロゴ"></h4>
            <p class="txt">
                空手やボクシング・テコンドーなど、様々な格闘技の動きを取り入れたハイエナジーワークアウト。シンプルで覚えやすく、仮想の相手へのパンチやキックで意識的に身体をひねることで、腹筋運動と同じ効果を期待できます！
            </p>
        </div>
    </div>
    <div class="studio-cont anim slideinB">
        <h4 class="logo sp-show"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/studio_logo04.png" alt="LesMills BODYATTACK ロゴ"></h4>
        <figure class=""><img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/studio_thum04.png" alt=""></figure>
        <div class="studio-cont__info">
            <h4 class="logo pc-show"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/studio_logo04.png" alt="LesMills BODYATTACK ロゴ"></h4>
            <p class="txt">
                ランニングやランジ・ジャンプといった動きに、プッシュアップやスクワットなどの筋力トレーニングを組み合わせた全身ワークアウト！<br>初心者から上級者までを満足させるハイエナジーなプログラム！
            </p>
        </div>
    </div>
    <div class="studio-cont anim slideinB">
        <h4 class="logo sp-show"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/studio_logo05.png" alt="LesMills CORE"></h4>
        <figure class=""><img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/studio_thum05.png" alt=""></figure>
        <div class="studio-cont__info">
            <h4 class="logo pc-show"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/studio_logo05.png" alt="LesMills CORE"></h4>
            <p class="txt">
                トップアスリートのトレーニングにインスパイアされた科学的な体幹ワークアウト。<br>体幹や周辺の筋肉を強化し、安定性と持久力を高めることでスポーツパフォーマンスを向上！<br>バランスを改善し、ケガの防止にもつながります！
            </p>
        </div>
    </div>
    <div class="studio-tri">
        <figure class=" anim slideinB"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/studio_tri.svg" alt="年中24時間入退自由でいつでもOK！ 3ヶ月ごとにプログラム内容を更新！ 常に高品質なプログラムが楽しめる！"></figure>
        <div class="lesson-area anim slideinB">
            <p class="lesson-area__txt">レズミルズレッスンは毎日24時間ずっと実施中！</p>
            <a href="https://www.purestrength.jp/flower/flower-info/1133/" class="lesson-area__btn" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/lesson_btn.svg" alt="レズミルズレッスン表はコチラから"></a>
        </div>
    </div>
</div>

<section class="sec --other">
    <h2 class="sec__ttl anim slideinB">Other<span>最適なトレーニングをサポートする<br>さまざまなアイテムをご用意！</span></h2>
    <p class="sec__txt anim slideinB">あらゆる思いや目的をもった女性のおチカラになれるよう<br>ピュアストレングス フラワーは<br class="sp-show">至れり尽くせりの24時間フィットネスジムを目指します！</p>
    <div class="other-area">
        <h3 class="other-area__ttl">
            <picture class=" anim slideinB">
                <source media="(min-width:769px)" srcset="<?php echo get_template_directory_uri(); ?>/assets/img/top/other_ttl01.svg">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/other_ttl01_sp.svg" alt="高性能体組成計（TANITA780）完備！">
            </picture>
        </h3>
        <picture class="other-area__img anim slideinB">
            <source media="(min-width:769px)" srcset="<?php echo get_template_directory_uri(); ?>/assets/img/top/other_img01.png">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/other_img01_sp.png" alt="">
        </picture>
    </div>
    <div class="other-area">
        <h3 class="other-area__ttl">
            <picture class=" anim slideinB">
                <source media="(min-width:769px)" srcset="<?php echo get_template_directory_uri(); ?>/assets/img/top/other_ttl02.svg">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/other_ttl02_sp.svg" alt="高濃度水素水サーバー完備">
            </picture>
        </h3>
        <picture class="other-area__img --md anim slideinB">
            <source media="(min-width:769px)" srcset="<?php echo get_template_directory_uri(); ?>/assets/img/top/other_img02.png">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/other_img02_sp.png" alt="">
        </picture>
    </div>
    <div class="other-area">
        <h3 class="other-area__ttl">
            <picture class=" anim slideinB">
                <source media="(min-width:769px)" srcset="<?php echo get_template_directory_uri(); ?>/assets/img/top/other_ttl03.svg">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/other_ttl03_sp.svg" alt="オーダーメイドサプリメントサーバー">
            </picture>
        </h3>
        <picture class="other-area__img anim slideinB">
            <source media="(min-width:769px)" srcset="<?php echo get_template_directory_uri(); ?>/assets/img/top/other_img03.png">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/other_img03_sp.png" alt="">
        </picture>
    </div>
    <div class="other-area">
        <h3 class="other-area__ttl">
            <picture class=" anim slideinB">
                <source media="(min-width:769px)" srcset="<?php echo get_template_directory_uri(); ?>/assets/img/top/other_ttl04.svg">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/other_ttl04_sp.svg" alt="初回時オリエンテーション">
            </picture>
        </h3>
        <div class="other-area__bdy">
            <picture class="other-area__img --lg anim slideinB">
                <source media="(min-width:769px)" srcset="<?php echo get_template_directory_uri(); ?>/assets/img/top/other_img04.svg">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/other_img04_sp.svg" alt="">
            </picture>
        </div>
    </div>
    <?php /*
    <div class="other-area">
        <h3 class="other-area__ttl">
            <picture class=" anim slideinB">
                <source media="(min-width:769px)" srcset="<?php echo get_template_directory_uri(); ?>/assets/img/top/other_ttl05.svg">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/other_ttl05_sp.svg" alt="オリジナル骨格診断からのトレーニング処方">
            </picture>
        </h3>
        <div class="other-area__bdy">
            <picture class="other-area__img --lg anim slideinB">
                <source media="(min-width:769px)" srcset="<?php echo get_template_directory_uri(); ?>/assets/img/top/other_img05.png">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/other_img05_sp.png" alt="">
            </picture>
        </div>
    </div>
    */?>
</section>

<section class="sec --price">
    <h2 class="sec__ttl anim slideinB">Price</h2>
    <picture class="price-img anim slideinB">
        <source media="(min-width:769px)" srcset="<?php echo get_template_directory_uri(); ?>/assets/img/top/price_img.svg">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/price_img_sp.svg" alt="料金表">
    </picture>
</section>

<div class="camp-area anim slideinB">
    <picture>
        <source media="(min-width:769px)" srcset="<?php echo get_template_directory_uri(); ?>/assets/img/top/camp_img.png">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/camp_img_sp.png" alt="OPEN CAMPAIGN!">
    </picture>
    <div class="camp-area__btn">
        <a href="https://www.slim-sng.jp/slim/web/d/sng/web_admission_procedure/?c=Pu7T3mDs2z&f=00003"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/camp_btn.svg" alt="WEB入会はコチラから！"></a>
    </div>
</div>

<section class="taC" id="joining">
    <h2 class=" anim slideinB">入会もカンタン！</h2>
    <p class="caution fwBold anim slideinB">WEB入会登録完了後、<br class="sp-show">店頭へお越しいただき入会手続きを完了してください。</p>
    <p class="strong fwBold anim slideinB">入会時諸費用をお支払い後、<br>入退館用QRコードの発行、初期設定の<br class="sp-show">ご予約をお取りいたします。</p>
    <h3 class="fwMed anim slideinB">《お持ちいただく物》</h3>
    <div class="joining-list fwBold full-width anim slideinB">
        <div class="kaihi">
        <p>入会登録料 + 初月分・次月分月会費 <br class="sp-show">まとめて <span class="num">8,800</span><small>円(税込)</small></p>
        <p><small class="fwNormal">※お支払い方法は現金 、PayPayのみとなります。</small></p>
        </div>
        <p class="id">本人確認書類<br class="sp-show">（免許証など）</p>
        <p class="card">金融機関<br class="sp-show">キャッシュカード</p>
    </div>
    <h3 class="fwMed anim slideinB">《高校生会員ご希望の皆様へ 》</h3>
    <p class=" anim slideinB">お手続きの際は、学生証のご提示をお願いいたします。<br>また、入会手続きの際は、必ず親権者様と一緒にお越しください。</p>
    <p class=" anim slideinB"><small class="fwNormal">※親権者様のキャッシュカードでご登録させていただきます。</small></p>
</section>

<section class="sec --faq">
    <h2 class="sec__ttl anim slideinB">FAQ</h2>
    <p class="sec__txt anim slideinB">よくある質問にお応えいたします。</p>
    <details class="faq-list aco-cont anim slideinB">
        <summary class="faq-list__head aco-cont__head">24時間スタッフはいますか？</summary>
        <p class="faq-list__body aco-cont__body">店舗にスタッフがいる時間は11：00～20：00（月・木・臨時スタッフ不在日を除く）となります。<br>お手続きご希望の場合はスタッフ対応時間にご来店ください。<br>※毎週月曜/木曜はスタッフが不在となりますのでご注意ください。<br>※その他臨時でスタッフが不在の場合がございます。インフォメーションをご確認の上、ご来店ください。</p>
    </details>
    <details class="faq-list aco-cont anim slideinB">
        <summary class="faq-list__head aco-cont__head">休館日はありますか？</summary>
        <p class="faq-list__body aco-cont__body">休館日はございませんので、会員様でしたらいつでもご利用いただけます。<br>※入会ご希望の方はスタッフ対応時間にご来店ください。</p>
    </details>
    <details class="faq-list aco-cont anim slideinB">
        <summary class="faq-list__head aco-cont__head">トレーニング指導はありますか？またトレーニングメニューは作成してもらえますか？</summary>
        <p class="faq-list__body aco-cont__body">AIシステムが、お一人おひとりに最適なトレーニングメニューを自動で作成します。<bR>トレーニング中は、モニターにメニュー内容が表示され、指示に従って進められます。<br>マシンの使い方やシートの調整は、スタッフがサポートいたしますのでご安心ください。</p>
    </details>
    <details class="faq-list aco-cont anim slideinB">
        <summary class="faq-list__head aco-cont__head">ロッカーはありますか？</summary>
        <p class="faq-list__body aco-cont__body">無料の荷物棚をご用意しています。※貴重品はご自身で管理をお願いいたします。</p>
    </details>
    <details class="faq-list aco-cont anim slideinB">
        <summary class="faq-list__head aco-cont__head">更衣室やシャワールームはありますか？</summary>
        <p class="faq-list__body aco-cont__body">シャワールームはありませんが、更衣室を2部屋ご用意しています。</p>
    </details>
    <details class="faq-list aco-cont anim slideinB">
        <summary class="faq-list__head aco-cont__head">駐車場、駐輪場はありますか？</summary>
        <p class="faq-list__body aco-cont__body">無料駐車場（15台）および駐輪場をご利用いただけます。</p>
    </details>
    <details class="faq-list aco-cont anim slideinB">
        <summary class="faq-list__head aco-cont__head">レンタルタオル、ウェア、シューズはありますか？</summary>
        <p class="faq-list__body aco-cont__body">ウェア・タオル・シューズのレンタルはございません。ご自身でご準備ください。</p>
    </details>
    <details class="faq-list aco-cont anim slideinB">
        <summary class="faq-list__head aco-cont__head">未成年でも入会できますか？</summary>
        <p class="faq-list__body aco-cont__body">16歳以上で、親権者の同意があればご入会いただけます。 ※申込書の保護者記入欄にご記入ください。<Br>★高校生（16～18歳）のご入会について<br>・ご利用時間：5:00～22:00（22:00～5:00は入退館できません）<br>・ご入会手続きの際は、必ず親権者と一緒にご来店ください。</p>
    </details>
    <details class="faq-list aco-cont anim slideinB">
        <summary class="faq-list__head aco-cont__head">月会費の支払い方法は？</summary>
        <p class="faq-list__body aco-cont__body">毎月26日（金融機関休業日の場合は翌営業日）に翌月分の月会費を口座振替にて引落しさせていただきます。<br>入会時にキャッシュカード（暗証番号入力）、または口座振替依頼書（口座情報＋銀行印）にて口座情報のご登録をさせていただきます。</p>
    </details>
    <details class="faq-list aco-cont anim slideinB">
        <summary class="faq-list__head aco-cont__head">領収書の発行はできますか？</summary>
        <p class="faq-list__body aco-cont__body">手書き領収書の発行が可能です。スタッフまでお申し付けください。</p>
    </details>
    <details class="faq-list aco-cont anim slideinB">
        <summary class="faq-list__head aco-cont__head">休会はできますか？</summary>
        <p class="faq-list__body aco-cont__body">月額1,100円（税込）で休会可能です。 毎月10日までにお手続きいただくと、翌月1日から休会となります。<br>（10日がスタッフ不在日の場合は、前日9日が締日となりますのでご注意ください。）</p>
    </details>
    <details class="faq-list aco-cont anim slideinB">
        <summary class="faq-list__head aco-cont__head">退会したい、オプションを解約したい場合はどうすればよいですか？</summary>
        <p class="faq-list__body aco-cont__body">毎月10日までにお手続きいただくと、当月末に退会、解約となります。<br>（10日がスタッフ不在日の場合は、前日9日が締日となりますのでご注意ください。）</p>
    </details>
    <details class="faq-list aco-cont anim slideinB">
        <summary class="faq-list__head aco-cont__head">ビジターで利用できますか？</summary>
        <p class="faq-list__body aco-cont__body">ご本人様確認証のご提示とビジター料金 ￥2,750(税込)/1回でご利用いただけます。<br>※マシンの初期設定に1時間ほどお時間をいただきます。<br>※スタッフ対応時間（11:00～20:00）内のみご利用いただけます。※最終受付は18:00となります。<br>※スタッフ不在日はインフォメーションをご確認のうえ、ご来店ください。<br>※施設のご利用は16歳以上の方のみとさせていただきます。<br>★ビジター利用日より2週間以内にご入会の場合、入会費用よりビジター料金を割引させていただきます！</p>
    </details>
    <details class="faq-list aco-cont anim slideinB">
        <summary class="faq-list__head aco-cont__head">店舗に男性は入れますか？</summary>
        <p class="faq-list__body aco-cont__body">当施設は女性専用のため、原則として男性のご入店はお断りしております。<br>※スタッフに男性がいる場合がありますのでご了承ください。</p>
    </details>
</section>

<section class="sec --access">
    <h2 class="sec__ttl anim slideinB">ACCESS</h2>
    <div class="access-area">
        <div class="access-cont">
            <h3 class="access-cont__logo anim slideinB"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/access_logo.svg" alt="ピュアストレングス"></h3>
            <div class="access-cont__info anim slideinB">
                <figure><img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/access_name.svg" alt="女性専用 ジム+スタジオ ピュアストレングス フラワー"></figure>
                <div class="access-place anim slideinB">
                    <figure><img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/access_park.svg" alt="駐車場15台無料完備"></figure>
                    <p>
                        410-0007<br>
                        静岡県沼津市西沢田６２０−１<br>
                        ■富士急シティバス 西沢田バス停 徒歩4分
                    </p>
                </div>
            </div>
        </div>
        <p class="access-area__note anim slideinB">
            24時間営業・年中無休<br class="sp-show"> スタッフ対応時間／11:00〜20:00<br class="sp-show">（月・木・臨時スタッフ不在日を除く）<br>
            <span class="tel"><a href="tel:0559607513">055-960-7513</a></span>
        </p>
    </div>
</section>

<div class="map-cont anim slideinB">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6526.727708708379!2d138.84575287636275!3d35.12259256045834!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x601985051907375d%3A0x7d4ca8b1a90878ec!2z44CSNDEwLTAwMDcg6Z2Z5bKh55yM5rK85rSl5biC6KW_5rKi55Sw77yW77yS77yQ4oiS77yR!5e0!3m2!1sja!2sjp!4v1755199959452!5m2!1sja!2sjp" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</div>

<?php get_footer('flower'); ?>