<?php
/* DEFINE FILE DIRECTORIES */
define('ZENITE_ADMIN', get_template_directory()  . '/functions/admin');
define('ZENITE_JS', get_template_directory_uri() . '/js');
define('ZENITE_IMAGES', get_template_directory_uri() . '/images');
define('TRUETHEMES', get_template_directory()  . '/functions/truethemes');

$lang = TEMPLATEPATH . '/languages';
load_theme_textdomain('zenite', $lang);



/* LOAD GLOBAL ELEMENTS */
require_once(ZENITE_ADMIN . '/main.php');
require_once(ZENITE_ADMIN . '/panels.php');
require_once(ZENITE_ADMIN . '/shortcodes.php');
require_once(ZENITE_ADMIN . '/javascript.php');
require_once(ZENITE_ADMIN . '/buttons.php');
require_once(ZENITE_ADMIN . '/portfolio.php');
require_once(ZENITE_ADMIN . '/nhp-options.php');
require_once(ZENITE_ADMIN . '/color.php');
require_once(ZENITE_ADMIN . '/class-tgm-plugin-activation.php');
require_once(ZENITE_ADMIN . '/plugins.php');

add_filter('the_content', 'shortcode_empty_paragraph_fix');

    function shortcode_empty_paragraph_fix($content)
    {
        $array = array (
            '<p>[' => '[',
            ']</p>' => ']',
            ']<br />' => ']'
        );

        $content = strtr($content, $array);

        return $content;
    }

?>