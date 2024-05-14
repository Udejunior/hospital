<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * This file is generated by Webpack, do not edit it directly.
 */

return [
	'handle' => 'elementor-packages-documents',
	'src' => plugins_url( '/', __FILE__ ) . 'documents{{MIN_SUFFIX}}.js',
	'i18n' => [
		'domain' => 'elementor',
		'replace_requested_file' => true,
	],
	'type' => 'extension',
	'deps' => [
		'elementor-packages-store',
		'elementor-packages-v1-adapters',
		'react',
	],
];
