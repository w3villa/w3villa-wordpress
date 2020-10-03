Get User :

<?php $user = get_user_by( 'email', 'user@example.com' );
echo 'User is ' . $user->first_name . ' ' . $user->last_name; ?> 

Get Current User Details :

<?php
$current_user = wp_get_current_user();
printf( __( 'Username: %s', 'textdomain' ), esc_html( $current_user->user_login ) ) . '<br />';
printf( __( 'User email: %s', 'textdomain' ), esc_html( $current_user->user_email ) ) . '<br />';
printf( __( 'User first name: %s', 'textdomain' ), esc_html( $current_user->user_firstname ) ) . '<br />';
printf( __( 'User last name: %s', 'textdomain' ), esc_html( $current_user->user_lastname ) ) . '<br />';
printf( __( 'User display name: %s', 'textdomain' ), esc_html( $current_user->display_name ) ) . '<br />';
printf( __( 'User ID: %s', 'textdomain' ), esc_html( $current_user->ID ) );
?>


Get current user role by ID :

<?php $user = wp_get_current_user();
echo $user->roles[0];
?>
