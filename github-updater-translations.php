<?php
/**
 * Plugin Name:       GitHub Updater Language Pack
 * Plugin URI:        https://github.com/afragen/github-updater-translations
 * Description:       Translation files for the GitHub Updater plugin.
 * Version:           0.1.0
 * Author:            Andy Fragen
 * License:           GNU General Public License v2
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.html
 * Network:           true
 * GitHub Plugin URI: https://github.com/afragen/github-updater-translations
 * GitHub Languages:  https://github.com/afragen/github-updater-translations
 * GitHub Branch:     develop
 * Requires WP:       3.8
 * Requires PHP:      5.3
 */

// Load textdomain
load_plugin_textdomain( 'github-updater', false, __DIR__ . '/languages' );

// load for localhost using Pressmatic
//load_plugin_textdomain( 'github-updater', false, basename( __DIR__ ) . '/languages' );
