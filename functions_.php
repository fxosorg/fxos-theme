<?php

//イベントのカスタムポストタイプ
add_action('init', 'event_init');
function event_init()
{
  $labels = array(
    'name' => _x('イベント', 'post type general name'),
    'singular_name' => _x('イベント一覧', 'post type singular name'),
    'add_new' => _x('新しいイベントを追加', 'activity'),
    'add_new_item' => __('イベントの新規記事を書く'),
    'edit_item' => __('イベントの記事を編集'),
    'new_item' => __('イベントの新規記事'),
    'view_item' => __('イベントの記事を見る'),
    'search_items' => __('イベントの記事を探す'),
    'not_found' =>  __('イベントの記事はありません'),
    'not_found_in_trash' => __('ゴミ箱にイベントの記事はありません'),
    'parent_item_colon' => ''
  );
  $args = array(
    'labels' => $labels,
    'public' => true,
    'publicly_queryable' => true,
    'show_ui' => true,
    'query_var' => true,
    'rewrite' => true,
    'capability_type' => 'post',
    'hierarchical' => false,
    'menu_position' => 5,
    'supports' => array('title','editor','thumbnail','custom-fields','excerpt','author','trackbacks','comments','revisions','page-attributes'),
    'has_archive' => true
  );
  register_post_type('event',$args);
}


//カスタム分類
add_action('init', 'create_custom_taxonomies', 0);
function create_custom_taxonomies() {  
    register_taxonomy(
        'now', // 内部的な分類名
        'event',  // 適用する投稿タイプ
        array(
            'label' => '開催中かどうか',    // 表向きの分類名
            'hierarchical' => true, // 階層構造
            'query_var' => true,
            'rewrite' => true
        )
    );
}
?>