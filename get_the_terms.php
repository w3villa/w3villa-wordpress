$terms = get_the_terms( get_the_ID(), 'on-draught' );
                         
if ( $terms && ! is_wp_error( $terms ) ) : 
 
    $draught_links = array();
 
    foreach ( $terms as $term ) {
        $draught_links[] = $term->name;
    }
                         
    $on_draught = join( ", ", $draught_links );
    ?>
 
    <p class="beers draught">
        <?php printf( esc_html__( 'On draught: <span>%s</span>', 'textdomain' ), esc_html( $on_draught ) ); ?>
    </p>
<?php endif; ?>




Another example how to get custom post type taxonomies and separate them with commas.

$terms = get_the_terms( $post->ID , array( 'teams_positions') );
// init counter
$i = 1;
foreach ( $terms as $term ) {
 $term_link = get_term_link( $term, array( 'teams_positions') );
 if( is_wp_error( $term_link ) )
 continue;
 echo $term->name;
 //  Add comma (except after the last theme)
 echo ($i < count($terms))? " / " : "";
 // Increment counter
 $i++;
}
