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
      '店舗住所', //セクションのタイトル
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
  <tr class="border-top border-bottom">
     <th scope="row">
       <label for="shop_a">店舗A</label>
     </th>
     <td> 
       <input type="text" id="shop_a" name="shop_a" value="'.get_post_meta($post_id, 'shop_a', true).'" />
     </td>
   </tr>
   <tr class="border-bottom">
      <th scope="row">
        <label for="shop_b">店舗B</label>
      </th>
      <td> 
        <input type="text" id="shop_b" name="shop_b" value="'.get_post_meta($post_id, 'shop_b', true).'" />
      </td>
   </tr>
   <tr class="border-bottom">
   <th scope="row">
     <label for="shop_c">店舗C</label>
   </th>
   <td> 
     <input type="text" id="shop_c" name="shop_c" value="'.get_post_meta($post_id, 'shop_c', true).'" />
   </td>
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
  $key = 'shop_a'; if(!empty($_POST[$key])){update_post_meta($post_id,'$key',$_POST[$key]);}else{delete_post_meta($post_id,'$key');}
  $key = 'shop_b'; if(!empty($_POST[$key])){update_post_meta($post_id,'$key',$_POST[$key]);}else{delete_post_meta($post_id,'$key');}
  $key = 'shop_c'; if(!empty($_POST[$key])){update_post_meta($post_id,'$key',$_POST[$key]);}else{delete_post_meta($post_id,'$key');}
}
add_action('save_post', 'save_custom_fields');
