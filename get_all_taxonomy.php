<?php
$taxonomies = get_taxonomies();
if ( ! empty( $taxonomies ) ) : ?>
    <ul>
        <?php
        foreach ( $taxonomies as $taxonomy ) {
            echo '<li>' . $taxonomy . '</li>';
        }
        ?>
    </ul>
<?php endif; ?>
