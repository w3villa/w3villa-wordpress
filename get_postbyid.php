Get Posts by ID -

If you need special things—[shortcodes], paragraph tags, anything exciting—in the content, you should apply the filters as opposed to using do_shortcode().
$post   = get_post( $PostId );
$output =  apply_filters( 'the_content', $post->post_content );
 
To get the title for a post with ID 17:
$post_17 = get_post( 17 ); 
$title = $post_17->post_title;
