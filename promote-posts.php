<?php
/**
 * @package Promote Posts Plugin by Global Food Book
 * @version 1.0
 */
/*
Plugin Name: Promote Posts Plugin
Plugin URI: http://wordpress.org/extend/plugins/gfb-promote-post/
Description: This plugin is an extract from <a href='http://globalfoodbook.com' target='_blank'>globalfoodbook.com</a>. This assists with delivery and promotion of post on social networks.
Author: Ikenna N. Okpala
Version: 1.0
Author URI: http://ikennaokpala.com/
*/

// File Security Check
if (!empty($_SERVER['SCRIPT_FILENAME']) && basename(__FILE__) == basename($_SERVER['SCRIPT_FILENAME'])) {
    die('You do not have sufficient permissions to access this page');
}

// Hook for adding admin menus
add_action('admin_menu', 'promote_posts_pages');

// action function for above hook
function promote_posts_pages() {
  // Add a new top-level menu:
  add_menu_page(__('Promote Posts Plugin by Global Food Book','menu-gfb-promote-posts'), __('Promote Posts','menu-gfb-promote-posts'), 'manage_options', 'gfb-promote-posts-settings', 'promote_posts_view' );

}

function promote_posts_view() {?>
  <h1 id="promote-posts-main-title">
    <?php
      echo __('Promote Posts', 'menu-gfb-promote-posts');
    ?>
  </h1>
<?php
}
?>
