== Plugin ==
Contributors: Progresso srl
Donate link: http://www.progresso.srl/
Tags: carbonfields, carbon fields, progresso
Requires at least: 4.5
Tested up to: 5.2
Stable tag: 5.2
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Plugin for Carbon Fields


== Description ==

This plugins is used by Progresso srl in order to use Carbon Fields as a plugin.
You can find the documentation at https://docs.carbonfields.net


== Installation ==

You can install it by one of the following methods:
* Uploading the plugin files to the `/wp-content/plugins/progresso-carbon-fields` directory.
* Downloading the ZIP file and then uplaoding it using the admin panel
* By using TGMPA with the following source
https://github.com/YahnisElsts/plugin-update-checker/archive/master.zip

== Usage ==

Remember that:
1. the namespace is Progresso\CarbonFields\ instead of CarbonFields\
2. helpers, actions and filters have been prefixed by progresso_
   As an example
   carbon_fields_fields_registered
   becomes
   progresso_carbon_fields_fields_registered


== Update the library ==

In order to update the package you have to:
1. fork the repository
2. set config/plugin.php as "development" environment
3. composer update the library
4. compile everything with `grunt build`
5. update the version in config/plugin.php and set config/plugin.php as "production" environment
6. git push the changes in the master branch
7. create a pull request

The admin has to:
1. accept the pull request
2. create a new "release"


== Changelog ==

= 3.1.3 =
* First release

= 0.5 =
* List versions from most recent at top to oldest at bottom.

== Upgrade Notice ==

= 1.0 =
Upgrade notices describe the reason a user should upgrade.  No more than 300 characters.

= 0.5 =
This version fixes a security related bug.  Upgrade immediately.
