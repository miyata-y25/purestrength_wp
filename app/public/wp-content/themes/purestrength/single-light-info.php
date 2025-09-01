<?php 
/**
 * @package Purestrength
 */
get_header('light'); 
?>

<main id="l-main">
  <section class="taC" id="info">
    <h3 class="fwMed"><?php echo get_the_title(); ?></h3>
    <?php the_content(); ?>
  </section>
  　<p class="taC"><a href="<?php echo esc_url(home_url()); ?>/contact/"><img src="<?php echo esc_url(home_url()); ?>/shared/light/img/inquiry.png" alt="お問い合わせはこちら" loading="lazy"></a></p>
</main>

<?php get_footer('light'); ?>