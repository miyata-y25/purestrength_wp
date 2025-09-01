<?php get_header(); ?>
<main>
  <div id="content"><!-- InstanceBeginEditable name="content" -->
    <div id="pttl">
      <h1><?php the_title(); ?></h1>
    </div>
  <div id="info-sec01">
  <ul id="info-list">
    <?php
      global $post;
      $args = array( 'posts_per_page' => 10 );
      $myposts = get_posts( $args );
      foreach( $myposts as $post ) {
        setup_postdata($post);
      ?>
      <li>
        <time>><?php the_time('Y.m.d'); ?></time>
        <span>
          <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
        </span>
      </li>
      <?php
      }
      wp_reset_postdata();
    ?>
    </ul>


    <div id="info-pager" role="navigation">
      <?php
        $paged = (int) get_query_var('paged');
        $args = array(
          'paged' => $paged,			//ページネーション用
          'post_type' => 'post',		//投稿タイプ（記事ループと条件にする）
          'posts_per_page' => 10,		//表示投稿数（記事ループと条件にする）
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
    </div><!-- pagination -->
  </div>
  <!-- InstanceEndEditable --></div>
</main>

<?php get_footer(); ?>