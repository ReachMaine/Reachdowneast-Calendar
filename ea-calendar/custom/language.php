<?php
/* languages customizations
*/
	if ( !function_exists('reach_change_theme_text') ){
		function reach_change_theme_text( $translated_text, $text, $domain ) {
			 /* if ( is_singular() ) { */
			    switch ($domain) {
						case 'tribe-events-community':
							switch ( $translated_text ) {
					            case 'Start Date / Time:' :
					                $translated_text = __( 'Date / Time:',  'tribe-events-community'  );
					                break;
					           case 'End Date / Time:':
					            	$translated_text = __( 'End Time:',  'tribe-events-community'  );
					            	break;
					        }
							break; // end tribe-events-community
					default:
						/* switch ( $translated_text ) {
				            case 'Category' :
				                $translated_text = __( '',  $domain  );
				                break;
				         	case 'Type here...':
				            	$translated_text = __( 'Search...',  $domain  );
				            	break;
				            case 'BLOG CATEGORIES':
				            	$translated_text = __( 'Found in',  $domain  );
				            	break;
				            case 'Share this post:':
				            	$translated_text = __('Share', ' $domain );
				            	break;
				        } */

				}


	    	return $translated_text;
		} // end function reach_change_theme_text
		add_filter( 'gettext', 'reach_change_theme_text', 20, 3 );
	} // end if not exists reach_change_theme_text
?>
