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


// 画像のカスタムフィールド

function add_custom_fields_i01() {
  add_meta_box(
  'posttype_setting', //編集画面セクションのHTML ID
  '画像', //編集画面セクションのタイトル、画面上に表示される
  'insert_custom_fields_i01', //編集画面セクションにHTML出力する関数
  'page', //投稿タイプ名
  'normal' //編集画面セクションが表示される部分
  );
  }
  add_action( 'admin_menu', 'add_custom_fields_i01' );
  //画像をアップする時は下記の記述が必要。
  function custom_metabox_edit_form_tag() {
  echo ' enctype="multipart/form-data"';
  }
  add_action( 'post_edit_form_tag', 'custom_metabox_edit_form_tag' );
  // カスタムフィールドの入力エリア
  function insert_custom_fields_i01() {
  global $post;
  $custom_img = get_post_meta( $post_id, 'custom_img', true );
  echo '
  <table class="custom-fields">
  <tr>
    <td>場所</td>
    <td><input type="file" style="width:100%;" name="custom_img" accept="image/*" /><br>';
  if ( isset( $custom_img ) && strlen( $custom_img ) > 0 ) {
  echo '<img style="width: 200px;display: block;margin: 1em;" src="' . wp_get_attachment_url( $custom_img ) . '"></td>
  </tr>
</table>
  ';
  }
  }
  //カスタムフィールドの値を保存
  function save_slider_fields( $post_id ) {
  if ( isset( $_FILES[ 'custom_img' ] ) && $_FILES[ "custom_img" ][ "size" ] !== 0 ) {
  $file_name = basename( $_FILES[ 'custom_img' ][ 'name' ] );
  $file_name = trim( $file_name );
  $file_name = str_replace( " ", "-", $file_name );
  $wp_upload_dir = wp_upload_dir(); //現在のuploadディクレトリのパスとURLを入れた配列
  $upload_file = $_FILES[ 'custom_img' ][ 'tmp_name' ];
  $upload_path = $wp_upload_dir[ 'path' ] . '/' . $file_name; //uploadsディレクトリ以下などに配置する場合は$wp_upload_dir['basedir']を利用する
  //画像ファイルをuploadディクレトリに移動させる
  move_uploaded_file( $upload_file, $upload_path );
  $file_type = $_FILES[ 'custom_img' ][ 'type' ];
  //正規表現で拡張子なしのスラッグ名を生成
  $slug_name = preg_replace( '/\.[^.]+$/', '', basename( $upload_path ) );
  if ( file_exists( $upload_path ) ) {
  //保存に成功してファイルが存在する場合は、wp_postsテーブルなどに情報を追加
  $attachment = array(
  'guid' => $wp_upload_dir[ 'url' ] . '/' . basename( $file_name ),
  'post_mime_type' => $file_type,
  //'post_title' => $slug_name,
  'post_content' => '',
  'post_status' => 'inherit'
  );
  //添付ファイルを追加
  $attach_id = wp_insert_attachment( $attachment, $upload_path, $post_id );
  if ( !function_exists( 'wp_generate_attachment_metadata' ) ) {
  require_once( ABSPATH . "wp-admin" . '/includes/image.php' );
  }
  //添付ファイルのメタデータを生成し、wp_postsテーブルに情報を保存
  $attach_data = wp_generate_attachment_metadata( $attach_id, $upload_path );
  wp_update_attachment_metadata( $attach_id, $attach_data );
  //wp_postmetaテーブルに画像のattachment_id(wp_postsテーブルのレコードのID)を保存
  update_post_meta( $post_id, 'custom_img', $attach_id );
  } else {
  //保存失敗
  echo '画像保存に失敗しました';
  exit;
  }
  }
  }
  add_action( 'save_post', 'save_slider_fields' );
  
  