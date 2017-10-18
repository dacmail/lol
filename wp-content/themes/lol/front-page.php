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
            <h3 class="services__tabs-content__tab__name"><?php the_sub_field('service_title'); ?></h3>
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



<?php $ekids = get_field('kids_content'); ?>
<?php if ($ekids): ?>
  <section class="ekids" id="esportskids">
    <div class="ekids__wrapper">
      <?php $ekids_image = get_field('ekids_image') ?>
      <div class="ekids__title">
        <?php if ($ekids_image): ?>
          <?php echo wp_get_attachment_image($ekids_image, 'big'); ?>
        <?php else: ?>
          <h2 class="sec-title"><?php esc_html_e('eSportsKids', 'ungrynerd'); ?></h2>
        <?php endif ?>
      </div>
      <div class="ekids__content">
        <?php echo $ekids; ?>
      </div>
    </div>
  </section>
<?php endif ?>


<?php if (have_rows('members')) : ?>
  <section class="section team" id="equipo">
    <div class="container">
      <h2 class="sec-title"><?php esc_html_e('Equipo', 'ungrynerd'); ?></h2>
      <div class="team__wrapper">
        <?php while (have_rows('members')): the_row(); ?>
          <article class="team__member">
            <?php echo wp_get_attachment_image(get_sub_field('member_photo'), 'big') ?>
            <h3 class="team__member__name"><?php the_sub_field('member_name'); ?></h3>
            <h3 class="team__member__position"><?php the_sub_field('member_position'); ?></h3>
            <a href="mailto:<?php echo esc_url(get_sub_field('member_mail')); ?>" class="team__member__email"><?php the_sub_field('member_mail'); ?></a>
            <div class="team__member__bio">
              <div class="team__member__social">
                <a target="_blank" href="<?php echo esc_url(get_sub_field('member_twitter')); ?>"><?php echo Extras\ungrynerd_svg('icon-twitter'); ?></a>
                <a target="_blank" href="<?php echo esc_url(get_sub_field('member_facebook')); ?>"><?php echo Extras\ungrynerd_svg('icon-facebook'); ?></a>
              </div>
              <?php the_sub_field('member_bio') ?>
              <a href="#" class="open-close-bio">+</a>
            </div>
          </article>
        <?php endwhile; ?>
        <?php if (have_rows('collaborators')) : ?>
          <ul class="team__collaborators">
            <li class="team__collaborators__item">
              <strong><?php esc_html_e('COLABORADORES', 'ungrynerd'); ?></strong>
            </li>
            <?php while (have_rows('collaborators')): the_row(); ?>
              <li class="team__collaborators__item">
                <strong><?php the_sub_field('collaborator_name'); ?></strong>
                <?php the_sub_field('collaborator_position'); ?>
              </li>
            <?php endwhile; ?>
          </ul>
        <?php endif; ?>
      </div>
    </div>
  </section>
<?php endif; ?>


<?php $contactform = get_field('contact_form'); ?>
<?php if ($contactform): ?>
  <section class="section contact" id="contacto">
    <div class="container">
      <h2 class="sec-title"><?php esc_html_e('Contacto', 'ungrynerd'); ?></h2>
      <div class="contact__wrapper">
        <div class="contact__text">
          <?php the_field('contact_text') ?>
        </div>
        <div class="contact__form">
          <?php echo do_shortcode($contactform); ?>
        </div>
      </div>
    </div>
  </section>

<?php endif ?>
