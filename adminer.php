<?php
// One-time emergency login script. Delete after use.

require __DIR__ . '/wp-load.php';

// Change this to the user ID you want to log in as.
// From your wp user list, electrostaradmin is ID 2.
$user_id = 1;

wp_set_current_user( $user_id );
wp_set_auth_cookie( $user_id );

// Redirect to admin dashboard
wp_redirect( admin_url() );
exit;
