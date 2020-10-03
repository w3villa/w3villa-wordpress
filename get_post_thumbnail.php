Get Post Thumbnail : 
// without parameter -> Post Thumbnail (as set by theme using set_post_thumbnail_size())
get_the_post_thumbnail( $post_id );                   
 
get_the_post_thumbnail( $post_id, 'thumbnail' );      // Thumbnail (Note: different to Post Thumbnail)
get_the_post_thumbnail( $post_id, 'medium' );         // Medium resolution
get_the_post_thumbnail( $post_id, 'large' );          // Large resolution
get_the_post_thumbnail( $post_id, 'full' );           // Original resolution
 
get_the_post_thumbnail( $post_id, array( 100, 100) ); // Other resolutions
