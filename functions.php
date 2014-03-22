<?php
if ( function_exists('register_sidebar') )
    register_sidebar(array(
        'before_widget' => '',
        'after_widget' => '',
        'before_title' => '<h2 class="widget_title">',
        'after_title' => '</h2>',
    ));
  // This theme uses wp_nav_menu() in one location.
  register_nav_menus( array(
    'headermenu' => __( 'Header Navigation', 'ヘッダーナビゲーション' ),
    'submenu' => __( 'Sub Navigation', 'サブナビゲーション' ),
    'footermenu' => __( 'Footer Navigation', 'フッターナビ' ),
    'bottomlinks' => __( 'Bottom Links', 'お知らせ的な' )
  ) );
/* アイキャッチ画像 */
add_theme_support( 'post-thumbnails' );

?>