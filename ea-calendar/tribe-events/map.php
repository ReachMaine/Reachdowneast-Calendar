<?php
/**
 * Map View Template
 * The wrapper template for map view.
 *
 * Override this template in your own theme by creating a file at [your-theme]/tribe-events/map.php
 *
 * @package TribeEventsCalendar
 *
 */

if ( !defined('ABSPATH') ) { die('-1'); } ?>

<?php do_action( 'tribe_events_before_template' ); ?>

<!-- Google Map Container -->
<?php tribe_get_template_part( 'pro/map/gmap-container' ) ?>

<!-- Tribe Bar -->
<?php tribe_get_template_part( 'modules/bar' ); ?>
<div class="large-9 left columns">
	<!-- Main Events Content -->
	<?php tribe_get_template_part( 'pro/map/content') ?>
</div>
<div id="sidebar" class="large-3 columns right">
		<?php dynamic_sidebar( 'sidebar-main' ) ?>
</div>
<div class="tribe-clear"></div>

<?php do_action( 'tribe_events_after_template' ) ?>
