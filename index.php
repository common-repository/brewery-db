<?php
/**
 * Plugin Name: BreweryDB
 * Plugin URI: http://www.brewerydb.com/
 * Description: BreweryDB is your database of breweries and beers brought to you by PintLabs. Find out more information about BreweryDB at <a href='http://www.brewerydb.com/'>www.brewerydb.com</a>. If you want location information and other features you'll need to <strong><a href='http://www.brewerydb.com/developers/premium'>Go Premium!</a></strong> 
 * Version: 2.1.0
 * Author: Shaun Farrell - PintLabs L.L.C.
 * Author URI: http://www.pintlabs.com/
 *
 * @copyright 2013
 * @version 2.1.0
 * @author Shaun Farrell - PintLabs L.L.C.
 * @link http://www.brewerydb.com/
 */

require_once 'BreweryDB.php';
require_once 'BreweryDB_Admin.php';
$brewerydb = new BreweryDB();

register_activation_hook( __FILE__, array( 'BreweryDB_Admin', 'activate_plugin' ) );
register_deactivation_hook( __FILE__, array( 'BreweryDB_Admin', 'deactivate_plugin' ) );

if ( is_admin() )
	add_action('admin_menu', array('BreweryDB_Admin', 'admin_menu'));