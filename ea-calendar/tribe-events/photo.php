<?php
/**
 * Photo View Template
 * The wrapper template for photo view.
 *
 * Override this template in your own theme by creating a file at [your-theme]/tribe-events/photo.php
 *
 * @package TribeEventsCalendar
 *
 */

if ( !defined('ABSPATH') ) { die('-1'); } ?>

<?php do_action( 'tribe_events_before_template' ); ?>
<!-- Google Map Container -->
<?php /* tribe_get_template_part( 'pro/map/gmap-container' ) */ ?>

<!-- Tribe Bar -->
<?php tribe_get_template_part( 'modules/bar' ); ?>
<div class="large-9 left columns">
	<!-- Main Events Content -->
	<?php tribe_get_template_part( 'pro/photo/content' ) ?>
</div>
<div id="sidebar" class="large-3 columns right">
		<?php dynamic_sidebar( 'sidebar-main' ) ?>
</div>
<?php do_action( 'tribe_events_after_template' ) ?>
