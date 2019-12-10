<?php
if ( !defined('K_COUCH_DIR') ) die(); // cannot be loaded directly

//require_once( K_COUCH_DIR.'addons/cart/cart.php' );
//require_once( K_COUCH_DIR.'addons/inline/inline.php' );
//require_once( K_COUCH_DIR.'addons/extended/extended-folders.php' );
//require_once( K_COUCH_DIR.'addons/extended/extended-comments.php' );
//require_once( K_COUCH_DIR.'addons/extended/extended-users.php' );
//require_once( K_COUCH_DIR.'addons/routes/routes.php' );
//require_once( K_COUCH_DIR.'addons/jcropthumb/jcropthumb.php' );

// Template Grouping
if( defined('K_ADMIN') ){
    $FUNCS->add_event_listener( 'register_admin_menuitems', 'my_register_admin_menuitems' );

    function my_register_admin_menuitems(){
        global $FUNCS;
        
        $FUNCS->register_admin_menuitem( array('name'=>'_about_', 'title'=>'About', 'is_header'=>'1', 'weight'=>'1')  );
        $FUNCS->register_admin_menuitem( array('name'=>'_lifepatron_', 'title'=>'Life Patron', 'is_header'=>'1', 'weight'=>'2')  );
        $FUNCS->register_admin_menuitem( array('name'=>'_campus_', 'title'=>'Campur Outreach', 'is_header'=>'1', 'weight'=>'3')  );
        
    }
}