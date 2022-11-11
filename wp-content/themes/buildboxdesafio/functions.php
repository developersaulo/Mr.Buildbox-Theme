<?php
/**
 * BuildBoxCustomTheme's functions and definitions
 *
 * @package BuildBoxCustomTheme
 * @since BuildBoxCustomTheme 1.0
 */

/**
 * Primeiro, vamos definir a largura máxima do conteúdo com base no tema
 * design e folha de estilo.
 * Isso limitará a largura de todas as imagens e incorporações enviadas.
*/
if ( ! isset( $content_width ) ) {
	$content_width = 800; /* pixels */
}

if ( ! function_exists( 'buildboxcustom_setup' ) ) :
/**
 * created at 08.11.2022 13:46
 * Sets up theme defaults and registers support for various WordPress
 * features.
 *
 * It is important to set up these functions before the init hook so
 * that none of these features are lost.
 *
 * Observe que esta função está ligada ao gancho after_setup_theme
 * que é executado antes do gancho init. O gancho de inicialização é muito tardio
 * para alguns recursos, como indicar miniaturas de postagens de suporte.
 *
 * @since BuildboxTheme 1.0
 */
function buildboxcustom_setup() {

/**
 * Make theme available for translation.
 * Translations can be placed in the /languages/ directory.
 */

/*Funcionalidade para futura internacionalização do thema*/
load_theme_textdomain( 'buildboxcustom', get_template_directory() . '/languages' );

/**
* Add default posts and comments RSS feed links to <head>.
*/
add_theme_support( 'automatic-feed-links' );

/**
* Enable support for post thumbnails and featured images.
*/
add_theme_support( 'post-thumbnails' );

/**
* Let's define the Thumbnail Size for the single Post file
*/
add_image_size('smallest',300,300,true);

add_image_size('largest',800,800,true);

/**
* Enable support for menu creation in the Admin Area.
*/
add_theme_support( 'menu' );

/*Navigation Menu - Add support for two custom navigation menus*/
register_nav_menus( array(
    'top-menu'   => __( 'Top Menu', 'buildboxcustom' ),
    'footer-menu' => __( 'Footer Menu', 'buildboxcustom' )
) );


/*útil para permitir que os blogueiros escolham diferentes formatos e modelos com base no conteúdo da postagem.*/
/**
* Enable support for the following post formats:
* aside, gallery, quote, image, and video
*/
add_theme_support( 'post-formats',  array( 'aside', 'gallery', 'quote', 'image', 'video' ) );

/*Para Suporte de Tema em Temas de Bloco*/
add_theme_support( 'responsive-embeds' );
add_theme_support( 'editor-styles' );
add_theme_support( 'html5', array( 'style','script' ) );

/* Add support for block styles. */
add_theme_support( 'wp-block-styles' );

/* Enqueue editor styles. */
add_editor_style( 'editor-style.css' );

} endif; // buildboxcustom_setup

add_action( 'after_setup_theme', 'buildboxcustom_setup' );

function buildbox_theme_scripts() {

    wp_enqueue_style( 'style', get_stylesheet_uri() );

	wp_enqueue_style( 'stylebuildboxbootstrap', get_template_directory_uri() . '/assets/css/bootstrap-5.2.2/css/bootstrap.min.css', array(), '1.1', 'all' );

    wp_enqueue_style( 'stylebkg', get_template_directory_uri() . '/style.css', array(), '1.1', 'all' );

    /// /wp-includes/js/jquery/jquery.min.js?ver=3.6.1
    wp_enqueue_script( 'scriptJQuery', get_template_directory_uri() . '/assets/js/jquery.min.js', array( 'jquery' ), 1.1, true );

	wp_enqueue_script( 'scriptbuildbox', get_template_directory_uri() . '/assets/js/script.js', array( 'jquery' ), 1.1, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'buildbox_theme_scripts' );

/*remove error message*/
remove_action( 'shutdown', 'wp_ob_end_flush_all', 1 );