<?php
/**
 * Left sidebar check
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$sidebar_pos = get_theme_mod( 'understrap_sidebar_position' );

if ( 'left' === $sidebar_pos || 'both' === $sidebar_pos ) {
	get_template_part( 'sidebar-templates/sidebar', 'left' );
}
?>

<?php if ( 'both' === $sidebar_pos ) : ?>
<div class="col-md-6 content-area" id="primary">
<?php elseif ( 'left' === $sidebar_pos || 'right' === $sidebar_pos ) : ?>
<div class="col-md-8 content-area" id="primary">
<?php else : ?>
<div class="col-md content-area" id="primary">
<?php endif; ?>
