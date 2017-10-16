<header class="header" style="background-image: url(<?php echo header_image(); ?>)" >
  <nav class="menu nav-primary">
    <div class="container">
      <div class="navbar justify-content-between">
        <?php if (has_custom_logo()): ?>
          <?php the_custom_logo(); ?>
        <?php else: ?>
          <a class="header__site-name" href="<?= esc_url(home_url('/')); ?>">
            <?php bloginfo('name'); ?>
          </a>
        <?php endif ?>
        <button class="navbar-toggler collapsed navbar-toggler-right" type="button" data-toggle="collapse" data-target="#primary-nav" aria-controls="primary-nav" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon">
            Menú
          </span>
        </button>
        <?php
        if (has_nav_menu('primary_navigation')) :
          wp_nav_menu([
            'theme_location' => 'primary_navigation',
            'menu_class' => 'nav navbar-nav ml-auto',
            'container_id' => 'primary-nav',
            'container_class' => 'collapse navbar-collapse navbar-right'
          ]);
        endif;
        ?>
      </div>
    </div>
  </nav>
  <section class="intro">
    <div class="intro__wrapper">
      <h3 class="intro__title"><?php the_field('intro_text'); ?></h3>
      <div class="intro__image">
        <?php echo wp_get_attachment_image(get_field('intro_image'), 'big'); ?>
        <?php $link = get_field('intro_button'); ?>
        <?php if ($link) : ?>
          <a href="<?php echo $link['url']; ?>" target="<?php echo $link['target']; ?>" class="btn btn-primary"><?php echo $link['title']; ?></a>
        <?php endif; ?>
      </div>
    </div>
  </section>
</header>
