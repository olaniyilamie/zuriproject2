<?php
/**
 * Archive options
 *
 * @package Theme Palace
 * @subpackage Boost Biz
 * @since Boost Biz 1.0.0
 */

// Add archive section
$wp_customize->add_section( 'boost_biz_archive_section', array(
	'title'             => esc_html__( 'Blog/Archive','boost-biz' ),
	'description'       => esc_html__( 'Archive section options.', 'boost-biz' ),
	'panel'             => 'boost_biz_theme_options_panel',
) );

// Your latest posts title setting and control.
$wp_customize->add_setting( 'boost_biz_theme_options[your_latest_posts_title]', array(
	'default'           => $options['your_latest_posts_title'],
	'sanitize_callback' => 'sanitize_text_field',
) );

$wp_customize->add_control( 'boost_biz_theme_options[your_latest_posts_title]', array(
	'label'             => esc_html__( 'Your Latest Posts Title', 'boost-biz' ),
	'description'       => esc_html__( 'This option only works if Static Front Page is set to "Your latest posts."', 'boost-biz' ),
	'section'           => 'boost_biz_archive_section',
	'type'				=> 'text',
	'active_callback'   => 'boost_biz_is_latest_posts'
) );

// Archive date meta setting and control.
$wp_customize->add_setting( 'boost_biz_theme_options[hide_date]', array(
	'default'           => $options['hide_date'],
	'sanitize_callback' => 'boost_biz_sanitize_switch_control',
) );

$wp_customize->add_control( new Boost_Biz_Switch_Control( $wp_customize, 'boost_biz_theme_options[hide_date]', array(
	'label'             => esc_html__( 'Hide Date', 'boost-biz' ),
	'section'           => 'boost_biz_archive_section',
	'on_off_label' 		=> boost_biz_hide_options(),
) ) );

// Archive author category setting and control.
$wp_customize->add_setting( 'boost_biz_theme_options[hide_category]', array(
	'default'           => $options['hide_category'],
	'sanitize_callback' => 'boost_biz_sanitize_switch_control',
) );

$wp_customize->add_control( new Boost_Biz_Switch_Control( $wp_customize, 'boost_biz_theme_options[hide_category]', array(
	'label'             => esc_html__( 'Hide Category', 'boost-biz' ),
	'section'           => 'boost_biz_archive_section',
	'on_off_label' 		=> boost_biz_hide_options(),
) ) );
