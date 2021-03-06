<?php
/**
 * Docx custom post type runtime configuration parameters.
 *
 * @package     KnowTheCode\Docx\Custom
 * @since       1.0.0
 * @author      hellofromTonya
 * @link        https://UpTechLabs.io
 * @license     GNU General Public License 2.0+
 */

namespace KnowTheCode\Docx\Custom;

return [
	'autoload'       => true,
	'post_type_name' => 'docx',
	'config'         => [
		'plural_name'         => 'Docx',
		'singular_name'       => 'Docx',
		'args'                => [
			'public'       => true,
			'hierarchical' => true,
			'show_in_rest' => true,
			'has_archive'  => true,
			'taxonomies'   => [ 'technologies', 'catalog', 'skills' ],
			'menu_icon'    => 'dashicons-video-alt2',
			'description'  => 'Docx - Supplemental Documentation that doesn\'t suck',
			'rewrite'      => [
				'slug'       => 'docx',
				'with_front' => false,
			],
		],
		'labels'              => [
			'archive' => 'Docx',
		],
		'additional_supports' => [
			'author'                            => false,
			'comments'                          => false,
			'editor'                            => true,
			'excerpt'                           => false,
			'post-formats'                      => false,
			'trackbacks'                        => false,
			'custom-fields'                     => false,
			'revisions'                         => false,
			'page-attributes'                   => true,
			'ktc_library'                       => true,
			// Disable the Genesis supports.
			'genesis-entry-meta-before-content' => false,
			'genesis-entry-meta-after-content'  => false,
			'genesis-seo'                       => false,
			'genesis-scripts'                   => false,
			'genesis-layouts'                   => false,
			'genesis-rel-author'                => false,
		],
		'columns_filter'      => [
			'coming_soon' => 'Coming Soon',
		],
		'columns_data'        => [
			'coming_soon' => [
				'callback' => 'genesis_get_custom_field',
				'echo'     => true,
				'args'     => [ '_ktc_coming_soon' ],
			],
		],
	],
];
