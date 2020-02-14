<?php

add_action('init', function () {
    /**
     * Post Type: Testimonials.
     */
    $labels = [
        "name" => __("Testimonials", "sage"),
        "singular_name" => __("Testimonial", "sage"),
    ];
    $args = [
        "label" => __("Testimonials", "sage"),
        "labels" => $labels,
        "description" => "",
        "public" => true,
        "publicly_queryable" => true,
        "show_ui" => true,
        "delete_with_user" => false,
        "show_in_rest" => true,
        "rest_base" => "",
        "rest_controller_class" => "WP_REST_Posts_Controller",
        "has_archive" => false,
        "show_in_menu" => true,
        "show_in_nav_menus" => true,
        "exclude_from_search" => false,
        "capability_type" => "post",
        "map_meta_cap" => true,
        "hierarchical" => false,
        // "rewrite" => ["slug" => "our-work", "with_front" => true],
        "query_var" => true,
        "menu_icon" => "dashicons-thumbs-up",
        "supports" => ["title", "editor", "thumbnail"],
    ];
    register_post_type("testimonial", $args);
});
