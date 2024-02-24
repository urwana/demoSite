<?php
function my_setup()
{
    add_theme_support('post-thumbnails'); // アイキャッチ画像を有効化
    add_theme_support('automatic-feed-links'); // 投稿とコメントのRSSフィードのリンクを有効化
    add_theme_support('title-tag'); // titleタグ自動生成
    add_theme_support('html5', array( // HTML5による出力
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
    ));
}
add_action('after_setup_theme', 'my_setup');

/* CSSとJavaScriptの読み込み */
function my_script_init()
{ // WordPressに含まれているjquery.jsを読み込まない
    wp_deregister_script('jquery');
    wp_enqueue_script('jquery', '//code.jquery.com/jquery-3.6.1.min.js', "", "1.0.1");
    wp_enqueue_script('swiper-js', '//cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js', array(), '1.0.1', true);
    wp_enqueue_style('swiper-css', '//cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css', array(), '1.0.1');
    wp_enqueue_script('main-js', get_template_directory_uri() . '/js/script.js', array('jquery'), '1.0.1', true);

    if (is_page('about')) {
        wp_enqueue_style('custom-page-about-css', get_template_directory_uri() . '/css/about.css', array(), '1.0.0');
    } elseif (is_post_type_archive('works')) {
        wp_enqueue_style('custom-page-work-css', get_template_directory_uri() . '/css/works.css', array(), '1.0.0');
    } elseif (is_singular('works')) {
        wp_enqueue_style('custom-page-work-single-css', get_template_directory_uri() . '/css/worksDetail.css', array(), '1.0.0');
    } elseif (is_single()) {
        wp_enqueue_style('custom-page-news-detail-css', get_template_directory_uri() . '/css/newsDetail.css', array(), '1.0.0');
    } elseif (is_page('service')) {
        wp_enqueue_style('custom-page-service-css', get_template_directory_uri() . '/css/service.css', array(), '1.0.0');
    } elseif (is_page('contact') || is_page('contact-confirm') || is_page('contact-thanks')) {
        wp_enqueue_style('custom-page-contact-css', get_template_directory_uri() . '/css/contact.css', array(), '1.0.0');
    } elseif (is_home()) {
        wp_enqueue_style('custom-page-news-css', get_template_directory_uri() . '/css/news.css', array(), '1.0.0');
    } elseif (is_month()) {
        wp_enqueue_style('custom-page-work-css', get_template_directory_uri() . '/css/works.css', array(), '1.0.0');
    } elseif (is_category()) {
        wp_enqueue_style('custom-page-work-css', get_template_directory_uri() . '/css/works.css', array(), '1.0.0');
    } elseif (is_front_page()) {
        wp_enqueue_style('custom-front-page-css', get_template_directory_uri() . '/css/top.css', array(), '1.0.0');
    } else {
        wp_enqueue_style('custom-general-css', get_template_directory_uri() . '/css/style.css', array(), '1.0.0');
    }
}
add_action('wp_enqueue_scripts', 'my_script_init');

function custom_posts_per_page($query)
{
    if (!is_admin() && $query->is_main_query()) {
        // カスタム投稿のスラッグを記述
        if (is_post_type_archive('works')) {
            // 表示件数を指定
            $query->set('posts_per_page', 10);
        }
    }
}
add_action('pre_get_posts', 'custom_posts_per_page');