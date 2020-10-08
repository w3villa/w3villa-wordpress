Get Users by roles :

 <?php
			$blogusers = get_users( array( 
			//'role__in' => array('subscriber','administrator'),
			'role__in' => array('subscriber')
			) );
// Array of WP_User objects.
$dailyalertusers=array();
foreach ( $blogusers as $user ) {
	echo $user->user_email.'<br>';
	
}
?>
