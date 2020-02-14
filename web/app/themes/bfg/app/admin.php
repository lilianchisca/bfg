<?php

namespace App;

/**
 * Theme customizer
 */
add_action('customize_register', function (\WP_Customize_Manager $wp_customize) {
    // Add postMessage support
    $wp_customize->get_setting('blogname')->transport = 'postMessage';
    $wp_customize->selective_refresh->add_partial('blogname', [
        'selector' => '.brand',
        'render_callback' => function () {
            bloginfo('name');
        }
    ]);
});

/**
 * Customizer JS
 */
add_action('customize_preview_init', function () {
    wp_enqueue_script('sage/customizer.js', asset_path('scripts/customizer.js'), ['customize-preview'], null, true);
});

/**
 * If WP_ENV is set, append the environment name to the admin bar for current environment clarity.
 */
if (defined('WP_ENV')) {
    add_action('admin_bar_menu', function ($wp_admin_bar) {
        $env = strtolower(env('WP_ENV'));
        $wp_admin_bar->add_node([
            'id'    => 'current_env',
            'title' => 'Environment' . ': '. ucfirst($env),
            'meta'  => ['class' => 'admin-bar__current-env is-'.$env],
            'parent' => 'top-secondary',
        ]);
    }, 999);

    $adminbarCustomStylFn = function () {
        echo '<style>#wpadminbar .admin-bar__current-env .ab-item{color:#fff!important;background-color: hsl(2, 83%, 63%)!important; color:hsl(2, 61%, 24%) !important}#wpadminbar .admin-bar__current-env[class*="is-staging"] .ab-item{background-color: hsl(29, 94%, 68%)!important;color: hsl(25, 52%, 25%)!important}#wpadminbar .admin-bar__current-env[class*="is-dev"] .ab-item{background-color: hsl(146, 64%, 58%)!important;color: hsl(151, 47%, 19%)!important}</style>';
    };

    add_action('admin_head', $adminbarCustomStylFn);
    if (!is_admin() && is_user_logged_in()) {
        add_action('wp_head', $adminbarCustomStylFn);
    }
}
