<?php get_header('flower'); ?>

<section class="news-sec --page">
    <h2 class="news-sec__ttl anim slideinB">INFORMATION</h2>
    <ul class="news-list anim slideinB">
        <?php
            $args = array(
                'paged' => $paged,			//ページネーション用
                'post_type' => 'flower-info', // 投稿タイプのスラッグを指定
                'posts_per_page' => 10 // 投稿件数の指定
            );
            $info_query = new WP_Query($args); 
            if($info_query->have_posts()):
        ?>
        <?php while ($info_query->have_posts()): $info_query->the_post(); ?>
        <li><time datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('Y.m.d'); ?></time><a href="<?php the_permalink(); ?>"><?php echo get_the_title(); ?></a></li>
        <?php endwhile; ?>
        <?php wp_reset_postdata(); ?>
        <?php endif; ?>
    </ul>
    <?php
        if(function_exists('wp_pagenavi')) {
            wp_pagenavi(array('query' => $info_query));
        }
    ?>
    <p class="news-more anim slideinB"><a href="<?php echo home_url('/'); ?>flower/">TOPへ戻る</a></p>
</section>

<?php get_footer('flower'); ?>