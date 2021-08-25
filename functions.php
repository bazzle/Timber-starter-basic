<?php

/**
 * default functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package wppt
 */
if (class_exists('Timber')) {

    /**
     * @desc Adding Timber functions
     */

    include 'functions/timber-functions.php';

    /**
     * @desc Initial set up of scripts and styles
     */

    include 'functions/setup/scripts.php';

    /**
     * @desc Clean up WordPress extras
     */
    include 'functions/setup/restrictions.php';

    /**
     * @desc Setup image sizes
     */
    include 'functions/setup/images.php';

    /**
     * @desc Setup custom posts
     */
    include 'functions/setup/settings.php';

    /**
     * @desc Adding post support
     */

    include 'functions/setup/post_support.php';

    /**
     * @desc Adding registering of menus
     */

    include 'functions/register/menus.php';

}