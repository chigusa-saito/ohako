<?php

// サムネイルの表示
add_theme_support( 'post-thumbnails' );


// カスタムフィールド





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
    <td><input type="text" name="catchcopy" value="'.get_post_meta($post->ID, 'catchcopy', true).'" size="50" /></td>
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
