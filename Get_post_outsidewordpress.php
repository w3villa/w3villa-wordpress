<?php
require __DIR__ . '/wp-load.php';


	
 	//$arr_request = json_decode( $request->get_body() );
		
	$fdate = '2020-06-16';
	$tdate = '2020-06-17';
	$datetype = 'post_modified';
	


    $fromdate = date_parse_from_format("Y-m-d", $fdate);
    $todate = date_parse_from_format("Y-m-d", $tdate);  
		
		
	$args = [
		'posts_per_page' => 1,
		'post_type' => 'post',
		'date_query' => array(
		                //'column' => 'post_date',
						'column' => $datetype,
						'after' => $fdate,
						'before' => $tdate,
						'inclusive' => true
					  ),
		];  




// 	$posts = get_posts($args);
$query = new WP_Query($args);
$totalpost = $query->found_posts; 
$posts = $query->posts;


//echo $totalpost; die;

	$data = array();
	$i = 0;
if(!empty($posts))
{
	foreach($posts as $post) {
	
  $title = $post->post_title;
	$content = $post->post_content;
  
	}
}


