$get_terms_default_attributes = array (
            'taxonomy' => 'category', //empty string(''), false, 0 don't work, and return empty array
            'orderby' => 'name',
            'order' => 'ASC',
            'hide_empty' => true, //can be 1, '1' too
            'include' => 'all', //empty string(''), false, 0 don't work, and return empty array
            'exclude' => 'all', //empty string(''), false, 0 don't work, and return empty array
            'exclude_tree' => 'all', //empty string(''), false, 0 don't work, and return empty array
            'number' => false, //can be 0, '0', '' too
            'offset' => '',
            'fields' => 'all',
            'name' => '',
            'slug' => '',
            'hierarchical' => true, //can be 1, '1' too
            'search' => '',
            'name__like' => '',
            'description__like' => '',
            'pad_counts' => false, //can be 0, '0', '' too
            'get' => '',
            'child_of' => false, //can be 0, '0', '' too
            'childless' => false,
            'cache_domain' => 'core',
            'update_term_meta_cache' => true, //can be 1, '1' too
            'meta_query' => '',
            'meta_key' => array(),
            'meta_value'=> '',
    );


$terms = get_terms( array( 
    'taxonomy' => 'tax_name',
    'parent'   => 0
) );
