 <?php 
 if( ! defined( 'WP_UNINSTALL_PLUGIN' ) ) 			exit();
 //register_deactivation_hook($file, $function); 
 //register_deactivation_hook(plugin_dir_url(__FILE__), $function);  
 
 // Uninstall code goes here
 delete_post_meta_by_key( '_ecs_owp_copyright' ); 
 delete_post_meta_by_key( '_ecs_owp_like_count' ); 
 delete_post_meta_by_key( '_ecs_owp_count' ); 
 delete_post_meta_by_key( '_ecs_owp_icon' ); 


 ?> 