<?php get_header('flower'); ?>

<link rel='stylesheet' id='wp-block-library-css' href='/wp-includes/css/dist/block-library/style.min.css' type='text/css' media='all' />

<section class="sec-single">
    <h2 class="sec-single__ttl">
        <span class="sec-single__ttl__en"><?php the_title(); ?></span>
    </h2>
    <div class="single-area">
        <p class="single-area__date"><?php the_time('Y.m.d'); ?></p>
<?php the_content(); ?>
    </div>
    <a href="<?php echo home_url('/'); ?>flower/flower-info/" class="btn btn--oraW btn--312">一覧に戻る</a>
</section>

<?php get_footer('flower'); ?>