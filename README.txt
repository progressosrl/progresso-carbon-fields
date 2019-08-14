== Plugin ==
Contributors: Progresso srl
Donate link: http://www.progresso.srl/
Tags: carbonfields
Requires at least: 4.5
Tested up to: 5.2
Stable tag: 5.2
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Plugin package for Carbon Fields

== Usage ==
You can find the documentation here: https://docs.carbonfields.net

Just remember that:
1) the namespace is Progresso\CarbonFields\ instead of CarbonFields\
2) helpers, actions and filters have been prefixed by progresso_
   carbon_fields_fields_registered
   becomes
   progresso_carbon_fields_fields_registered

== Update the library ==
In order to update the package you have to:
1) git clone the repository
2) composer update the library
3) compile everything with grunt
4) git push the changes
5) create a new version tag corresponding to the new version