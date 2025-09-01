<?php get_header(); ?>

<main>
  <div id="content">
    <div id="pttl">
      <h1>よくあるご質問</h1>
    </div>
    <div id="info-detail-sec01">
      <h2><?php the_title(); ?></h2>
      <!-- time><?php the_time('Y.m.d'); ?></time -->
      <div class="info-detail-area">
        <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
          <?php the_content(); ?>
        <?php endwhile; else: ?>
        <?php endif; ?>
      </div>
      <p id="info-btn">
        <a href="<?php echo home_url(); ?>#top-sec05">
          <img src="<?php echo get_template_directory_uri(); ?>/shared/img/back-btn.svg" alt="一覧に戻る">
        </a>
      </p>
    </div>
  </div>
</main>



<?php get_footer(); ?>