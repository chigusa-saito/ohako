<?php

// サムネイルの表示
add_theme_support( 'post-thumbnails' );


// カスタムフィールド





add_action('init', 'create_post_type');
function create_post_type()
{
    //投稿時に使用できる投稿用のパーツを指定
    $supports = array(
        'title', //タイトルフォーム
        'editor', //エディター(内容の編集)
        'thumbnail', //アイキャッチ画像
        'author', //投稿者
        'excerpt', //抜粋
        'revisions', //リビジョンを保存
    );
    register_post_type(
        'sample', // 投稿タイプ名の定義
        [
        'labels' => [
            'name' => 'サンプル投稿', // 管理画面上で表示する投稿タイプ名
        ],
        'public'        => true,  // カスタム投稿タイプの表示(trueにする)
        'has_archive'   => true, // カスタム投稿一覧(true:表示/false:非表示)
        'menu_position' => 5,     // 管理画面上での表示位置
        'show_in_rest'  => false,  // true:「Gutenberg」/ false:「ClassicEditor」
        'supports' => $supports
        ]
    );
}




add_action('admin_menu', 'create_custom_fields');
function create_custom_fields()
{
    add_meta_box(
        'sample_setting', //編集画面セクションID
        'サンプルカスタムフィールド', //編集画面セクションのタイトル
        'insert_custom_fields', //編集画面セクションにHTML出力する関数
        'page', //投稿タイプ名
        'normal' //編集画面セクションが表示される部分
    );
}

function insert_custom_fields()
{
    global $post;
    $sample = get_post_meta($post->ID, 'sample', true); ?>

<form method="post" action="admin.php?page=site_settings">
    <label for="sample">サンプルフォーム：</label>
    <input id="sample" type="text" name="sample" value="<?php echo $sample ?>">
</form>

<?php
}
add_action('save_post', 'save_custom_fields');
function save_custom_fields($post_id)
{
    if (isset($_POST['sample'])) {
        update_post_meta($post_id, 'sample', $_POST['sample']);
    }
}
