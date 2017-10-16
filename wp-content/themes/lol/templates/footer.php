<?php use Roots\Sage\Extras; ?>
<footer class="footer container">
  <div class="footer__wrap">
    <?php $logo_footer = get_theme_mod('ungrynerd_footer'); ?>
    <?php if ($logo_footer): ?>
      <img class="footer__logo" src="<?php echo esc_url($logo_footer); ?>" alt="<?php bloginfo('name'); ?>">
    <?php else: ?>
      <a class="footer__site-name" href="<?= esc_url(home_url('/')); ?>">
        <?php bloginfo('name'); ?>
      </a>
    <?php endif ?>
    <?php
    if (has_nav_menu('footer_navigation')) :
      wp_nav_menu([
        'theme_location' => 'primary_navigation',
        'menu_class' => 'footer__nav__wrapper',
        'container_id' => '',
        'container_class' => 'footer__nav',
        'items_wrap' => '<ul id="%1$s" class="%2$s">
                          %3$s
                          <li class="menu-item icon"><a href="#twitter" target="_blank">' . Extras\ungrynerd_svg('icon-twitter') . '</a></li>
                          <li class="menu-item icon"><a href="#facebook" target="_blank">' . Extras\ungrynerd_svg('icon-facebook') . '</a></li>
                          <li class="menu-item icon"><a href="#youtube" target="_blank">' . Extras\ungrynerd_svg('icon-youtube') . '</a></li>
                          <li class="menu-item icon"><a href="#linkedin" target="_blank">' . Extras\ungrynerd_svg('icon-linkedin') . '</a></li>
                        </ul>'
      ]);
    endif;
    ?>
  </div>
  <div class="footer__wrap">
    <p class="footer__copy">&copy; League Of Lawyers 2017</p>
    <a href="http://ungrynerd.com" target="_blank" class="footer__by">Hecho por <strong>UNGRYNERD</strong></a>
  </div>
</footer>
