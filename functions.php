<?php

function load_stylesheet()
{
    wp_register_style('bootstrap', get_template_directory_uri() . '/css/vendor/bootstrap.min.css', '', '4.4.1', 'all');
    wp_enqueue_style('bootstrap');

    wp_register_style('bootstrap-rfs', get_template_directory_uri() . '/css/vendor/bootstrap-rfs.css', '', false, 'all');
    wp_enqueue_style('bootstrap-rfs');

    wp_register_style('select2-main', get_template_directory_uri() . '/css/vendor/select2.min.css', '', '4.0.13', 'all');
    wp_enqueue_style('select2-main');

    wp_register_style('select2-bootstrap', get_template_directory_uri() . '/css/vendor/select2-bootstrap4.min.css', '', '4.0.13', 'all');
    wp_enqueue_style('select2-bootstrap');

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

    wp_register_style('app', get_template_directory_uri() . '/css/app.css', '', '1.0.1', 'all');
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
    wp_enqueue_script('select2-main', get_template_directory_uri() . '/js/vendor/select2.full.min.js', 'jquery', '4.0.13', true);
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
            'rewrite' => array('slug' => 'seminars-events-articles'),
            'show_in_rest' => true,
            'menu_icon'           => wp_get_attachment_url(851),
        )
    );

    register_post_type(
        'audios',
        // CPT Options
        array(
            'labels' => array(
                'name' => __('Audios'),
                'singular_name' => __('Audio')
            ),
            'public' => true,
            'publicly_queryable' => true,
            'has_archive' => true,
            'rewrite' => array('slug' => 'audios'),
            'show_in_rest' => true,
            'menu_icon'           => wp_get_attachment_url(990),
        )
    );
}
// Hooking up our function to theme setup
add_action('init', 'create_posttype');

// Add the custom columns to the testimonials post type:
add_filter('manage_testimonials_posts_columns', 'set_custom_edit_testimonials_columns');
function set_custom_edit_testimonials_columns($columns)
{
    unset($columns['date']);
    $columns['content'] = __('Content');
    $columns['short'] = __('Short');
    $columns['location'] = __('Location');
    $columns['date_testimonial'] = __('Date');
    $columns['video'] = __('Video?');

    return $columns;
}

// Add the data to the custom columns for the testimonials post type:
add_action('manage_testimonials_posts_custom_column', 'custom_testimonials_column', 10, 2);
function custom_testimonials_column($column, $post_id)
{
    switch ($column) {
        case 'location':
            echo get_post_meta($post_id, 'location', true);
            break;

        case 'content':
            echo wp_trim_words(get_post_meta($post_id, 'content', true), 30);
            break;

        case 'short':
            echo wp_trim_words(get_post_meta($post_id, 'short_testimonial', true), 30);
            break;

        case 'date_testimonial':
            $date = get_post_meta($post_id, 'date_testimonial', true);
            if ($date != '') {
                echo date("F Y", strtotime($date));
            }
            break;

        case 'video':
            $video = get_post_meta($post_id, 'video', true);
            if ($video != '') {
                echo "<b>YES</b>";
            } else {
                echo "No";
            }
            break;
    }
}

// Add the custom columns to the questions_answers post type:
add_filter('manage_questions_answers_posts_columns', 'set_custom_edit_questions_answers_columns');
function set_custom_edit_questions_answers_columns($columns)
{
    unset($columns['date']);
    $columns['category'] = __('Category');
    $columns['question'] = __('Question');
    $columns['answer'] = __('Answer');

    return $columns;
}

// Add the data to the custom columns for the questions_answers post type:
add_action('manage_questions_answers_posts_custom_column', 'custom_questions_answers_column', 10, 2);
function custom_questions_answers_column($column, $post_id)
{
    switch ($column) {
        case 'category':
            $categories = get_field('categories', $post_id);
            if ($categories) {
                echo '<ul>';
                echo '<li>' . implode(', ', $categories) . '</li>';
                echo '</ul>';
            } else {
                echo '-';
            }
            break;

        case 'question':
            echo wp_trim_words(get_post_meta($post_id, 'question', true), 15);
            break;

        case 'answer':
            echo wp_trim_words(get_post_meta($post_id, 'answer', true), 15);
            break;
    }
}

// Add the custom columns to the conditions post type:
add_filter('manage_conditions_posts_columns', 'set_custom_edit_conditions_columns');
function set_custom_edit_conditions_columns($columns)
{
    unset($columns['date']);
    $columns['order'] = __('Order');
    $columns['category'] = __('Category');
    $columns['videos'] = __('Video(s)');
    $columns['audios'] = __('Audio(s)');
    $columns['questions_answers'] = __('Q&A');
    $columns['testimonials'] = __('Testimonial(s)');

    return $columns;
}

// Add the data to the custom columns for the conditions post type:
add_action('manage_conditions_posts_custom_column', 'custom_conditions_column', 10, 2);
function custom_conditions_column($column, $post_id)
{
    switch ($column) {
        case 'category':
            the_field('category', $post_id);
            break;

        case 'order':
            the_field('order', $post_id);
            break;

        case 'videos':
            $videos = get_field('videos', $post_id);
            if (!empty($videos) && count($videos) >= 1) {
                echo "<ul>";
                foreach ($videos as $video) {
                    $title = get_the_title($video->ID);
                    $link = get_edit_post_link($video->ID);

                    echo '<li>';
                    echo '<a href="' . $link . '" alt="" target="_blank" >' . $title . '</a>';
                    echo '</li>';
                }
                echo "</ul>";
            }
            break;

        case 'questions_answers':
            $questions_answers = get_field('q_a', $post_id);
            if (!empty($questions_answers) && count($questions_answers) >= 1) {
                echo "<ul>";
                foreach ($questions_answers as $q_a) {
                    $title = get_the_title($q_a->ID);
                    $link = get_edit_post_link($q_a->ID);

                    echo '<li>';
                    echo '<a href="' . $link . '" alt="" target="_blank" >' . $title . '</a>';
                    echo '</li>';
                }
                echo "</ul>";
            }
            break;

        case 'audios':
            $audios = get_field('audios', $post_id);
            if (!empty($audios) && count($audios) >= 1) {
                echo "<ul>";
                foreach ($audios as $video) {
                    $title = get_the_title($video->ID);
                    $link = get_edit_post_link($video->ID);

                    echo '<li>';
                    echo '<a href="' . $link . '" alt="" target="_blank" >' . $title . '</a>';
                    echo '</li>';
                }
                echo "</ul>";
            }
            break;

        case 'testimonials':
            $testimonials = get_field('testimonials', $post_id);
            if (!empty($testimonials) && count($testimonials) >= 1) {
                echo "<ul>";
                foreach ($testimonials as $video) {
                    $title = get_the_title($video->ID);
                    $link = get_edit_post_link($video->ID);

                    echo '<li>';
                    echo '<a href="' . $link . '" alt="" target="_blank" >' . $title . '</a>';
                    echo '</li>';
                }
                echo "</ul>";
            }
            break;
    }
}

// Add the custom columns to the videos post type:
add_filter('manage_videos_posts_columns', 'set_custom_edit_videos_columns');
function set_custom_edit_videos_columns($columns)
{
    unset($columns['date']);
    $columns['order'] = __('Order');
    $columns['description'] = __('Description');
    $columns['link'] = __('Link');
    $columns['preview'] = __('Preview');

    return $columns;
}

function custom_post_types_pre_get_posts($query)
{
    // do not modify queries in the admin
    if (!is_admin()) {
        return $query;
    }

    // only modify queries for 'conditions' & 'videos' post type
    if (isset($query->query_vars['post_type']) && !isset($_GET['filter_action'])) {
        switch ($query->query_vars['post_type']) {
            case 'conditions':
                $query->set('orderby', 'meta_value');
                // $query->set('meta_key', 'category');
                $query->set('meta_key', 'order');
                $query->set('meta_type', 'numeric');
                $query->set('order', 'ASC');
                break;
            case 'videos':
                $query->set('orderby', 'meta_value');
                $query->set('meta_key', 'order');
                $query->set('meta_type', 'numeric');
                $query->set('order', 'ASC');
                break;
        }
    }

    // return
    return $query;
}
add_action('pre_get_posts', 'custom_post_types_pre_get_posts');

// Add the data to the custom columns for the videos post type:
add_action('manage_videos_posts_custom_column', 'custom_videos_column', 10, 2);
function custom_videos_column($column, $post_id)
{
    switch ($column) {
        case 'order':
            the_field('order', $post_id);
            break;

        case 'preview':
            // extracting the video ID first
            $url = get_post_meta($post_id, 'link', true);
            parse_str(parse_url($url, PHP_URL_QUERY), $a);
            $video_id = $a['v'];

            echo '<img src="https://img.youtube.com/vi/' . $video_id . '/0.jpg" alt="" width="100%" />';
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

// Add the custom columns to the audios post type:
add_filter('manage_audios_posts_columns', 'set_custom_edit_audios_columns');
function set_custom_edit_audios_columns($columns)
{
    unset($columns['date']);
    $columns['description'] = __('Description');
    $columns['file_name'] = __('File');

    return $columns;
}

// Add the data to the custom columns for the audios post type:
add_action('manage_audios_posts_custom_column', 'custom_audios_column', 10, 2);
function custom_audios_column($column, $post_id)
{
    switch ($column) {
        case 'description':
            echo wp_trim_words(get_post_meta($post_id, 'description', true), 10);
            break;

        case 'file_name':
            $file = get_field('file', $post_id);
            echo $file['filename'];
            echo '<br />';
            echo formatBytes($file['filesize']);
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
    remove_post_type_support('audios', 'editor');
}

// SHORTCODES

include 'shortcodes/display_conditions.php';
include 'shortcodes/video_embeded.php';
include 'shortcodes/paypal_button.php';
include 'shortcodes/download_audio_file.php';
include 'shortcodes/condition_search_form.php';
include 'shortcodes/top_banner.php';
include 'shortcodes/related_techniques.php';
include 'shortcodes/students_testimonials.php';
include 'shortcodes/social_medias.php';

// Edit size max for media upload
@ini_set('upload_max_size', '100M');
@ini_set('post_max_size', '100M');
@ini_set('max_execution_time', '300');

// Flushing rules
flush_rewrite_rules(false);

function formatBytes($bytes, $precision = 0)
{
    $units = array('B', 'KB', 'MB', 'GB', 'TB');

    $bytes = max($bytes, 0);
    $pow = floor(($bytes ? log($bytes) : 0) / log(1024));
    $pow = min($pow, count($units) - 1);

    // Uncomment one of the following alternatives
    $bytes /= pow(1024, $pow);
    // $bytes /= (1 << (10 * $pow));

    return round($bytes, $precision) . ' ' . $units[$pow];
}

// Filter posts on Conditions Admin Page
if (is_admin()) {
    //this hook will create a new filter on the admin area for the specified post type
    add_action('restrict_manage_posts', function () {

        $post_type = (isset($_GET['post_type'])) ? $_GET['post_type'] : 'post';

        if ($post_type == 'conditions') {
            $values = array();

            $args = array(
                'posts_per_page'    => -1,
                'post_type'         => 'conditions',
                'meta_key'          => 'category',
            );
            $q = get_posts($args);

            foreach ($q as $data) {
                $values[$data->category] = $data->category;
            }

?>
            <select name="category">
                <option value="">All categories</option>

                <?php
                $current_v = isset($_GET['category']) ? $_GET['category'] : '';
                foreach ($values as $label => $value) {
                    printf(
                        '<option value="%s"%s>%s</option>',
                        $value,
                        $value == $current_v ? ' selected="selected"' : '',
                        $label
                    );
                }
                ?>
            </select>
<?php
        }
    });

    //this hook will alter the main query according to the user's selection of the custom filter we created above:
    add_filter('parse_query', function ($query) {
        global $pagenow;
        $post_type = (isset($_GET['post_type'])) ? $_GET['post_type'] : 'post';
        $category = (isset($_GET['category'])) ? $_GET['category'] : '';

        if ($post_type == 'conditions' && $pagenow == 'edit.php' && isset($_GET['category']) && !empty($_GET['category'])) {
            // only modify queries for 'conditions' post type
            if (isset($query->query_vars['post_type']) && $query->query_vars['post_type'] == 'conditions') {
                $query->set('meta_key', 'category');
                $query->set('meta_value', $category);
            }

            // return
            return $query;

            wp_reset_query();
        }
    });
}

add_filter('acf/fields/wysiwyg/toolbars', 'my_toolbars');
function my_toolbars($toolbars)
{
    array_unshift($toolbars['Full'][1], 'fontselect');
    array_unshift($toolbars['Full'][1], 'fontsizeselect');

    return $toolbars;
}

// Add custom Fonts to the Fonts list
if (!function_exists('am_add_google_fonts_array_to_tiny_mce')) {
    function am_add_google_fonts_array_to_tiny_mce($initArray)
    {
        $initArray['font_formats'] = 'Kollektif Regular=Kollektif Regular;Manrope=Manrope;Roboto=Roboto;Andale Mono=andale mono,times;Arial=arial,helvetica,sans-serif;Arial Black=arial black,avant garde;Book Antiqua=book antiqua,palatino;Comic Sans MS=comic sans ms,sans-serif;Courier New=courier new,courier;Georgia=georgia,palatino;Helvetica=helvetica;Impact=impact,chicago;Symbol=symbol;Tahoma=tahoma,arial,helvetica,sans-serif;Terminal=terminal,monaco;Times New Roman=times new roman,times;Trebuchet MS=trebuchet ms,geneva;Verdana=verdana,geneva;Webdings=webdings;Wingdings=wingdings,zapf dingbats';
        return $initArray;
    }
}
add_filter('tiny_mce_before_init', 'am_add_google_fonts_array_to_tiny_mce');

function scanwp_buttons($buttons)
{
    array_unshift($buttons, 'fontselect');
    array_unshift($buttons, 'fontsizeselect');
    return $buttons;
}

add_filter('mce_buttons_2', 'scanwp_buttons');

function my_mce4_options($init)
{

    $custom_colours = '
        "000000", "Black",
        "993300", "Burnt orange",
        "333300", "Dark olive",
        "003300", "Dark green",
        "003366", "Dark azure",
        "000080", "Navy Blue",
        "333399", "Indigo",
        "333333", "Very dark gray",
        "800000", "Maroon",
        "FF6600", "Orange",
        "808000", "Olive",
        "008000", "Green",
        "008080", "Teal",
        "0000FF", "Blue",
        "666699", "Grayish blue",
        "808080", "Gray",
        "FF0000", "Red",
        "FF9900", "Amber",
        "99CC00", "Yellow green",
        "339966", "Sea green",
        "33CCCC", "Turquoise",
        "3366FF", "Royal blue",
        "800080", "Purple",
        "999999", "Medium gray",
        "FF00FF", "Magenta",
        "FFCC00", "Gold",
        "FFFF00", "Yellow",
        "00FF00", "Lime",
        "00FFFF", "Aqua",
        "00CCFF", "Sky blue",
        "993366", "Red violet",
        "FFFFFF", "White",
        "FF99CC", "Pink",
        "FFCC99", "Peach",
        "FFFF99", "Light yellow",
        "CCFFCC", "Pale green",
        "CCFFFF", "Pale cyan",
        "99CCFF", "Light sky blue",
        "CC99FF", "Plum",
        "c6a530", "Brand color",
    ';

    // build colour grid default+custom colors
    $init['textcolor_map'] = '[' . $custom_colours . ']';

    // change the number of rows in the grid if the number of colors changes
    // 8 swatches per row
    $init['textcolor_rows'] = 8;
    $init['textcolor_cols'] = 8;

    return $init;
}
add_filter('tiny_mce_before_init', 'my_mce4_options');
