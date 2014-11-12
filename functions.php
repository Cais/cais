<?php
/**
 * Functions template for Cais Child-Theme of Opus Primus
 *
 * @package     Cais
 * @since       0.1
 *
 * @author      Edward Caissie <edward.caissie@gmail.com>
 * @copyright   Copyright (c) 2014, Edward Caissie
 *
 * This file is part of Cais.
 *
 * Opus Primus is free software; you can redistribute it and/or modify it under
 * the terms of the GNU General Public License version 2, as published by the
 * Free Software Foundation.
 *
 * You may NOT assume that you can use any other version of the GPL.
 *
 * This program is distributed in the hope that it will be useful, but WITHOUT
 * ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS
 * FOR A PARTICULAR PURPOSE. See the GNU General Public License for more details
 *
 * You should have received a copy of the GNU General Public License along with
 * this program; if not, write to:
 *
 *      Free Software Foundation, Inc.
 *      51 Franklin St, Fifth Floor
 *      Boston, MA  02110-1301  USA
 *
 * The license for this software can also likely be found here:
 * http://www.gnu.org/licenses/gpl-2.0.html
 *
 * @version     0.2
 * @date        July 20, 2014
 * Modified to use filtered values instead of $opus_defaults class object
 *
 * @version     1.1
 * @date        November 11, 2014
 * Enqueue `Opus Primus` (parent-theme) stylesheet
 */

/**
 * Styles and Scripts
 * Main styles and scripts to be enqueued for the theme
 *
 * @package  Cais
 * @since    1.1
 *
 * @uses     get_template_directory_uri
 * @uses     wp_enqueue_style
 * @uses     wp_get_theme
 *
 * @internal hooked to `wp_enqueue_scripts` action
 */
function cais_styles_and_scripts() {
	wp_enqueue_style( 'parent-theme-opus-primus', get_template_directory_uri() . '/style.css', array(), wp_get_theme()->parent()->get( 'Version' ), 'screen' );
}

add_action( 'wp_enqueue_scripts', 'cais_styles_and_scripts' );


/**
 * Number of Secondary Images Value
 * Set the number of secondary images
 *
 * @package  Cais
 * @since    1.0
 *
 * @internal hooked into `opus_number_of_secondary_images_value` filter
 *
 * @return int
 */
function cais_number_of_secondary_images_value() {
	return 5;
}

add_filter( 'opus_number_of_secondary_images_value', 'cais_number_of_secondary_images_value' );