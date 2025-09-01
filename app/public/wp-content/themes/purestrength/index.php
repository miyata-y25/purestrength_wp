<?php get_header(); ?>
	<main>
		<div id="content">
			<div id="top-kv">
				<p><img src="<?php echo get_template_directory_uri(); ?>/shared/img/top-kv-txt01_2.svg" alt="地域最大級の本格24時間ジムPURE STRENGTH"></p>
			</div>
			<div class="top-pr">
				<p><img src="<?php echo get_template_directory_uri(); ?>/shared/img/top-pr-txt01.svg" alt="新規入会キャンペーン 好評受付実施中"></p>
				<!-- <p><img src="<?php echo get_template_directory_uri(); ?>/shared/img/top-pr-txt02.svg" alt="予約なしでいつでも見学OK＜受付時間11：00〜20：00＞"></p> -->
				<p style="margin-top: 2.0em;">
					<a href="https://www.slim-sng.jp/slim/web/d/sng/web_admission_procedure/?c=Yb3kP5uDm7&f=00001" target="_blank" onclick="return gtag_report_conversion('https://www.slim-sng.jp/slim/web/d/sng/web_admission_procedure/?c=Yb3kP5uDm7&f=00001');"><img src="<?php echo get_template_directory_uri(); ?>/shared/img/top-pr-btn01.svg" alt="WEB入会はコチラから"></a>
				</p>
			</div>
			<section id="top-info">
				<h2>Information</h2>
				<ul id="info-list">
				<?php if(have_posts()): while(have_posts()): the_post(); ?>
					<!--ここに記事一覧に表示したいコンテンツを記述-->
					<li>
						<time><?php the_time('Y.m.d'); ?></time>
						<span>
							<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
						</span>
					</li>
				<?php endwhile; endif; ?><!--ループ終了-->
				</ul>
				<p id="info-btn">
						<a href="<?php echo home_url(); ?>/info/"><img src="<?php echo get_template_directory_uri(); ?>/shared/img/top-info-btn.svg" alt="一覧を見る"></a>
				</p>
			</section>
			<section id="top-sec01">
				<h2>Merit</h2>
				<p class="lead">伊豆長岡初の<br class="sp">本格24時間ジム<br> 《ピュアストレングス伊豆長岡》<br class="sp">の特長</p>
				<ul>
					<li class="no01">
						<p class="ttl">安全・万全の<br> セキュリティ</p>
						<p>24時間365日<br> ALSOKがサポート！
								<br> 女性も安心・安全、
								<br> ICカード/バンドで
								<br> 自動チェックイン！
						</p>
					</li>
					<li class="no02">
						<p class="ttl">お財布に優しい<br> 納得の低価格</p>
						<p>女性会員6,380円<small>(税込)</small>/月<br> 男性会員7,128円<small>(税込)</small>/月
								<br> これだけで24時間
								<br> いつでもエクササイズ！
						</p>
					</li>
					<li class="no03">
						<p class="ttl">地域最大級の<br> ウェイトトレーニング
								<br> マシン数
						</p>
						<p>テクノジム社の<br> 最新鋭マシン導入！
								<br> 初心者から中上級者
								<br> 向けまで多数！
						</p>
					</li>
					<li class="no04">
						<p class="ttl">水素水<br> 無料飲み放題
						</p>
						<p>運動後の水分補給に<br> 高濃度水素水を！
								<br> いつでも無料で
								<br> お飲みいただけます！
						</p>
					</li>
					<li class="no05">
						<p class="ttl">トレーニング<br> サポート完備
						</p>
						<p>運動初心者OK！<br> ご希望の方には
								<br> トレーニングメニューを
								<br> 作成し、指導します！
								<br> （無料・予約制）
						</p>
					</li>
					<li class="no06">
						<p class="ttl">女性に嬉しい<br> マシン完備
						</p>
						<p>女性らしい<br> ボディラインづくりに
								<br> 欠かせないマシンを完備。
						</p>
					</li>
					<li class="no07">
						<p class="ttl">タンニング<br>
								<small>¥</small>500<small>(税込)/10分</small></p>
						<p>高出力タンニング<br> 完備！
								<br> 年中、健康的な
								<br> 日焼け肌に！
						</p>
					</li>
					<li class="no08">
						<p class="ttl">コラーゲンマシン<br>
								<small>¥</small>500<small>(税込)/20分</small></p>
						<p>アスリートにもファンが多い<br> コラーゲンマシン導入！
								<br> トレーニング後の
								<br> 疲労回復やケガ予防に！
						</p>
					</li>
					<li class="no09">
						<p class="ttl">24時間営業<br> 年中無休
						</p>
					</li>
					<li class="no10">
						<p class="ttl">無料駐車場<br> 27台完備
						</p>
					</li>
					<li class="no11">
						<p class="ttl">シャワー・<br> 更衣室完備
						</p>
					</li>
					<li class="no12">
						<p class="ttl">契約ロッカー<br>
								<small>¥</small>1,100<small>(税込)</small></p>
					</li>
				</ul>
				<p class="big">気軽に快適にトレーニングしていただけるよう、細部に配慮しました。</p>
			</section>
			<section id="top-sec02">
				<div>
					<h2>About_us</h2>
					<p class="lead">豊かな人生を過ごすには、心身ともに健康であることが重要な要素。</p>
					<p>私たちは20余年フィットネス業界で携わった経験を活かした視点から、健康になるためのココロとカラダのパワーチャージをあらゆる角度から提供したいと考え、<br> 24時間トレーニングができる好環境の「ピュアストレングス」を創りました。 <br> 地域の皆さまが、「ピュアストレングス」でのトレーニングライフを通して健康で豊かな人生を過ごしていただけることが、私たちの強い思いです。<br></p>
					<p class="lead02">違う<span>のは</span><br class="sp">一目瞭然</p>
					<section id="top-sec02-01" class="col">
						<figure><img src="<?php echo get_template_directory_uri(); ?>/shared/img/top-sec02-map.png" alt="フロアマップ"></figure>
						<div>
							<h3><span>01</span><span>24ジムは狭いイメージがある</span><span>違うのはここ！</span></h3>
							<p class="lead03"><small>ピュアストレングスは</small><br> ジムフロアだけで約100坪も！
							</p>
							<p>ひとつひとつのマシンをゆったり配置した広々としたフロアです。 特にフリーウェイトエリアは広いスペースを確保しました。 さらに上級者・初心者・女性とそれぞれのユーザーにあわせたマシン配置を工夫し、だれもが安心してワークアウトが楽しめる施設空間をつくりました。</p>
						</div>
					</section>
				</div>
				<section id="top-sec02-02">
					<div class="box">
						<h3><span>02</span><span>24ジムはフリーウェイトが少なく、<br>中上級者向けのマシンが少ないイメージがある</span><span>違うのはここ！</span></h3>
						<p class="lead03"><small>ピュアストレングスは</small><br> 地域最大級のウェイトトレーニングマシン・
							<br> フリーウェイト完備！
						</p>
						<p>ダンベルは50kgまで揃え、パワーラックなどトレーニング中上級者が満足できるマシン種類とマシン台数を充実させ、地域最大級の本格トレーニングエリアを実現しました。 またマシンはデザイン性に優れたテクノジム社製を導入。 人気の有酸素マシンも揃え、質ともにトータルに充実したトレーニング空間が生まれました。</p>
					</div>
				</section>
				<section id="top-sec02-area">
					<h2 class="notani">各エリアのご案内</h2>
					<section id="top-sec02-area-01">
						<div class="box">
							<h3>FREE WEIGHT</h3>
							<figure><img src="<?php echo get_template_directory_uri(); ?>/shared/img/top-sec02-area-img01.jpg" alt="完成イメージ"></figure>
							<p>ピュアストレングスでは多様なマシンを豊富に揃えて、中上級者はもちろん初心者にも使いやすいトレーニング環境を整えました。<br> フリーウェイトトレーニングはマシントレーニングでは得られない刺激があり、効果的なボディメイクが可能です。 少ない種目でもしっかり効果が得られるので初心者にも無理なく行えます。 </p>
						</div>
							<section class="pickup">
								<h4>Pick Up Machine</h4>
								<ul>
									<li>
										<figure><img src="<?php echo get_template_directory_uri(); ?>/shared/img/top-sec02-area-img11.jpg" alt=""></figure>
										<p>パワーラック</p>
									</li>
									<li>
										<figure><img src="<?php echo get_template_directory_uri(); ?>/shared/img/top-sec02-area-img02.jpg" alt=""></figure>
										<p>ダンベル 1〜50ｋｇ</p>
									</li>
									<li>
										<figure><img src="<?php echo get_template_directory_uri(); ?>/shared/img/top-sec02-area-img03.jpg" alt=""></figure>
										<p>スコットベンチ</p>
									</li>
								</ul>
							</section>
						</section>
						<section id="top-sec02-area-02">
							<div class="box">
								<h3>STRENGTH MACHINE</h3>
								<p>筋力アップに効果的なマシントレーニングは、体力や筋力にあわせてトレーニングができるので、女性や初心者の方にも安心です。 マシンはスタイリッシュなデザインのイタリア・テクノジム社製を採用。お洒落なトレーニング空間を演出します。</p>
								<figure><img src="<?php echo get_template_directory_uri(); ?>/shared/img/top-sec02-area-img04.jpg" alt="完成イメージ"></figure>
							</div>
							<div class="logo">
									<p><img src="<?php echo get_template_directory_uri(); ?>/shared/img/logo04.png" alt="TechnoGym"></p>
									<p><img src="<?php echo get_template_directory_uri(); ?>/shared/img/logo05.png" alt="TOKYO 2020 OFFICIAL SUPPORTER"></p>
									<p>フィットネス器機</p>
							</div>
							<section class="pickup">
								<h4>Pick Up Machine</h4>
									<ul>
										<li>
											<figure><img src="<?php echo get_template_directory_uri(); ?>/shared/img/top-sec02-area-img05.jpg" alt=""></figure>
											<p>レッグプレス</p>
										</li>
										<li>
											<figure><img src="<?php echo get_template_directory_uri(); ?>/shared/img/top-sec02-area-img06.jpg" alt=""></figure>
											<p>ラットマシン</p>
										</li>
										<li>
											<figure><img src="<?php echo get_template_directory_uri(); ?>/shared/img/top-sec02-area-img07.jpg" alt=""></figure>
											<p>ワイドチェスト</p>
										</li>
									</ul>
							</section>
						</section>
						<section id="top-sec02-area-03">
							<div class="box">
								<h3>CARDIO MACHINE</h3>
								<p>天候に左右されずランニングが可能！！ <br> しかもカーディオマシンは全台TV付きなので、好きな映像を見ながら飽きずにエクササイズが楽しめます。筋トレと合わせて有酸素トレーニングをすることで脂肪燃焼効率がUPします！
								</p>
								<figure><img src="<?php echo get_template_directory_uri(); ?>/shared/img/top-sec02-area-img08.jpg" alt="完成イメージ"></figure>
							</div>
							<section class="pickup">
								<h4>Pick Up Machine</h4>
								<ul>
									<li>
										<figure><img src="<?php echo get_template_directory_uri(); ?>/shared/img/top-sec02-area-img09.jpg" alt=""></figure>
										<p>ランニングマシン</p>
									</li>
										<li>
											<figure><img src="<?php echo get_template_directory_uri(); ?>/shared/img/top-sec02-area-img10.jpg" alt=""></figure>
											<p>リクラインバイク</p>
										</li>
								</ul>
							</section>
						</section>
						</section>
							<section id="top-sec02-03">
									<div class="box">
											<h3><span>03</span><span>24ジムは女性が使いにくいイメージがある</span><span>違うのはここ！</span></h3>
											<p class="lead03"><small>ピュアストレングスは</small><br> ボディメイクしたい女性が夢中になれるジム！
											</p>
											<p>ピュアストレングスには、女性を魅力的に輝かせるためのトレーニングに不可欠なマシンを揃えています。また、女性が利用しやすいマシンレイアウトにするなど女性に配慮した優しいトレーニング空間があるので、安心して続けられます。</p>
									</div>
									<section class="pickup">
											<h4>Pick Up Machine</h4>
											<ul>
													<li>
															<figure><img src="<?php echo get_template_directory_uri(); ?>/shared/img/top-sec02-img01.jpg" alt=""></figure>
															<p>ヒップスラスト</p>
													</li>
													<li>
															<figure><img src="<?php echo get_template_directory_uri(); ?>/shared/img/top-sec02-img02.jpg" alt=""></figure>
															<p>リアキック</p>
													</li>
													<li>
															<figure><img src="<?php echo get_template_directory_uri(); ?>/shared/img/top-sec02-img03.jpg" alt=""></figure>
															<p>マルチヒップ</p>
													</li>
											</ul>
									</section>
							</section>
							<section id="top-sec02-04">
									<h3><span>04</span><span>24ジムはトレーニングサポートがないイメージがある</span><span>違うのはここ！</span></h3>
									<p class="lead03"><small>ピュアストレングスは</small><br> お客さまの目的に沿った
											<br class="sp">トレーニングメニューを<br> 無料で作成し、指導いたします！
									</p>
									<p>トレーニング初心者にとっては、マシンをどう扱っていいのかわからない。 <br> 「筋トレしてみたい」とか 「痩せたい」 「運動不足解消したい」 「筋力UPしたい」 など目的は人によって様々で、基礎体力や運動経験も人それぞれ。<br> せっかく24時間いつでもトレーニングができるのに、正しいマシンの使い方がわからないままでは成果もでにくく、運動が続かない原因になります。ここなら24ジムなのに、トレーニングサポートがあるので、安心です！
									</p>
									<figure><img src="<?php echo get_template_directory_uri(); ?>/shared/img/top-sec02-img04.png" alt="" class="pc"><img src="<?php echo get_template_directory_uri(); ?>/shared/img/top-sec02-img04-sp.png" alt="" class="sp"></figure>
							</section>
							<section id="top-sec02-05">
									<h3><span>05</span><span>24ジムは初心者がフリーウェイトをするイメージがない</span><span>違うのはここ！</span></h3>
									<p class="lead03"><small>ピュアストレングスは</small><br> 初心者にも安心安全にフリーウェイト
											<br> トレーニングを指導します！
									</p>
									<p>フリーウェイトトレーニング人気の今、始めてみたいと思っていても中上級者が多く、気後れしそうという初心者の方に、ここならサポートも完備しているので安心！ 正しいマシンの使い方やフォームを丁寧に指導し、お一人おひとりに応じたサポートをいたします。 また、トレーニングバリエーションも提案できるので、飽きずに続けられ成果にも応えられます。</p>
									<figure class="sp"><img src="<?php echo get_template_directory_uri(); ?>/shared/img/top-sec02-img07.png" alt=""></figure>
							</section>
							<section id="top-sec02-06">
									<h3><span>06</span><span>24ジムは水素水が有料のイメージがある</span><span>違うのはここ！</span></h3>
									<p class="lead03 img"><small>ピュアストレングスは</small><img src="<?php echo get_template_directory_uri(); ?>/shared/img/top-sec02-img05.png" alt="専用ボトル（￥500）購入の方に"><br> ドクターズ・マン社製の水素水が
											<br>
											<strong>無料で飲み放題！</strong></p>
									<p>水素水はおいしい<br class="sp">ミネラルウォーター。<br> ナノレベルで豊富な水素を含み、良質な水分補給に最適な飲料です。<br>※給水の際は専用ボトルをご利用ください。
									</p>
									<figure><img src="<?php echo get_template_directory_uri(); ?>/shared/img/top-sec02-img06.png" alt=""></figure>
							</section>
					</section>
					<section id="top-sec03">
							<h2>Price</h2>
							<ul>
									<li class="big">
                    <div>
											<p class="ttl man">男性会員</p>
											<p class="sub">月会費</p>
											<p class="price wide">¥<span>7,128</span>(税込)</p>
                    </div>
									</li>
									<li class="big">
                    <div>
											<p class="ttl woman">女性会員</p>
											<p class="sub">月会費</p>
											<p class="price">¥<span>6,380</span>(税込)</p>
                    </div>
									</li>
									<li class="big">
                    <div>
											<p class="ttl">高校生会員</p>
											<p class="sub">月会費</p>
											<p class="price">¥<span>5,500</span>(税込)</p>
                    </div>
                    <p class="note">※高校生会員のご利用可能時間は5:00～22:00となります。※15歳の方はご入会いただけません。</p>
									</li>
									<li>
                    <div>
											<p class="sub">入会時のみ</p>
											<p class="ttl">入会登録料</p>
											<p class="price">¥<span>3,300</span>(税込)</p>
                    </div>
									</li>
									<li>
                    <div>
											<p class="sub02"><span>OPTION</span>有料オプション</p>
											<p class="ttl">契約ロッカー</p>
											<p class="price wide">¥<span>1,100</span>(税込)</p>
                      <!-- <span class="mutual-wrap">
                        <p class="mutual-title">AIトレーニングジム<br>【ピュアストレングスライト】でも<br><span class="large">相互利用できます！</span></p>
                        <p class="mutual-logo">
                          <a href="https://www.purestrength.jp/light/" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/shared/img/logo-light.svg" alt="ピュアストレングスライト"></a>
                        </p>
                      </span> -->
                    </div>
									</li>
							</ul>
							<h3 class="option-title">OPTION</h3>
							<ul>
                <li>
                  <span class="mutual-wrap">
                    <p class="mutual-title">AIトレーニングジム<br>[ピュアストレングスLight]<br><span class="large">相互利用できます！</span></p>
                    <p class="price wide">1ヶ月　¥<span>1,100</span>(税込)</p>
                    <p class="mutual-logo">
                      <a href="https://www.purestrength.jp/light/" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/shared/img/logo-light.svg" alt="ピュアストレングスライト"></a>
                    </p>
                    <p class="mutual-shopname">ピュアストレングスLight</p>
                    <p class="mutual-add">〒410-2317　静岡県伊豆の国市守木844-2</p>
                  </span>
                </li>
							</ul>
					</section>
					<section id="top-sec04">
							<h2>ご入会方法</h2>
							<p>① WEB入会フォームよりお客様情報をご登録<br><small>※店頭でのご登録も可能です。</small></p>
							<p>② 店舗へお越しいただき、入会お手続きを完了</p>
							<p>③ 入会時諸費用のお支払い後、会員証（出入口カードキー）のお渡し</p>
              <h3>《高校生会員ご希望の皆様へ》</h3>
              <p>入会手続きの際は、必ず親権者様と一緒にお越しください。</p>
							<h3>《お持ちいただく物》</h3>
							<ul>
              <li>入会登録料 + 2ヶ月分月会費<br><small>※キャンペーンにより金額が異なります。<br>※お支払い方法は①～③のみとなります。<br>①現金 ②PayPay ③LINEPay</small></li>
              <li>本人確認書類<br><small>（免許証、住所付き保険証 など）</small></li>
              <li>金融機関キャッシュカード<br><small>※高校生の方は親権者の<br>キャッシュカードでご登録いたします。</small></li>
              <li>高校在学を証明できるもの<br><small>（学生証など）<br>※高校生会員ご希望の方のみ</small></li>
							</ul>
					</section>
          <div class="top-pr">
            <p><img src="<?php echo get_template_directory_uri(); ?>/shared/img/top-pr-txt01.svg" alt="ジム活スタートキャンペーン 先着150名様限定"></p>
            <!-- <p><img src="<?php echo get_template_directory_uri(); ?>/shared/img/top-pr-txt02.svg" alt="無料見学会予約なしOK＜受付時間11：00〜20：00＞"></p> -->
            <p style="margin-top: 2.0em;">
              <a href="https://www.slim-sng.jp/slim/web/d/sng/web_admission_procedure/?c=Yb3kP5uDm7&f=00001" target="_blank" onclick="return gtag_report_conversion('https://www.slim-sng.jp/slim/web/d/sng/web_admission_procedure/?c=Yb3kP5uDm7&f=00001');"><img src="<?php echo get_template_directory_uri(); ?>/shared/img/top-pr-btn01.svg" alt="WEB入会はコチラから"></a>
            </p>
          </div>
					<section id="top-sec05">
						<h2>Faq</h2>
						<p class="lead">よくある質問にお応えいたします。</p>
            <ul>
              <?php
                $post_type = 'faq';
                $args=array(
                  'post_type' => $post_type,
                  'post_status' => 'publish',
                  'posts_per_page' => -1
                );
                $my_posts = get_posts($args);
                foreach ($my_posts as $post) {
                  setup_postdata($post);
                  $post_title = $post->post_title;
              ?>
              <li><a href="<?php the_permalink();?>"><?php the_title(); ?></a></li>
              <?php } ?>
            </ul>
					</section>
					<section id="top-access">
							<h2>Access</h2>
							<div class="col">
								<p><img src="<?php echo get_template_directory_uri(); ?>/shared/img/logo03.svg" alt="PURE STRENGTH"></p>
								<div>
									<p><img src="<?php echo get_template_directory_uri(); ?>/shared/img/logo02.svg" alt="ピュアストレングス伊豆長岡"></p>
									<p>〒410-2211<br> 静岡県伊豆の国市長岡126-5
										<br>
										<strong>TEL:<a href="tel:0559570520">055-957-0520</a><br>駐車場27台完備</strong><br>
										<small>※立体駐車場2階にお停めください。</small></p>
								</div>
							</div>
							<dl>
								<dt>お車でお越しの場合</dt>
								<dd>国道414号線から湯らっくす公園の交差点を温泉場方面へ入り、<br> ひょうたん寿司さん向かい側
								</dd>
							</dl>
							<div class="gmap">
								<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3266.978287473101!2d138.92883921524106!3d35.03227308035064!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x601993b9c5311d85%3A0x5c823789a59465f3!2z44CSNDEwLTIyMTEg6Z2Z5bKh55yM5LyK6LGG44Gu5Zu95biC6ZW35bKh77yR77yS77yW4oiS77yV!5e0!3m2!1sja!2sjp!4v1582593965808!5m2!1sja!2sjp"
										width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
							</div>
							<p class="open">24時間営業・年中無休<br> ジムスタッフ対応時間／11:00〜20:00<br>（月曜/木曜/臨時スタッフ不在日を除く）</p>
					</section>
					<!-- InstanceEndEditable -->
			</div>
	</main>

<?php get_footer(); ?>
