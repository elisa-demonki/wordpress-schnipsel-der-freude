<?php
Plugin Name: CDF - Woocommerce _customer_ip_address
Quelle: toscho - https://gist.github.com/glueckpress/8335883

function mp1401091554( $null, $id, $key ) {
    if ( '_customer_ip_address' === $key )
        return FALSE;

    return $null;
}

add_filter( 'update_post_metadata', 'mp1401091554', 10, 3 );
