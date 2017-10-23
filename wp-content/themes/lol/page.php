<article class="single-page container">
  <?php while (have_posts()) : the_post(); ?>
    <span class="single-page__title"><?php the_title(); ?></span>
    <div class="single-page__content"><?php the_content(); ?></div>
  <?php endwhile; ?>
</article>
