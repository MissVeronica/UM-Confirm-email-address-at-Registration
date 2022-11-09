<?php

add_action( 'um_submit_form_errors_hook', 'confirm_user_email_textbox', 100, 1 );
function confirm_user_email_textbox( $args ){

	if ( isset( $args['user_email'] ) && isset( $args['confirm_user_email'] ) && $args['confirm_user_email'] != $args['user_email'] ) {
        UM()->form()->add_error( 'user_email', 'Your email addresses are different' );
        UM()->form()->add_error( 'confirm_user_email', 'Your email addresses are different' );
    } 
}
