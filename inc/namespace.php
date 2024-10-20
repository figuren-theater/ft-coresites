<?php
/**
 * Figuren_Theater ft_coresites.
 *
 * @package figuren-theater/ft-coresites
 */

namespace Figuren_Theater\ft_coresites;

use Altis;
use function Altis\register_module;


/**
 * Register module.
 */
function register() {

	$default_settings = [
		'enabled'         => false, // Needs to be set.
		'shortcodes'      => true,
		'core-post-types' => ['PSEUDO_PT_level'],
		'wporg-themes'    => false,
	];
	$options = [
		'defaults' => $default_settings,
	];

	Altis\register_module(
		'ft-coresites',
		DIRECTORY,
		'ft_coresites',
		$options,
		__NAMESPACE__ . '\\bootstrap'
	);
}

/**
 * Bootstrap module, when enabled.
 *
 * @return void
 */
function bootstrap() :void {

	// Plugins
	//...\bootstrap();
	
	// Best practices
	//...\bootstrap();
}
