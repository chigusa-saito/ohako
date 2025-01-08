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

