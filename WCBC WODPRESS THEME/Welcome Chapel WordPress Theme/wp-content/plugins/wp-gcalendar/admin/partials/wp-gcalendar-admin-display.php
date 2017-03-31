<?php

/**
 * Provide a admin area view for the plugin
 *
 * This file is used to markup the admin-facing aspects of the plugin.
 *
 * @link       http://example.com
 * @since      1.0.0
 *
 * @package    Wp_Gcalendar
 * @subpackage Wp_Gcalendar/admin/partials
 */


$actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
$url = admin_url( 'admin.php?page=google-calendar-plg');
$url2 = admin_url( 'admin.php?page=google-calendar-event');
$url3 = admin_url( 'admin.php?page=google-calendar-settings');

function wpgc_infos(){
	global $wpdb;
	$table_name = $wpdb->prefix . "api_setting";
	$settings = $wpdb->get_row('select * from ' . $table_name ); ?>
	<div id="settings" priority = "<?php echo esc_attr($settings->priority); ?>" clientID = "<?php echo esc_attr($settings->clientID); ?>" calendarId = "<?php echo esc_attr($settings->calendarID); ?>" root="<?php echo plugins_url( '', __FILE__ ); ?>" hidden></div>
<?php 
}
add_action( 'wpgc_top', 'wpgc_infos');
if($url == $actual_link){
	do_action( 'wpgc_top');
}

require_once plugin_dir_path( __FILE__ ) . 'settings.php';

require_once plugin_dir_path( __FILE__ ) . 'events.php';

require_once plugin_dir_path( __FILE__ ) . 'functions.php';

require_once plugin_dir_path( __FILE__ ) . 'ajax-callback.php';

require_once plugin_dir_path( __FILE__ ) . 'shortcodes.php';

require_once plugin_dir_path( __FILE__ ) . 'widgets.php';

require_once plugin_dir_path( __FILE__ ) . 'documentation.php';


