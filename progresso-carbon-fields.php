<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              http://example.com
 * @since             1.0.0
 * @package           Progresso_Carbon_Fields
 *
 * @wordpress-plugin
 * Plugin Name:       Progresso Carbon Fields
 * Plugin URI:        http://progresso.srl
 * Description:       Carbon fields for Progresso plugins
 * Version:           3.0.0
 * Author:            Progresso srl
 * Author URI:        http://progresso.srl
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
    require __DIR__ . '/libraries/plugin-update-checker/plugin-update-checker.php';
    $myUpdateChecker = new Puc_v4p7_Vcs_PluginUpdateChecker(
        new Puc_v4p7_Vcs_GitLabApi('https://git.progresso.srl/cristiano/wordpress-progresso-carbon-fields'),
        __FILE__,
        'progresso-carbon-fields'
    );
    $myUpdateChecker->setBranch('master');
} else {
    require_once(__DIR__ . "/vendor/autoload.php");
}