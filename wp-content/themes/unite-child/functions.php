<?php
add_action('wp_enqueue_scripts', 'unite_child_enqueue_styles' );
function unite_child_enqueue_styles()
{
    wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css' ); 
}

function create_post_type_with_taxonomy() {
    register_post_type('film',
            array(
                'labels' => array(
                'name' => __('Films'),
                'singular_name' => __('Film')
           ),
            'public' => true,
            'has_archive' => true,
        )
    );
}
add_action('init', 'add_custom_taxonomies', 0);
add_action('init', 'create_post_type_with_taxonomy');
 
function add_custom_taxonomies()
{
    $labels = [
        'name' => _x('Actors', 'taxonomy general name'),
        'singular_name' => _x('Actor', 'taxonomy singular name'),
        'search_items' =>  __('Search Actor'),
        'popular_items' => __('Popular Actor'),
        'all_items' => __('All Actor'),
        'parent_item' => null,
        'parent_item_colon' => null,
        'edit_item' => __('Edit Actor'), 
        'update_item' => __('Update Actor'),
        'add_new_item' => __('Add New Actor'),
        'new_item_name' => __('New Actor Name'),
        'separate_items_with_commas' => __('Separate Actors with commas'),
        'add_or_remove_items' => __('Add or remove Actors'),
        'choose_from_most_used' => __('Choose from the most used Actors'),
        'menu_name' => __('Actors'),
    ]; 
    register_taxonomy('Actors','film',[
        'hierarchical' => true,
        'labels' => $labels,
        'show_ui' => true,
        'show_admin_column' => true,
        'update_count_callback' => '_update_post_term_count',
        'query_var' => true,
        'rewrite' => array('slug' => 'actor'),
    ]);

    $labels = [
        'name' => _x('Genre', 'taxonomy general name'),
        'singular_name' => _x('Actor', 'taxonomy singular name'),
        'search_items' =>  __('Search Actor'),
        'popular_items' => __('Popular Actor'),
        'all_items' => __('All Actor'),
        'parent_item' => null,
        'parent_item_colon' => null,
        'edit_item' => __('Edit Actor'), 
        'update_item' => __('Update Actor'),
        'add_new_item' => __('Add New Actor'),
        'new_item_name' => __('New Actor Name'),
        'separate_items_with_commas' => __('Separate Genre with commas'),
        'add_or_remove_items' => __('Add or remove Genre'),
        'choose_from_most_used' => __('Choose from the most used Genre'),
        'menu_name' => __('Genre'),
    ]; 
    register_taxonomy('Genre','film',[
        'hierarchical' => true,
        'labels' => $labels,
        'show_ui' => true,
        'show_admin_column' => true,
        'update_count_callback' => '_update_post_term_count',
        'query_var' => true,
        'rewrite' => array('slug' => 'genre'),
    ]);

    $labels = [
        'name' => _x('Year', 'taxonomy general name'),
        'singular_name' => _x('Year', 'taxonomy singular name'),
        'search_items' =>  __('Search Year'),
        'popular_items' => __('Popular Year'),
        'all_items' => __('All Year'),
        'parent_item' => null,
        'parent_item_colon' => null,
        'edit_item' => __('Edit Year'), 
        'update_item' => __('Update Year'),
        'add_new_item' => __('Add New Year'),
        'new_item_name' => __('New Year'),
        'separate_items_with_commas' => __('Separate Year with commas'),
        'add_or_remove_items' => __('Add or remove Year'),
        'choose_from_most_used' => __('Choose from the most used Year'),
        'menu_name' => __('Year'),
    ];
    register_taxonomy('Year','film',[
        'hierarchical' => true,
        'labels' => $labels,
        'show_ui' => true,
        'show_admin_column' => true,
        'update_count_callback' => '_update_post_term_count',
        'query_var' => true,
        'rewrite' => array('slug' => 'year'),
    ]);

    $labels = [
        'name' => _x('Country', 'taxonomy general name'),
        'singular_name' => _x('Country', 'taxonomy singular name'),
        'search_items' =>  __('Search Country'),
        'popular_items' => __('Popular Country'),
        'all_items' => __('All Country'),
        'parent_item' => null,
        'parent_item_colon' => null,
        'edit_item' => __('Edit Country'), 
        'update_item' => __('Update Country'),
        'add_new_item' => __('Add New Country'),
        'new_item_name' => __('New Country Name'),
        'separate_items_with_commas' => __('Separate Country with commas'),
        'add_or_remove_items' => __('Add or remove Country'),
        'choose_from_most_used' => __('Choose from the most used Country'),
        'menu_name' => __('Country'),
    ]; 
    register_taxonomy('Country','film',[
        'hierarchical' => true,
        'labels' => $labels,
        'show_ui' => true,
        'show_admin_column' => true,
        'update_count_callback' => '_update_post_term_count',
        'query_var' => true,
        'rewrite' => array('slug' => 'country'),
    ]);
}

function latest_films_shortcode(){
    $args = [
        'post_type' => 'film',
        'posts_per_page' => 5,
        'order' => 'DESC',
        'orderby' => 'ID'
    ];
    $the_query = new WP_Query( $args );
    $html = '<h2>Recent Films</h2>';
    foreach ($the_query->posts as $p) {
        $html .= '<a href="'.get_permalink($p->ID).'">'.$p->post_title.'</a><br>';
    }
    echo $html;
    wp_reset_postdata();
}
add_shortcode('latest_films', 'latest_films_shortcode');

function _dd($array, $true = true) {
    echo "<pre>";
    print_r($array);
    echo "</pre>";
    if($true) {
        exit;
    }
}