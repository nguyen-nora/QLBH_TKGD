<?php
/**
 * backend/config.php
 *
 * Author: pixelcave
 *
 * Backend pages configuration file
 *
 */

// **************************************************************************************************
// INCLUDED VIEWS
// **************************************************************************************************

$cb->inc_side_overlay           = 'inc/backend/views/inc_side_overlay.php';
$cb->inc_sidebar                = 'inc/backend/views/inc_sidebar.php';
$cb->inc_header                 = 'inc/backend/views/inc_header.php';
$cb->inc_footer                 = 'inc/backend/views/inc_footer.php';


// **************************************************************************************************
// MAIN MENU
// **************************************************************************************************

$cb->main_nav                   = array(
    array(
        'name'  => 'Dashboard',
        'icon'  => 'fa fa-house-user',
        'url'   => 'dashboard.php'
    ),
    array(
        'name'  => 'Orders',
        'icon'  => 'fa fa-shopping-cart',
        'url'   => 'orders.php'
    ),
    array(
        'name'  => 'Order',
        'icon'  => 'fa fa-shopping-cart',
        'url'   => 'order.php'
    ),
    array(
        'name'  => 'Products',
        'icon'  => 'fa fa-product-hunt',
        'url'   => 'products.php'
    ),
    array(
        'name'  => 'Product Edit',
        'icon'  => 'fa fa-boxes',
        'url'   => 'product_edit.php'
    ),
    array(
        'name'  => 'Customer',
        'icon'  => 'fa fa-users',
        'url'   => 'customer.php'
    )
);
