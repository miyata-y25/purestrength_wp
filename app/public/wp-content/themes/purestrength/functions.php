<?php
/**
 * @package Purestrength
 */

//テーマのセットアップ
// HTML5でマークアップさせる
add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption' ) );
// Feedのリンクを自動で生成する
add_theme_support( 'automatic-feed-links' );

add_filter( 'show_admin_bar', '__return_false' );

//カスタム投稿・カテゴリ設定
function create_post_type() {
    // カスタム投稿：お知らせ(ライト)
    register_post_type( 'light-info', 
    array(
        'label' => 'お知らせ(ライト)', 
        'labels' => array('all_items' => 'お知らせ一覧', ), 
        'menu_position' => 4, 
        'public' => true,
        'show_ui' => true,
        'has_archive' => true,
        'rewrite' => array('with_front' => false),
        'supports' => array('title','editor'),
        'show_in_rest' => true,
        'exclude_from_search' => true, // false 検索対象に含める
    ));
    // カスタム投稿：お知らせ(フラワー)
    register_post_type( 'flower-info', 
    array(
        'label' => 'お知らせ(フラワー)', 
        'labels' => array('all_items' => 'お知らせ一覧', ), 
        'menu_position' => 4, 
        'public' => true,
        'show_ui' => true,
        'has_archive' => true,
        'rewrite' => array('with_front' => false),
        'supports' => array('title','editor'),
        'show_in_rest' => true,
        'exclude_from_search' => true, // false 検索対象に含める
    ));
    }
    add_action( 'init', 'create_post_type' );
    
    
    // カスタム投稿パーマリンクリライト：お知らせ
    function light_info_post_type_link( $link, $post ){
      if ( $post->post_type === 'light-info' ) {
        return home_url( '/light/light-info/' . $post->ID );
      } else {
        return $link;
      }
    }
    add_filter( 'post_type_link', 'light_info_post_type_link', 1, 2 );
    function light_info_rewrite_rules_array( $rules ) {
      $new_rewrite_rules = array( 
        'light/light-info/([0-9]+)/?$' => 'index.php?post_type=light-info&p=$matches[1]',
      );
      return $new_rewrite_rules + $rules;
    }
    add_filter( 'rewrite_rules_array', 'light_info_rewrite_rules_array' );

// カスタム投稿パーマリンクリライト：お知らせ
function flower_info_post_type_link( $link, $post ){
  if ( $post->post_type === 'flower-info' ) {
    return home_url( '/flower/flower-info/' . $post->ID );
  } else {
    return $link;
  }
}
add_filter( 'post_type_link', 'flower_info_post_type_link', 1, 2 );
function flower_info_rewrite_rules_array( $rules ) {
  $new_rewrite_rules = array( 
    'flower/flower-info/([0-9]+)/?$' => 'index.php?post_type=flower-info&p=$matches[1]',
  );
  return $new_rewrite_rules + $rules;
}
add_filter( 'rewrite_rules_array', 'flower_info_rewrite_rules_array' );
