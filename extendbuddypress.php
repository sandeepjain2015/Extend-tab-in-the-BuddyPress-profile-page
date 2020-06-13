<?php
/**
 * Extend tab in the BuddyPress profile page.
 *
 * @package buddypress
 */

/**
 * Add test tab.
 */
function profile_tab_testname() {
	global $bp;
	bp_core_new_nav_item(
		array( 
			'name'                => 'Test', 
			'slug'                => 'test', 
			'screen_function'     => 'test_screen', 
			'position'            => 40,
			'parent_url'          => bp_loggedin_user_domain() . '/test/',
			'parent_slug'         => $bp->profile->slug,
			'default_subnav_slug' => 'test',
		) 
	);
}
add_action( 'bp_setup_nav', 'profile_tab_testname' );
/**
 * Add test screen.
 */
function test_screen() {
	// Add title and content here - last is to call the members plugin.php template.
	add_action( 'bp_template_title', 'test_title' );
	add_action( 'bp_template_content', 'test_content' );
	bp_core_load_template( 'buddypress/members/single/plugins' );
}
/**
 * Add test title.
 */
function test_title() {
	echo 'Test';
}
/**
 * Add test content.
 */
function test_content() { 
	echo 'Test';
}
