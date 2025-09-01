<?php get_header(); ?>

<main>
  <div id="content"><!-- InstanceBeginEditable name="content" -->
    <div id="pttl">
      <h1><?php the_title(); ?></h1>
    </div>
    <div class="page-content">
      <article class="page-article">
        <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
          <?php the_content(); ?>
        <?php endwhile; else: ?>
        <?php endif; ?>
      </article>
    </div>
  </div>
</main>

<?php get_footer(); ?>