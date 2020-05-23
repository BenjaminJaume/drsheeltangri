<?php

function load_stylesheet()
{
    wp_register_style('bootstrap', get_template_directory_uri() . '/css/vendor/bootstrap.min.css', '', '4.4.1', 'all');
    wp_enqueue_style('bootstrap');

    wp_register_style('bootstrap-rfs', get_template_directory_uri() . '/css/vendor/bootstrap-rfs.css', '', false, 'all');
    wp_enqueue_style('bootstrap-rfs');

    wp_register_style('animate', get_template_directory_uri() . '/css/vendor/animate.min.css', '', '3.7.2', 'all');
    wp_enqueue_style('animate');

    wp_register_style('aos', get_template_directory_uri() . '/css/vendor/aos.min.css', '', false, 'all');
    wp_enqueue_style('aos');

    wp_register_style('fontawesome', get_template_directory_uri() . '/css/vendor/fontawesome/css/all.min.css', '', '5.12.1', 'all');
    wp_enqueue_style('fontawesome');

    wp_register_style('hover', get_template_directory_uri() . '/css/vendor/hover.min.css', '', '2.3.2', 'all');
    wp_enqueue_style('hover');

    wp_register_style('normalize', get_template_directory_uri() . '/css/vendor/normalize.min.css', '', '8.0.1', 'all');
    wp_enqueue_style('normalize');

    wp_register_style('app', get_template_directory_uri() . '/css/app.css', '', '1.0.0', 'all');
    wp_enqueue_style('app');
}
add_action('wp_enqueue_scripts', 'load_stylesheet');

function load_jquery()
{
    wp_deregister_script('jquery');
    wp_enqueue_script('jquery', get_template_directory_uri() . '/js/vendor/jquery-3.4.1.min.js', '', '3.4.1', true);
}
add_action('wp_enqueue_scripts', 'load_jquery');


function load_javascript()
{
    wp_enqueue_script('bootstrap', get_template_directory_uri() . '/js/vendor/bootstrap.min.js', 'jquery', '4.4.1', true);
    wp_enqueue_script('aos', get_template_directory_uri() . '/js/vendor/aos.js', 'jquery', false, true);
    wp_enqueue_script('custom', get_template_directory_uri() . '/js/custom.js', 'jquery', false, true);
}
add_action('wp_enqueue_scripts', 'load_javascript');

// Add menu feature in WordPress
add_theme_support('menus');

// Add thumbnail feature in Wordpress
add_theme_support('post-thumbnails');

// Add templates feature in Wordpress
add_theme_support('templates');

// Add Boostrap Menu file with Wordpress
function register_navwalker()
{
    require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
}
add_action('after_setup_theme', 'register_navwalker');

register_nav_menus(
    array(
        'menu' => __("Menu", 'theme')
    )
);

function console($data)
{
    echo "<script>console.log('" . json_encode($data) . "');</script>";
}

// Custom post type function
function create_posttype()
{
    register_post_type(
        'testimonials',
        // CPT Options
        array(
            'labels' => array(
                'name' => __('Testimonials'),
                'singular_name' => __('Testimonial')
            ),
            'public' => true,
            'publicly_queryable' => true,
            'has_archive' => true,
            'rewrite' => array('slug' => 'testimonials'),
            'show_in_rest' => true,
            'menu_icon'           => wp_get_attachment_url(528),
        )
    );

    register_post_type(
        'conditions',
        // CPT Options
        array(
            'labels' => array(
                'name' => __('Conditions'),
                'singular_name' => __('Condition')
            ),
            'public' => true,
            'publicly_queryable' => true,
            'has_archive' => true,
            'rewrite' => array('slug' => 'conditions-treated'),
            'show_in_rest' => true,
            'menu_icon'           => wp_get_attachment_url(531),
        )
    );

    register_post_type(
        'questions_answers',
        // CPT Options
        array(
            'labels' => array(
                'name' => __('Questions & Answers'),
                'singular_name' => __('Questions & Answers')
            ),
            'public' => true,
            'publicly_queryable' => true,
            'has_archive' => true,
            'rewrite' => array('slug' => 'questions-answers'),
            'show_in_rest' => true,
            'menu_icon'           => wp_get_attachment_url(527),
        )
    );

    register_post_type(
        'videos',
        // CPT Options
        array(
            'labels' => array(
                'name' => __('Videos'),
                'singular_name' => __('Video')
            ),
            'public' => true,
            'publicly_queryable' => true,
            'has_archive' => true,
            'rewrite' => array('slug' => 'videos'),
            'show_in_rest' => true,
            'menu_icon'           => wp_get_attachment_url(801),
        )
    );

    register_post_type(
        'articles',
        // CPT Options
        array(
            'labels' => array(
                'name' => __('Articles'),
                'singular_name' => __('Article')
            ),
            'public' => true,
            'publicly_queryable' => true,
            'has_archive' => true,
            'rewrite' => array('slug' => 'past-events-articles'),
            'show_in_rest' => true,
            'menu_icon'           => wp_get_attachment_url(851),
        )
    );
}
// Hooking up our function to theme setup
add_action('init', 'create_posttype');

// Add the custom columns to the testimonials post type:
add_filter('manage_testimonials_posts_columns', 'set_custom_edit_testimonials_columns');
function set_custom_edit_testimonials_columns($columns)
{
    unset($columns['title']);
    unset($columns['date']);
    $columns['full_name'] = __('Full Name');
    $columns['content'] = __('Content');
    $columns['date_testimonial'] = __('Date');
    $columns['edit'] = __('Edit');

    return $columns;
}

// Add the data to the custom columns for the testimonials post type:
add_action('manage_testimonials_posts_custom_column', 'custom_testimonials_column', 10, 2);
function custom_testimonials_column($column, $post_id)
{
    switch ($column) {
        case 'full_name':
            echo get_post_meta($post_id, 'full_name', true);
            break;

        case 'content':
            echo wp_trim_words(get_post_meta($post_id, 'content', true), 30);
            break;

        case 'date_testimonial':
            $date = get_post_meta($post_id, 'date_testimonial', true);
            if ($date != '') {
                echo date("j/m/Y", strtotime($date));
            }
            break;

        case 'edit':
            echo '<a href="' . get_edit_post_link($post_id) . '" alt="" target="_blank" />Edit</a>';
            break;
    }
}

// Add the custom columns to the questions_answers post type:
add_filter('manage_questions_answers_posts_columns', 'set_custom_edit_questions_answers_columns');
function set_custom_edit_questions_answers_columns($columns)
{
    unset($columns['title']);
    unset($columns['date']);
    $columns['question'] = __('Question');
    $columns['answer'] = __('Answer');
    $columns['edit'] = __('Edit');

    return $columns;
}

// Add the data to the custom columns for the questions_answers post type:
add_action('manage_questions_answers_posts_custom_column', 'custom_questions_answers_column', 10, 2);
function custom_questions_answers_column($column, $post_id)
{
    switch ($column) {
        case 'question':
            echo get_post_meta($post_id, 'question', true);
            break;

        case 'answer':
            echo wp_trim_words(get_post_meta($post_id, 'answer', true), 30);
            break;

        case 'edit':
            echo '<a href="' . get_edit_post_link($post_id) . '" alt="" target="_blank" />Edit</a>';
            break;
    }
}

// Add the custom columns to the conditions post type:
add_filter('manage_conditions_posts_columns', 'set_custom_edit_conditions_columns');
function set_custom_edit_conditions_columns($columns)
{
    unset($columns['date']);
    unset($columns['title']);
    $columns['name'] = __('Name');
    $columns['description'] = __('Description');
    $columns['videos'] = __('Videos');
    $columns['edit'] = __('Edit');

    return $columns;
}

// Add the data to the custom columns for the conditions post type:
add_action('manage_conditions_posts_custom_column', 'custom_conditions_column', 10, 2);
function custom_conditions_column($column, $post_id)
{
    switch ($column) {
        case 'name':
            echo get_post_meta($post_id, 'name', true);
            break;

        case 'description':
            echo wp_trim_words(get_post_meta($post_id, 'description', true), 10);
            break;

        case 'videos':
            $videos = get_field('videos', $post_id);
            if (!empty($videos) && count($videos) >= 1) {
                echo "<ul>";
                foreach ($videos as $video) {
                    $title = get_field('title', $video->ID);
                    $link = get_edit_post_link($video->ID);

                    echo '<li>';
                    echo '<a href="' . $link . '" alt="" target="_blank" >' . $title . '</a>';
                    echo '</li>';
                }
                echo "</ul>";
            }
            break;

        case 'edit':
            echo '<a href="' . get_edit_post_link($post_id) . '" alt="" target="_blank" >Edit</a>';
            break;
    }
}

// Add the custom columns to the videos post type:
add_filter('manage_videos_posts_columns', 'set_custom_edit_videos_columns');
function set_custom_edit_videos_columns($columns)
{
    unset($columns['date']);
    unset($columns['title']);
    $columns['preview'] = __('Preview');
    $columns['title'] = __('Title');
    $columns['description'] = __('Description');
    $columns['link'] = __('Link');
    $columns['date_video'] = __('Date');
    $columns['edit'] = __('Edit');

    return $columns;
}

// Add the data to the custom columns for the videos post type:
add_action('manage_videos_posts_custom_column', 'custom_videos_column', 10, 2);
function custom_videos_column($column, $post_id)
{
    switch ($column) {
        case 'preview':
            // extracting the video ID first
            $url = get_post_meta($post_id, 'link', true);
            parse_str(parse_url($url, PHP_URL_QUERY), $a);
            $video_id = $a['v'];

            echo '<img src="https://img.youtube.com/vi/' . $video_id . '/0.jpg" alt="" width="100%" />';
            break;

        case 'title':
            echo get_post_meta($post_id, 'title', true);
            break;

        case 'description':
            echo wp_trim_words(get_post_meta($post_id, 'description', true), 10);
            break;

        case 'link':
            echo
                '<a href="' . get_post_meta($post_id, 'link', true) . '" alt="" target="_blank">' .
                    get_post_meta($post_id, 'link', true)
                    . '</a>';
            break;

        case 'date_video':
            $date = get_post_meta($post_id, 'date_video', true);
            if ($date != '') {
                echo date("j/m/Y", strtotime($date));
            }
            break;

        case 'edit':
            echo '<a href="' . get_edit_post_link($post_id) . '" alt="" target="_blank" />Edit</span>';
            break;
    }
}

// Add the custom columns to the articles post type:
add_filter('manage_articles_posts_columns', 'set_custom_edit_articles_columns');
function set_custom_edit_articles_columns($columns)
{
    unset($columns['date']);
    unset($columns['title']);
    $columns['title'] = __('Title');
    $columns['description'] = __('Description');
    $columns['date_article'] = __('Date');
    $columns['edit'] = __('Edit');

    return $columns;
}

// Add the data to the custom columns for the articles post type:
add_action('manage_articles_posts_custom_column', 'custom_articles_column', 10, 2);
function custom_articles_column($column, $post_id)
{
    switch ($column) {
        case 'title':
            echo get_post_meta($post_id, 'title', true);
            break;

        case 'description':
            echo wp_trim_words(get_post_meta($post_id, 'description', true), 10);
            break;

        case 'date_article':
            $date = get_post_meta($post_id, 'date_article', true);
            if ($date != '') {
                echo date("j/m/Y", strtotime($date));
            }
            break;

        case 'edit':
            echo '<a href="' . get_edit_post_link($post_id) . '" alt="" target="_blank" />Edit</span>';
            break;
    }
}

// turn off wysiwig for custom post types
add_action('init', 'init_remove_support', 100);
function init_remove_support()
{
    remove_post_type_support('testimonials', 'editor');
    remove_post_type_support('conditions', 'editor');
    remove_post_type_support('questions_answers', 'editor');
    remove_post_type_support('videos', 'editor');
    remove_post_type_support('articles', 'editor');
}

// SHORTCODES

include 'shortcodes/conditions.php';
include 'shortcodes/video_embeded.php';

@ini_set('upload_max_size', '100M');
@ini_set('post_max_size', '100M');
@ini_set('max_execution_time', '300');

// Flushing rules
flush_rewrite_rules(false);
