<?php
/**
 * Carbon fields by Progresso srl
 *
 * Plugin Name:       Progresso Carbon Fields
 * Description:       Carbon Fields packaged as a plugin with autoupdater.
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

require_once(__DIR__ . '/vendor/autoload.php');

$config = include(__DIR__ . '/config/plugin.php');
define('PROGRESSO_CARBON_FIELDS', $config['version']);

// carbon fields boot
add_action('after_setup_theme', function() {
    Carbon_Fields\Carbon_Fields::boot();
});

// load the plugin update checker
if (!class_exists('Puc_v4p7_Factory')) {
    require_once(__DIR__ . '/libraries/plugin-update-checker/plugin-update-checker.php');
}
Puc_v4p7_Factory::buildUpdateChecker(
    'https://github.com/progressosrl/progresso-carbon-fields/',
    __FILE__,
    'progresso-carbon-fields'
);