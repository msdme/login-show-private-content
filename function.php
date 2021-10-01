<?php
/*
Plugin Name: Login Show Private Content
Plugin URI:  http://wiki-tech.ivosights.com
Description: Show Private Post To All logged in users
Version:     0.1
Author:      Masdi
Author URI:  http://wiki-tech.ivosights.com
License:     GPL2 etc
License URI: http://wiki-tech.ivosights.com

*/

function ws_private_posts_subscribers(){
    $roles=[  'administrator', 'editor', 'author', 'contributor', 'subscriber'];
    foreach($roles as $role){
        $getRole = get_role( $role );
        $getRole->add_cap( 'read_private_posts' );
        $getRole->add_cap( 'read_private_pages' );
    }
}
add_action( 'init', 'ws_private_posts_subscribers' );
