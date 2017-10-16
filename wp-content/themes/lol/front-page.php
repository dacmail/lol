<?php use Roots\Sage\Extras; ?>

<?php if (have_rows('services')) : ?>
<section class="section services" id="servicios">
  <div class="container">
    <h2 class="sec-title"><?php esc_html_e('Servicios', 'ungrynerd'); ?></h2>

    <ul class="services__tabs">
      <?php while (have_rows('services')): the_row(); ?>
          <li class="services__tabs__tab">
            <a href="#<?php echo sanitize_title(get_sub_field('service_title')) ?>">
              <?php echo wp_get_attachment_image(get_sub_field('service_icon'), 'big') ?>
              <?php the_sub_field('service_title'); ?>
            </a>
          </li>
      <?php endwhile; ?>
    </ul>
    <div class="services__tabs-content">
      <?php while (have_rows('services')): the_row(); ?>
          <article class="services__tabs-content__tab" id="<?php echo sanitize_title(get_sub_field('service_title')) ?>">
            <?php echo wp_get_attachment_image(get_sub_field('service_icon'), 'big') ?>
            <div class="services__tabs-content__tab__content">
              <?php the_sub_field('service_content'); ?>
            </div>
            <a href="#" class="close-btn">&times;</a>
          </article>
      <?php endwhile; ?>
    </div>
  </div>
</section>
<?php endif; ?>
