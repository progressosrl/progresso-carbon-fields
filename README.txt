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

This plugins is used by Progresso srl in order to use Carbon Fields as a plugin with autoupdate capability.
You can find the documentation at https://docs.carbonfields.net


== Installation ==

You can install it by one of the following methods:
* Uploading the plugin files to the `/wp-content/plugins/progresso-carbon-fields` directory.
* Downloading the ZIP file and then uplaoding it using the admin panel
* By using TGMPA with the following source
https://github.com/progressosrl/progresso-carbon-fields/archive/master.zip


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
