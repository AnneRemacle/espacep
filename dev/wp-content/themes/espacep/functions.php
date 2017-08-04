<?php

    // Defines custom post_types

    add_theme_support( 'post-thumbnails' );

    register_taxonomy( 'actu-type', 'actualite', [
                            'label' => 'Types d‘actualités',
                            'labels' => [
                                'singular_name' => 'Un type d‘actualité'
                            ],
                            'public' => true ,
                            'description' => __( 'La description de l‘actualité', 'csi' ),
                            'hierarchical' => true
                        ] );

    register_taxonomy_for_object_type( 'actu-type', 'actualité' );

    register_post_type( 'actualite', [
            'label' => __('Actualité', 'csi'),
            'labels' => [
                        'singular_name' => __( 'Actualité', 'csi' ),
                        'add_new' => __( 'Ajouter une nouvelle actualité', 'csi')
            ],
            'description' => __( 'La liste de toutes les actualités de CSI', 'csi'),
            'public' => true,
            'menu_position' => 5,
            'menu_icon' => 'dashicons-calendar-alt',
            'supports' => [ 'title', 'editor', 'thumbnail' ],
            'has_archive' => true
        ] );

        register_post_type( 'activite', [
                'label' => __('Activité', 'csi'),
                'labels' => [
                            'singular_name' => __( 'activite', 'csi' ),
                            'add_new' => __( 'Ajouter une nouvelle activité', 'csi')
                ],
                'description' => __( 'La liste de toutes les activités de CSI', 'csi'),
                'public' => true,
                'menu_position' => 5,
                'menu_icon' => 'dashicons-admin-customizer',
                'supports' => [ 'title', 'editor', 'thumbnail' ],
                'has_archive' => true
            ] );

        if( function_exists('acf_add_options_page') ) {
        	acf_add_options_page();
        }

        register_sidebar();


    // Defines navigation menus
    // register_nav_menu( 'header', __('Menu principal, affiché dans le header.', 'csi') );
    // register_nav_menu( 'footer', __('Menu secondaire csi, affiché dans le footer.', 'csi') );

    register_nav_menus( array(
    'header' => __('Menu principal, affiché dans le header.', 'csi'),
    'footer' => __('Menu secondaire csi, affiché dans le footer.', 'csi')
) );

    // generate a custom excerpt

    function get_the_custom_excerpt( $length = 150 ) {
        $excerpt = get_the_content();
        $excerpt = strip_shortcodes( $excerpt );
        $excerpt = strip_tags( $excerpt );
        return substr( $excerpt, 0, $length );
    }

    function get_the_activity_excerpt( $length = 150 ) {
        $excerpt = get_field('description');
        $excerpt = strip_shortcodes( $excerpt );
        $excerpt = strip_tags( $excerpt );
        return substr( $excerpt, 0, $length );
    }

    // get_the fait un return

    function the_custom_excerpt( $length = 150 ) {
        echo get_the_custom_excerpt( $length );
    }

    function the_activity_excerpt( $length = 150 ) {
        echo get_the_activity_excerpt( $length );
    }

    // Generate a link label containing the post_title

    function get_the_link_content($string, $replacement = '%s') {
        /*la classe sro (sreen readers only) est là pour cacher le span qui contient le nom de l'article tout en restant référencé et lisible par les lecteurs vocaux*/
        return str_replace($replacement, '<span class="sro">' . get_the_title() . '</span>' , __( $string, 'espacep'));
    }

    function the_link_content( $string, $replacement = '%s') {
        echo get_the_link_content( $string, $replacement );
    }

    // generates a custom menu array
    function b_get_menu_id($location) {
        $locations = get_nav_menu_locations();

        if ( isset($locations[$location])) {
            return $locations[$location];
        }
        return false;
    }

    function b_get_menu_items( $location ) {
        // location = le nom
        $navItems = [];

        foreach ( wp_get_nav_menu_items(b_get_menu_id($location)) as $obj ) {
            $item = new stdClass(); // stdClass = classe nulle, bêtement un conteneur d'objets
            $item -> url = $obj->url;
            $item -> label = $obj->title;
            $item -> icon = $obj->classes[0];
            array_push($navItems, $item);
        }
        return $navItems;
    }

    // Generates a language selection menu_position

    function b_get_languages() {
        $langItems = [];
        $rawItems = pll_the_languages([
            'echo' => false,
            'hide_if_empty' => false,
            'hide_if_no_translation' => false,
            'raw' => true
        ]);
        foreach ($rawItems as $arr) {
            $item = new stdClass();
            $item -> label = $arr['name'];
            $item -> url = $arr['url'];
            $item -> code = $arr['slug'];
            array_push($langItems, $item);
        }

        return $langItems;
    }

    /**
     * Generate custom search form
     *
     * @param string $form Form HTML.
     * @return string Modified form HTML.
     */
    function wpdocs_my_search_form( $form ) {
        $form = '<form role="search" method="get" id="searchform" class="searchform header__form" action="' . home_url( '/' ) . '" >
        <label class="screen-reader-text header__form--label" for="s">' . __( 'je recherche une information', 'espacep' ) . '</label>
        <input type="text" value="' . get_search_query() . '" name="s" id="s" class="header__form--input" placeholder="P.ex: manifeste" />
        <input type="submit" class="header__form--button" id="searchsubmit" value="'. esc_attr__( 'Rechercher' ) .'" />
        </div>
        </form>';

        return $form;
    }
    add_filter( 'get_search_form', 'wpdocs_my_search_form' );


    // ACF Google Maps

    function my_acf_init() {

        acf_update_setting('google_api_key', ' AIzaSyBDeuwdU6TD7s_exoHvquyikKKVTFQiGC0 ');
    }

    add_action('acf/init', 'my_acf_init');
