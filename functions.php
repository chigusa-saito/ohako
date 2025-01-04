<?php

// サムネイルの表示
add_theme_support( 'post-thumbnails' );


// カスタムフィールド




// カスタムフィールド：TOPページ
//カスタムフィールドのメタボックス
function add_custom_fields(){
  $post_id = '';
  if(isset($_GET['post']) || isset($_POST['post_ID'])) {
    $post_id = $_GET['post'] ? $_GET['post'] : $_POST['post_ID'] ;
  }
  if ($post_id == get_page_id('top')){
   add_meta_box(
      'custom_field_01', //セクションのID
      'テキスト', //セクションのタイトル
      'insert_custom_fields', //フォーム部分を指定する関数
      'page', //投稿タイプの場合は「post」、カスタム投稿タイプの場合は「スラッグ名」、固定ページの場合は「page」
      'normal', //セクションの表示場所
      'high'  //優先度
    );
  }
}
add_action('admin_menu', 'add_custom_fields');
//ページIDを取得する関数の定義
function get_page_id($post_name)
{
  global $wpdb;
  $id = $wpdb->get_var("SELECT ID FROM $wpdb->posts WHERE post_name = '".$post_name."'");
  return esc_html($id);
}
//カスタムフィールドの入力エリア
function insert_custom_fields() {
  global $post;
  //nounceフィールドの追加
  wp_nonce_field('custom_field_save_meta_box_data', 'custom_field_meta_box_nonce');
echo '
<table class="custom-fields">
  <tr>
    <td>キャッチコピー</td>
    <td><textarea name="catchcopy" cols="60" rows="5" value="'.get_post_meta($post->ID, 'catchcopy', true).'" size="50"></textarea></td>
  </tr>

</table>
';
}
//カスタムフィールドの値を保存
function save_custom_fields( $post_id ){
  //nonceがセットされているか確認
  if (!isset($_POST['custom_field_meta_box_nonce'])) {
   return;
  }
 //nounceが正しいか検証
   if (!wp_verify_nonce($_POST['custom_field_meta_box_nonce'], 'custom_field_save_meta_box_data')) {
    return;
   }
  if (isset($_POST['catchcopy'])) { $data = sanitize_text_field($_POST['catchcopy']); update_post_meta($post_id, 'catchcopy', $data); }

}
add_action('save_post', 'save_custom_fields');



// カスタムフィールド：ABOUTページ
//カスタムフィールドのメタボックス
function add_custom_fields02(){
  $post_id = '';
  if(isset($_GET['post']) || isset($_POST['post_ID'])) {
    $post_id = $_GET['post'] ? $_GET['post'] : $_POST['post_ID'] ;
  }
  if ($post_id == get_page_id02('about')){
   add_meta_box(
      'custom_field_02', //セクションのID
      'テキスト', //セクションのタイトル
      'insert_custom_fields02', //フォーム部分を指定する関数
      'page', //投稿タイプの場合は「post」、カスタム投稿タイプの場合は「スラッグ名」、固定ページの場合は「page」
      'normal', //セクションの表示場所
      'high'  //優先度
    );
  }
}
add_action('admin_menu', 'add_custom_fields02');
//ページIDを取得する関数の定義
function get_page_id02($post_name)
{
  global $wpdb;
  $id = $wpdb->get_var("SELECT ID FROM $wpdb->posts WHERE post_name = '".$post_name."'");
  return esc_html($id);
}
//カスタムフィールドの入力エリア
function insert_custom_fields02() {
  global $post;
  //nounceフィールドの追加
  wp_nonce_field('custom_field_save_meta_box_data', 'custom_field_meta_box_nonce02');
echo '
<table class="custom-fields">
  <tr>
    <td>サブタイトル</td>
    <td><input type="text" name="subtitle" value="'.get_post_meta($post->ID, 'subtitle', true).'" size="50" /></td>
  </tr>
  <tr>
    <td>本文</td>
    <td><input type="text" name="bodytext" value="'.get_post_meta($post->ID, 'bodytext', true).'" size="50" /></td>
  </tr>

</table>
';
}
//カスタムフィールドの値を保存
function save_custom_fields02( $post_id ){
  //nonceがセットされているか確認
  if (!isset($_POST['custom_field_meta_box_nonce02'])) {
   return;
  }
 //nounceが正しいか検証
   if (!wp_verify_nonce($_POST['custom_field_meta_box_nonce02'], 'custom_field_save_meta_box_data')) {
    return;
   }
  if (isset($_POST['subtitle'])) { $data = sanitize_text_field($_POST['subtitle']); update_post_meta($post_id, 'subtitle', $data); }
  if (isset($_POST['bodytext'])) { $data = sanitize_text_field($_POST['bodytext']); update_post_meta($post_id, 'bodytext', $data); }

}
add_action('save_post', 'save_custom_fields02');



// カスタムフィールド：INFORMATIONページ
//カスタムフィールドのメタボックス
function add_custom_fields03(){
  $post_id = '';
  if(isset($_GET['post']) || isset($_POST['post_ID'])) {
    $post_id = $_GET['post'] ? $_GET['post'] : $_POST['post_ID'] ;
  }
  if ($post_id == get_page_id03('information')){
   add_meta_box(
      'custom_field_03', //セクションのID
      'テキスト', //セクションのタイトル
      'insert_custom_fields03', //フォーム部分を指定する関数
      'page', //投稿タイプの場合は「post」、カスタム投稿タイプの場合は「スラッグ名」、固定ページの場合は「page」
      'normal', //セクションの表示場所
      'high'  //優先度
    );
  }
}
add_action('admin_menu', 'add_custom_fields03');
//ページIDを取得する関数の定義
function get_page_id03($post_name)
{
  global $wpdb;
  $id = $wpdb->get_var("SELECT ID FROM $wpdb->posts WHERE post_name = '".$post_name."'");
  return esc_html($id);
}
//カスタムフィールドの入力エリア
function insert_custom_fields03() {
  global $post;
  //nounceフィールドの追加
  wp_nonce_field('custom_field_save_meta_box_data', 'custom_field_meta_box_nonce03');
echo '
<table class="custom-fields">
  <tr>
    <td>オハコヤ</td>
    <td><input type="text" name="bodytext1" value="'.get_post_meta($post->ID, 'bodytext1', true).'" size="50" /></td>
  </tr>
  <tr>
    <td>オハコ デッキ</td>
    <td><input type="text" name="bodytext2" value="'.get_post_meta($post->ID, 'bodytext2', true).'" size="50" /></td>
  </tr>
  <tr>
    <td>オハコ ヤード</td>
    <td><input type="text" name="bodytext3" value="'.get_post_meta($post->ID, 'bodytext3', true).'" size="50" /></td>
  </tr>

</table>
';
}
//カスタムフィールドの値を保存
function save_custom_fields03( $post_id ){
  //nonceがセットされているか確認
  if (!isset($_POST['custom_field_meta_box_nonce03'])) {
   return;
  }
 //nounceが正しいか検証
   if (!wp_verify_nonce($_POST['custom_field_meta_box_nonce03'], 'custom_field_save_meta_box_data')) {
    return;
   }
  if (isset($_POST['bodytext1'])) { $data = sanitize_text_field($_POST['bodytext1']); update_post_meta($post_id, 'bodytext1', $data); }
  if (isset($_POST['bodytext2'])) { $data = sanitize_text_field($_POST['bodytext2']); update_post_meta($post_id, 'bodytext2', $data); }
  if (isset($_POST['bodytext3'])) { $data = sanitize_text_field($_POST['bodytext3']); update_post_meta($post_id, 'bodytext3', $data); }

}
add_action('save_post', 'save_custom_fields03');
