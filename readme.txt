=== BreweryDB ===
Contributors: PintLabs L.L.C.
Donate link: http://www.brewerydb.com/
Tags: beer, breweries, craft beer, craftbeer, brewerydb, pintlabs, beer library
Requires at least: 3.0
Tested up to: 3.5.1
Stable tag: 2.1.0

The BreweryDB plugin allows you to display information in your posts about beers and breweries.

== Description ==

The BreweryDB plugin allows you to display information in your posts about beers and breweries.
This plugin uses the BreweryDB API to retrieve data and you must register for a BreweryDB API Key at http://www.brewerydb.com/developers

== Installation ==

1. Upload brewery-db folder into your plguins directory
2. Activate the plugin through the 'Plugins' menu in WordPress

Shortcode usage
	[brewerydb_brewery id=brewery-id]
	[brewerydb_beer id=beer-id]
    [brewerydb_featred type=beer] or [brewerydb_featred type=brewery]

More usage examples in documentation.

== Frequently Asked Questions ==

= Where do you get the data from =

The BreweryDB Plugin is powered by http://www.brewerydb.com/

= How do I get brewery location information to show? =

To get the location information for a brewery to show up you will need to upgrade your api key to a premium subscription.  You can find out more information at http://www.brewerydb.com/developers/premium

== Screenshots ==
* No screenshots available at this time.

== Changelog ==
= 2.1.0 =
* Added new shortcode (featured)
* Updated shortcode. Prepend brewerydb_
* General Bug fixes

= 2.0.1 =
* Fixed css issue

= 2.0.0 =
* Updated plugin to work with BreweryDB V2 API
* Added backwords capatibility mode to allow for old BreweryDB Id's
* Remvoed some shortcode options.  Only brewery and beer with id's now work.

= 0.1.3 =
* index.php
* BreweryDb.php
* BreweryDb_Admin.php

= 0.1.2 =
* BreweryDb.php
* readme.txt

= 0.1.1 =
* readme.txt

= 0.1 =
* Initial Release

== Upgrade Notice ==

= 0.1.3 =
* Minor version number issue.

= 0.1.2 =
* Must upgrade.  Fix to css path

= 0.1 =
* Initial Release

== Arbitrary section ==
More information can be found at http://www.brewerydb.com/ or by contacting feedback@pintlabs.com
