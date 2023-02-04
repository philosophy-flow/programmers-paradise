<?php

/**
 * If you are installing Timber as a Composer dependency in your theme, you'll need this block
 * to load your dependencies and initialize Timber. If you are using Timber via the WordPress.org
 * plug-in, you can safely delete this block.
 */
$composer_autoload = WP_CONTENT_DIR . '/vendor/autoload.php';
if (file_exists($composer_autoload)) {
    require_once $composer_autoload;
    $timber = new Timber\Timber();
}

// /**
//  * Sets the directories (inside your theme) to find .twig files
//  */
Timber::$dirname = array('templates');

// /**
//  * By default, Timber does NOT autoescape values. Want to enable Twig's autoescape?
//  * No prob! Just set this value to true
//  */
Timber::$autoescape = false;

// /**
//  * We're going to configure our theme inside of a subclass of Timber\Site
//  * You can move this to its own file and include here via php's include("MySite.php")
//  */
class ProgramersParadise extends Timber\Site {
    /** Add timber support. */
    public function __construct() {
        add_filter('timber/context', array($this, 'add_to_context'));
        add_filter('timber/twig', array($this, 'add_to_twig'));
        parent::__construct();
    }

    /** This is where you add some context
     *
     * @param string $context context['this'] Being the Twig's {{ this }}.
     */
    public function add_to_context($context) {
        $context['foo']   = 'bar';
        $context['stuff'] = 'I am a value set in your functions.php file';
        $context['notes'] = 'These values are available everytime you call Timber::context();';
        $context['menu']  = new Timber\Menu();
        $context['site']  = $this;
        return $context;
    }

    /** This is where you can add your own functions to twig.
     *
     * @param string | object $twig get extension.
     */
    public function add_to_twig($twig) {
        $twig->addExtension(new Twig\Extension\StringLoaderExtension());
        $twig->addFilter(new Twig\TwigFilter('myfoo', array($this, 'myfoo')));
        return $twig;
    }
}
new ProgramersParadise();
