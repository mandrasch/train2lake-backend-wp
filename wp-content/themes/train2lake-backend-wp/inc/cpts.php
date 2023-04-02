<?php
if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}

function cptui_register_my_cpts()
{

    /**
     * Post Type: Destinations.
     */

    $labels = [
        "name" => esc_html__("Destinations", "twentytwentythree"),
        "singular_name" => esc_html__("Destination", "twentytwentythree"),
        "menu_name" => esc_html__("My Destinations", "twentytwentythree"),
        "all_items" => esc_html__("All Destinations", "twentytwentythree"),
        "add_new" => esc_html__("Add new", "twentytwentythree"),
        "add_new_item" => esc_html__("Add new Destination", "twentytwentythree"),
        "edit_item" => esc_html__("Edit Destination", "twentytwentythree"),
        "new_item" => esc_html__("New Destination", "twentytwentythree"),
        "view_item" => esc_html__("View Destination", "twentytwentythree"),
        "view_items" => esc_html__("View Destinations", "twentytwentythree"),
        "search_items" => esc_html__("Search Destinations", "twentytwentythree"),
        "not_found" => esc_html__("No Destinations found", "twentytwentythree"),
        "not_found_in_trash" => esc_html__("No Destinations found in trash", "twentytwentythree"),
        "parent" => esc_html__("Parent Destination:", "twentytwentythree"),
        "featured_image" => esc_html__("Featured image for this Destination", "twentytwentythree"),
        "set_featured_image" => esc_html__("Set featured image for this Destination", "twentytwentythree"),
        "remove_featured_image" => esc_html__("Remove featured image for this Destination", "twentytwentythree"),
        "use_featured_image" => esc_html__("Use as featured image for this Destination", "twentytwentythree"),
        "archives" => esc_html__("Destination archives", "twentytwentythree"),
        "insert_into_item" => esc_html__("Insert into Destination", "twentytwentythree"),
        "uploaded_to_this_item" => esc_html__("Upload to this Destination", "twentytwentythree"),
        "filter_items_list" => esc_html__("Filter Destinations list", "twentytwentythree"),
        "items_list_navigation" => esc_html__("Destinations list navigation", "twentytwentythree"),
        "items_list" => esc_html__("Destinations list", "twentytwentythree"),
        "attributes" => esc_html__("Destinations attributes", "twentytwentythree"),
        "name_admin_bar" => esc_html__("Destination", "twentytwentythree"),
        "item_published" => esc_html__("Destination published", "twentytwentythree"),
        "item_published_privately" => esc_html__("Destination published privately.", "twentytwentythree"),
        "item_reverted_to_draft" => esc_html__("Destination reverted to draft.", "twentytwentythree"),
        "item_scheduled" => esc_html__("Destination scheduled", "twentytwentythree"),
        "item_updated" => esc_html__("Destination updated.", "twentytwentythree"),
        "parent_item_colon" => esc_html__("Parent Destination:", "twentytwentythree"),
    ];

    $args = [
        "label" => esc_html__("Destinations", "twentytwentythree"),
        "labels" => $labels,
        "description" => "",
        "public" => true,
        "publicly_queryable" => true,
        "show_ui" => true,
        "show_in_rest" => true,
        "rest_base" => "",
        "rest_controller_class" => "WP_REST_Posts_Controller",
        "rest_namespace" => "wp/v2",
        "has_archive" => false,
        "show_in_menu" => true,
        "show_in_nav_menus" => true,
        "delete_with_user" => false,
        "exclude_from_search" => false,
        "capability_type" => "post",
        "map_meta_cap" => true,
        "hierarchical" => false,
        "can_export" => false,
        "rewrite" => ["slug" => "destination", "with_front" => true],
        "query_var" => true,
        "supports" => ["title", "editor", "thumbnail"],
        "show_in_graphql" => false,
    ];

    register_post_type("destination", $args);
}

add_action('init', 'cptui_register_my_cpts');
