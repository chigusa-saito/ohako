<?php

// サムネイルの表示
add_theme_support( 'post-thumbnails' );


// カスタムフィールド
// プライバシーポリシーで使用する

function get_privacypolicy() {
  $page_obj = get_page_by_path( 'contact' );
  $page_id = $page_obj->ID;
  $privacypolicy = get_field('privacypolicy',$page_id);
  return $privacypolicy;
}
add_shortcode('show_privacypolicy', 'get_privacypolicy');
wpcf7_add_shortcode('show_privacypolicy','get_privacypolicy'); 

// meta name="generator" を非表示にする
remove_action('wp_head', 'wp_generator');

// acfからpを抜いてbrを入れる
function the_field_without_wpautop( $field_name ) {
 
  remove_filter('acf_the_content', 'wpautop');
  add_filter( 'acf_the_content', 'nl2br' );
  the_field( $field_name );
  add_filter('acf_the_content', 'wpautop');
}

function the_subfield_without_wpautop( $field_name ) {

  remove_filter('acf_the_content', 'wpautop');
  add_filter( 'acf_the_content', 'nl2br' );
  the_sub_field( $field_name );
  add_filter('acf_the_content', 'wpautop');
}
