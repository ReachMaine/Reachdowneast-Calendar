<?php /* mods
  - add header backgroundimage to whole header
  - add header widget area (to be used for top banner ads)
*/
    global $be_themes_data;
	extract( be_themes_header_details() );
?>

<header id="header" <?php /* zig */ $background_image = $be_themes_data['opt-header-color']['background-image']; if ($background_image) echo 'style="background: transparent url('.$background_image.') no-repeat  left top; background-size: cover;"; ' ?> >
	<?php
		get_template_part( 'headers/top/header', 'top-bar' );
	?>
	<div id="header-inner-wrap" class="<?php echo $header_class; echo ' '.$header_style; ?>" <?php echo ' '.$full_screen_header_scheme; ?>>
		<?php
			extract(be_themes_calculate_logo_height());
			if((!empty($header_transparent) && isset($header_transparent) && 'none' != $header_transparent)) {
				$default_header_height = $logo_transparent_height;
			} else {
				$default_header_height = $logo_height;
			}
		?>
			<div id="header-wrap" class="<?php if($be_themes_data['opt-header-wrap']){?>be-wrap<?php } ?> clearfix" data-default-height="<?php echo $default_header_height; ?>" data-sticky-height="<?php echo $logo_sticky_height; ?>">
					<div id="header-controls-left">
						<?php
							if($be_themes_data['opt-header-pos']['left']) {
								foreach ($be_themes_data['opt-header-pos']['left'] as $key => $value) {
									be_themes_get_header_widgets($key);
								}
							}
						?>
					</div>
					<?php
						get_template_part( 'headers/top/header', 'items' );

          // zig add above content CTA widget
      		if (is_active_sidebar('reach-header-widgetarea')) {
       				echo '<div id="reach-header-widget" class="clearfix">';
       					echo '<div id="reach-header-widget-wrap" class="be-wrap be-row ">';
       						dynamic_sidebar( 'reach-header-widgetarea');
       					echo '</div>';
       				echo '</div>';
       		}
        	?>
			</div>

			<?php
				be_themes_header_border();
			?>
				<div id="header-bottom-bar">
					<div id="header-bottom-bar-wrap" class="<?php if($be_themes_data['opt-header-wrap']){?>be-wrap<?php } ?> clearfix">
						<nav id="navigation" class="clearfix">	<?php
						be_themes_get_header_navigation();?>
						</nav><!-- End Navigation -->
					</div>
				</div>
		<?php
			be_themes_get_header_mobile_navigation();
		?>
	</div>
</header> <!-- END HEADER style 2-->
