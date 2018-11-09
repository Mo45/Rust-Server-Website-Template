<?php
/*
* This is a config file for Rust-Server-Website-Template
* Created by Kirill Krasin (https://krasin.in.ua)
* Latest versions - https://github.com/Mo45/Rust-Server-Website-Template
*/
	define( "VERSION","1.0.5" );
	define( "CSS_VER","070218" );
	define( "DEV_MODE","OFF" );

//======================================================================
// Global Site Config
//======================================================================

	define( "SITE_URL" , "https://demo.krasin.in.ua/" );
	# Your website URL

	define( "SRV_NAME" , "Mega Awesome Servers" );
        # Server or project name, will be used as title

        define( "SRV_SLOGAN" , "Mega Awesome Servers Slogan" );
        # Server or project slogan, will be used as slogan and description

        define( "SRV_TWITTER" , "rustserversinfo" );
        # Your server twitter username without @ (will be used in twitter meta tags and social links)

	define( "CACHE_LIFETIME" , "300" );
	# How often the cache is cleared (in seconds), set to "0" to disable caching

	define( "CONF_BGVID" , "ON" );
        # Fullscreen background video, change it to "OFF", if you want only image

//======================================================================
// Modules Config | By default all modules is enabled
//======================================================================

	define( "MODULE_SERVERS" , "ON" );
	# Server status module, ON/OFF

	define( "MODULE_COMMUNITY" , "ON" );
	# Steam Group module, ON/OFF

	/* How to find Steam Group ID 64 - https://support.multiplay.co.uk/support/solutions/articles/1000202859 */
        define( "STEAM_GID" , "103582791435542737" );
	# Your Steam Group ID64

	define( "MODULE_STORE" , "ON" );
	# External store module, ON/OFF

	define( "STORE_URL" , "https://lab.krasin.in.ua/rust/#store" );
	# URL to your store

	define( "MODULE_RULES" , "ON" );
	# Rules module, ON/OFF - Add or edit rules by edit this file --> /modules/rules.php <--

	define( "MODULE_SOCIAL" , "ON" );
        # Social module, ON/OFF

	define( "MODULE_STAFF" , "ON" );
	# Staff module, ON/OFF - Add or edit your staff members by edit this file --> /modules/staff.php <--

	define( "MODULE_CONTACT" , "ON" );
        # Contact module, ON/OFF - Add or edit template by edit this file --> /modules/contact.php <--

//======================================================================
// Social Links
//======================================================================

	define( "SRV_FACEBOOK" , "https://www.facebook.com/rustserversinfo/" );
	# Facebook Page link, leave blank to remove from page

	define( "SRV_VK" , "https://vk.com/" );
	# VK.com Page Link, leave blank to remove from page

//======================================================================
// Server Status Module Config
//======================================================================

//-----------------------------------------------------
// Server #1
//-----------------------------------------------------

	define( "SRV_ID_1","3" );
	# Your server #1 ID (Rust-Servers.Info)
	define( "SRV_1_DESC" , "This is short server description. Vanilla, Cool admins, etc." );
	# Your server #1 description

//-----------------------------------------------------
// Server #2
//-----------------------------------------------------

	define( "SRV_ID_2","2" );
	# Your server #2 ID (Rust-Servers.Info)
	define( "SRV_2_DESC" , "This is short server description. Vanilla, Cool admins, etc." );
	# Your server #2 description

// Extra servers

?>
