Get Post Meta :

Get the meta for all keys for the current post:

<?php $meta = get_post_meta( get_the_ID() ); ?>
Get all meta for a single key for the current post:

<?php $key_1_values = get_post_meta( get_the_ID(), 'key_1' ); ?>
Get the first value of a meta key for the current post:

<?php $key_1_value = get_post_meta( get_the_ID(), 'key_1', true ); ?>
