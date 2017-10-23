<?php

namespace Roots\Sage\Customizer;

use Roots\Sage\Assets;

/**
 * Add postMessage support
 */
function customize_register($wp_customize) {
  $wp_customize->add_section( 'ungrynerd_footer_section' , array(
    'title'       => __( 'Footer', 'ungrynerd' ),
    'priority'    => 60,
  ) );

  $wp_customize->add_setting( 'ungrynerd_footer', array(
    'sanitize_callback' => 'esc_url_raw',
  ) );

  $wp_customize->add_setting( 'alt_logo', array(
    'sanitize_callback' => 'esc_url_raw',
  ) );

  $wp_customize->add_control( new \WP_Customize_Image_Control( $wp_customize, 'ungrynerd_footer_logo', array(
    'label'    => __( 'Logo', 'ungrynerd' ),
    'section'  => 'ungrynerd_footer_section',
    'settings' => 'ungrynerd_footer',
  ) ) );

  $wp_customize->add_control( new \WP_Customize_Image_Control( $wp_customize, 'ungrynerd_alt_logo', array(
    'label'    => __( 'Logo alternativo', 'ungrynerd' ),
    'section'  => 'title_tagline',
    'settings' => 'alt_logo',
  ) ) );

  $wp_customize->get_setting('blogname')->transport = 'postMessage';
}
add_action('customize_register', __NAMESPACE__ . '\\customize_register');

/**
 * Customizer JS
 */
function customize_preview_js() {
  wp_enqueue_script('sage/customizer', Assets\asset_path('scripts/customizer.js'), ['customize-preview'], null, true);
}
add_action('customize_preview_init', __NAMESPACE__ . '\\customize_preview_js');

