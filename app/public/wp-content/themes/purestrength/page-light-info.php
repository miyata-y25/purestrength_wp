<?php 
/**
 * @package Purestrength
 */
get_header('light'); 
?>

<main id="l-main">
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

   <div id="info-pager" role="navigation">
      <?php
        $paged = (int) get_query_var('paged');
        $args = array(
          'paged' => $paged,			//ページネーション用
          'post_type' => 'light-info',		//投稿タイプ（記事ループと条件にする）
          'posts_per_page' => 5,		//表示投稿数（記事ループと条件にする）
          'orderby' => 'post_date',	//表示順条件（記事ループと条件にする）
          'order' => 'DESC',			//降順（記事ループと条件にする）
          'post_status' => 'publish'	//公開済みのみ表示（記事ループと条件にする）
        );
        $the_query = new WP_Query($args);
        if ( $the_query->have_posts() ) :
          while ( $the_query->have_posts() ) : $the_query->the_post();
            get_template_part( 'content', get_post_format() );
          endwhile;
        else:
          get_template_part( 'content', 'none' );
        endif;
        if ($the_query->max_num_pages > 0) {
          echo paginate_links(array(
            'base' => get_pagenum_link(1) . '%_%',
            'format' => 'page/%#%/',
            'current' => max(1, $paged),
            'total' => $the_query->max_num_pages,
            'prev_text' => '«',
            'next_text' => '»',
          ));
        }
        wp_reset_postdata();
      ?>
    </div>
  </section>

  <p class="taC"><a href="https://www.purestrength.jp/contact/"><img src="<?php echo esc_url(home_url()); ?>/shared/light/img/inquiry.png" alt="お問い合わせはこちら" loading="lazy"></a>
  </p>

</main>

<?php get_footer('light'); ?>