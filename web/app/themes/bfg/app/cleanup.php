<?php

namespace App;

/**
 * Remove default dashboard metaboxes
 */
add_action('wp_dashboard_setup', function () {
    remove_action('welcome_panel', 'wp_welcome_panel');
    remove_meta_box('dashboard_primary', 'dashboard', 'normal');
    remove_meta_box('dashboard_secondary', 'dashboard', 'normal');
    remove_meta_box('dashboard_incoming_links', 'dashboard', 'normal');
    remove_meta_box('dashboard_quick_press', 'dashboard', 'side');
    remove_meta_box('dashboard_recent_drafts', 'dashboard', 'side');
});

/**
 * Remove WP logo and comments menu from admin bar
 */
add_action('admin_bar_menu', function ($wp_admin_bar) {
    $wp_admin_bar->remove_node('wp-logo');
    $wp_admin_bar->remove_node('view-site');
    $wp_admin_bar->remove_menu('customize');
    $wp_admin_bar->remove_menu('comments');
}, 100);

/**
 * Move Yoast SEO metabox to a lower position
 */
add_filter('wpseo_metabox_prio', function () {
    return 'low';
});

/**
 * Remove the "help" section on top of admin pages
 */
add_filter('contextual_help', function ($old_help, $screen_id, $screen) {
    $screen->remove_help_tabs();
    return $old_help;
}, 11, 3);

/**
 * Remove emojis, clean up the <head> and remove WP default gallery style
 */
add_action('init', function () {
    /** Remove emojis */
    remove_action('admin_print_styles', 'print_emoji_styles');
    remove_action('wp_head', 'print_emoji_detection_script', 7);
    remove_action('admin_print_scripts', 'print_emoji_detection_script');
    remove_action('wp_print_styles', 'print_emoji_styles');
    remove_filter('wp_mail', 'wp_staticize_emoji_for_email');
    remove_filter('the_content_feed', 'wp_staticize_emoji');
    remove_filter('comment_text_rss', 'wp_staticize_emoji');
    add_filter('emoji_svg_url', '__return_false');
    add_filter('tiny_mce_plugins', function ($plugins) {
        return is_array($plugins) ? array_diff($plugins, ['wpemoji']) : [];
    });

    /** Clean the <head> */
    remove_action('wp_head', 'adjacent_posts_rel_link_wp_head', 10);
    remove_action('wp_head', 'feed_links_extra', 3);
    remove_action('wp_head', 'feed_links', 2);
    remove_action('wp_head', 'index_rel_link');
    remove_action('wp_head', 'parent_post_rel_link', 10);
    remove_action('wp_head', 'rel_canonical', 10);
    remove_action('wp_head', 'rest_output_link_wp_head', 10);
    remove_action('wp_head', 'rsd_link');
    remove_action('wp_head', 'start_post_rel_link', 10);
    remove_action('wp_head', 'wlwmanifest_link');
    remove_action('wp_head', 'wp_oembed_add_discovery_links');
    remove_action('wp_head', 'wp_oembed_add_host_js');
    remove_action('wp_head', 'wp_shortlink_wp_head');
    remove_action('template_redirect', 'wp_shortlink_header', 11, 0);
    remove_action('wp_head', 'wp_generator');
    add_filter('show_recent_comments_widget_style', '__return_false');

    /** Remove default gallery style */
    add_filter('use_default_gallery_style', '__return_false');
});

/**
 * Remove WP version from the <head> and RSS feeds
 */
add_filter('the_generator', '__return_false');

/**
 * Remove unnecessary self-closing tags
 */
function remove_self_closing_tags($input)
{
    return str_replace(' />', '>', $input);
}
add_filter('get_avatar', __NAMESPACE__ . '\\remove_self_closing_tags'); // <img />
add_filter('comment_id_fields', __NAMESPACE__ . '\\remove_self_closing_tags'); // <input />
add_filter('post_thumbnail_html', __NAMESPACE__ . '\\remove_self_closing_tags'); // <img />

/**
 * Don't return the default description in the RSS feed if it hasn't been changed
 */
function remove_default_description($bloginfo)
{
    $default_tagline = 'Just another WordPress site';
    return ($bloginfo === $default_tagline) ? '' : $bloginfo;
}
add_filter('get_bloginfo_rss', __NAMESPACE__ . '\\remove_default_description');

/**
 * Remove version query string from all styles and scripts
 *
 * You can enable/disable this feature in functions.php (or app/setup.php if you're using Sage):
 * add_theme_support('soil-disable-asset-versioning');
 */
function remove_script_version($src)
{
    return $src ? esc_url(remove_query_arg('ver', $src)) : false;
}
add_filter('script_loader_src', __NAMESPACE__ . '\\remove_script_version', 15, 1);
add_filter('style_loader_src', __NAMESPACE__ . '\\remove_script_version', 15, 1);

/**
 * Disable pingback XMLRPC method
 */
function filter_xmlrpc_method($methods)
{
    unset($methods['pingback.ping']);
    return $methods;
}
add_filter('xmlrpc_methods', __NAMESPACE__ . '\\filter_xmlrpc_method', 10, 1);

/**
 * Remove pingback header
 */
function filter_headers($headers)
{
    if (isset($headers['X-Pingback'])) {
        unset($headers['X-Pingback']);
    }
    return $headers;
}
add_filter('wp_headers', __NAMESPACE__ . '\\filter_headers', 10, 1);

/**
 * Kill trackback rewrite rule
 */
function filter_rewrites($rules)
{
    foreach ($rules as $rule => $rewrite) {
        if (preg_match('/trackback\/\?\$$/i', $rule)) {
            unset($rules[$rule]);
        }
    }
    return $rules;
}
add_filter('rewrite_rules_array', __NAMESPACE__ . '\\filter_rewrites');

/**
 * Kill bloginfo('pingback_url')
 */
function kill_pingback_url($output, $show)
{
    if ($show === 'pingback_url') {
        $output = '';
    }
    return $output;
}
add_filter('bloginfo_url', __NAMESPACE__ . '\\kill_pingback_url', 10, 2);

/**
 * Disable XMLRPC call
 */
function kill_xmlrpc($action)
{
    if ($action === 'pingback.ping') {
        wp_die('Pingbacks are not supported', 'Not Allowed!', ['response' => 403]);
    }
}
add_action('xmlrpc_call', __NAMESPACE__ . '\\kill_xmlrpc');

/**
 * Redirects search results from /?s=query to /search/query/, converts %20 to +
 *
 * @link http://txfx.net/wordpress-plugins/nice-search/
 */
function redirect()
{
    global $wp_rewrite;
    if (!isset($wp_rewrite) || !is_object($wp_rewrite) || !$wp_rewrite->get_search_permastruct()) {
        return;
    }
    $search_base = $wp_rewrite->search_base;
    if (is_search() && !is_admin() && strpos($_SERVER['REQUEST_URI'], "/{$search_base}/") === false && strpos($_SERVER['REQUEST_URI'], '&') === false) {
        wp_redirect(get_search_link());
        exit();
    }
}
add_action('template_redirect', __NAMESPACE__ . '\\redirect');

function rewrite($url)
{
    return str_replace('/?s=', '/search/', $url);
}
add_filter('wpseo_json_ld_search_url', __NAMESPACE__ . '\\rewrite');
