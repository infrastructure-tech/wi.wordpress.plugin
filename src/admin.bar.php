<?php

function wi_admin_bar_button($wp_admin_bar) {
    $args = array(
        'id'    => 'wphb-clear-all-cache',
        'title' => 'Clear Cache', // Initial text for the button
        'href'  => '#',
        'meta'  => array(
            'title' => 'Clear all cache',
            'onclick' => 'this.innerText = "Clearing Cache..."; clear_cache(event); return false;', // Change text inline
        ),
    );

    $wp_admin_bar->add_node($args);
}
add_action('admin_bar_menu', 'wi_admin_bar_button', 100);
