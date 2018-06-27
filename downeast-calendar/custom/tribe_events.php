<?php /* tribe events custom coding */

// allow text in output of price field of event calendar
add_filter( 'tribe_get_cost', 'cost_show_full_meta_field', 10, 2 );

function cost_show_full_meta_field( $cost, $post_id ) {
   $full_cost = tribe_get_event_meta( $post_id, '_EventCost', false );

   if ( isset( $full_cost[0] ) ) {
       return sanitize_text_field( $full_cost[0] );
   }

   return $cost;
}

// make the start date required (s.t. we can default it empty)
add_filter( 'tribe_events_community_required_fields', 'my_community_required_fields', 10, 1 );
function my_community_required_fields( $fields ) {

   if ( ! is_array( $fields ) ) {
       return $fields;
   }

   $fields[] = 'EventStartDate';

   return $fields;
}
// use action to show the recurring event msg
add_action("tribe_events_date_display", "eai_recurring_warning");
function eai_recurring_warning() {
  $eai_msg = '<tr>
      <td></td>
      <td><h3 class="eai-recur-txt">If you have a recurring event, please contact Ellsworth American news desk.</h3></td>
    </tr>';
    echo $eai_msg;
}
// use action to show entering date reminder.
add_action('tribe_events_community_before_the_datepickers', "eai_date_msg");
function eai_date_msg() {
  $eai_msg = '<h5 class="eai-warning">Please select the appropriate date for your event so it will display on the calendar correctly.</h3>';
    echo $eai_msg;
}
