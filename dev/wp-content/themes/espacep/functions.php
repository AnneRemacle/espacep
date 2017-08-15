<?php

    // Defines custom post_types

    add_theme_support( 'post-thumbnails' );

    register_taxonomy( 'event-type', 'evenement', [
                            'label' => 'Types d‘événements',
                            'labels' => [
                                'singular_name' => 'Un type d‘événement'
                            ],
                            'public' => true ,
                            'description' => __( 'La description de l‘evenement', 'espacep' ),
                            'hierarchical' => true
                        ] );

    register_taxonomy_for_object_type( 'event-type', 'evénement' );

    register_post_type( 'evenement', [
            'label' => __('Événement', 'espacep'),
            'labels' => [
                        'singular_name' => __( 'Evénement', 'espacep' ),
                        'add_new' => __( 'Ajouter un nouvel événement', 'espacep')
            ],
            'description' => __( 'La liste de tous les événements de Espace P…', 'espacep'),
            'public' => true,
            'menu_position' => 5,
            'menu_icon' => 'dashicons-calendar-alt',
            'supports' => [ 'title', 'editor', 'thumbnail' ],
            'has_archive' => true
        ] );

    register_post_type( 'antenne', [
            'label' => __('Antenne', 'espacep'),
            'labels' => [
                        'singular_name' => __( 'Antenne', 'espacep' ),
                        'add_new' => __( 'Ajouter une nouvelle antenne', 'espacep')
            ],
            'description' => __( 'La liste de toutes les antennes de Espace P…', 'espacep'),
            'public' => true,
            'menu_position' => 5,
            'menu_icon' => 'dashicons-admin-home',
            'supports' => [ 'title', 'editor', 'thumbnail' ],
            'has_archive' => true
        ] );

    register_post_type( 'magazine', [
            'label' => __('Magazine', 'espacep'),
            'labels' => [
                        'singular_name' => __( 'Magazine', 'espacep' ),
                        'add_new' => __( 'Ajouter un nouveau magazine', 'espacep')
            ],
            'description' => __( 'La liste de tous les magazines de Espace P…', 'espacep'),
            'public' => true,
            'menu_position' => 5,
            'menu_icon' => 'dashicons-book',
            'supports' => [ 'title', 'editor', 'thumbnail' ],
            'has_archive' => true
        ] );

    register_post_type( 'partenaires', [
            'label' => __('Partenaires', 'espacep'),
            'labels' => [
                        'singular_name' => __( 'Partenaires', 'espacep' ),
                        'add_new' => __( 'Ajouter un nouveau partenaire', 'espacep')
            ],
            'description' => __( 'La liste de tous les partenaires de Espace P…', 'espacep'),
            'public' => true,
            'menu_position' => 5,
            'menu_icon' => 'dashicons-groups',
            'supports' => [ 'title', 'editor', 'thumbnail' ],
            'has_archive' => true
        ] );

    // Defines navigation menus
    register_nav_menu( 'header', __('Menu principal, affiché dans le header.', 'espacep') );
    register_nav_menu( 'espacep', __('Menu secondaire space p, affiché dans le footer.', 'espacep') );
    register_nav_menu( 'antennes', __('Menu secondaire antennes, affiché dans le footer et dans la page contact.', 'espacep') );

    // generate a custom excerpt, used on the homepage

    function get_the_custom_excerpt( $length = 150 ) {
        $excerpt = get_the_content();
        $excerpt = strip_shortcodes( $excerpt );
        $excerpt = strip_tags( $excerpt );
        return substr( $excerpt, 0, $length );
    }

    // get_the fait un return

    function the_custom_excerpt( $length = 250 ) {
        echo get_the_custom_excerpt( $length );
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

    function wpc_show_admin_bar() {
	return false;
}
add_filter('show_admin_bar' , 'wpc_show_admin_bar');

// page d'options

if( function_exists('acf_add_options_page') ) {
	// Page principale
	acf_add_options_page(array(
		'page_title'    => 'Options',
		'menu_title'    => 'Options',
		'menu_slug'     => 'options-generales',
		'capability'    => 'edit_posts',
		'redirect'      => true
	));
}

function disable_comment_url($fields) {
    $fields =  array(

      'author' =>
        '<div class="form__group small"><label for="author" class="form__label">' . __( 'Votre nom ou votre pseudo', 'espacep' ) . '</label> ' .
        '<input id="author" required name="author" type="text" class="form__input form__input--text" value="' . esc_attr( $commenter['comment_author'] ) .
        '" size="30"' . $aria_req . ' /></div>',

      'email' =>
      '<div class="form__group small"><label for="email" class="form__label">' . __( 'Votre adresse email', 'espacep' ) . '</label> ' .
      '<input id="email" required name="email" type="text" class="form__input form__input--text" value="' . esc_attr( $commenter['comment_email'] ) .
      '" size="30"' . $aria_req . ' /></div>',

      'job' =>
      '<div class="form__group small"><label for="job" class="form__label">' . __( 'Votre profession', 'espacep' ) . '</label> ' .
      '<input id="job" required name="job" type="text" class="form__input form__input--text" value="' . esc_attr( $commenter['comment_job'] ) .
      '" size="30"' . $aria_req . ' /></div>',

      'town' =>
      '<div class="form__group small"><label for="town" class="form__label">' . __( 'Votre ville d’origine', 'espacep' ) . '</label> ' .
      '<input id="town" required name="town" type="text" class="form__input form__input--text" value="' . esc_attr( $commenter['comment_town'] ) .
      '" size="30"' . $aria_req . ' /></div>',

    );
    unset($fields['url']);
    return $fields;
}
add_filter('comment_form_default_fields','disable_comment_url');

// Deplace form textarea after inputs
function move_comment_field_to_bottom( $fields ) {
    $comment_field = $fields['comment'];
    unset( $fields['comment'] );
    $fields['comment'] = $comment_field;
    return $fields;
}
add_filter( 'comment_form_fields', 'move_comment_field_to_bottom' );

add_action('comment_post', 'saveCommentMetas');
function saveCommentMetas($comment_id) {
    add_comment_meta($comment_id, 'job', $_POST['job'], true);
    add_comment_meta($comment_id, 'town', $_POST['town'], true);
}
