<?php
/**
 * Carbon fields by Progresso srl
 *
 * Plugin Name:       Progresso Carbon Fields
 * Description:       Carbon Fields provided by Progresso srl as a plugin
 * Version:           3.1.3
 * Requires at least: 4.9
 * Tested up to:	  5.2.2
 * Author:            Progresso srl
 * Author URI:        https://www.progresso.srl
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       progresso-carbon-fields
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if (!defined('WPINC')) {
    die;
}

$config = include(__DIR__ . '/config/plugin.php');

define('PROGRESSO_CARBON_FIELDS', $config['version']);

if ($config['environment'] === 'production') {
    if (file_exists(__DIR__ . "/build/vendor/scoper-autoload.php")) {
        require_once(__DIR__ . "/build/vendor/scoper-autoload.php");
    } else {
        require_once(__DIR__ . "/build/vendor/autoload.php");
    }

    // load the plugin update checker
    $pluginUpdateChecker = realpath(plugin_dir_path(__FILE__).'/../progresso-framework/libraries/plugin-update-checker/plugin-update-checker.php');
    if (file_exists($pluginUpdateChecker)) {
        require_once $pluginUpdateChecker;

        Puc_v4_Factory::buildUpdateChecker(
            'https://github.com/progressosrl/progresso-carbon-fields/',
            __FILE__,
            'progresso-carbon-fields'
        );
    }
} else {
    require_once(__DIR__ . "/vendor/autoload.php");
}