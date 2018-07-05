<?php
/**
 * Simple Machines Forum (SMF)
 *
 * @package SMF
 * @author Simple Machines http://www.simplemachines.org
 * @copyright 2017 Simple Machines and individual contributors
 * @license http://www.simplemachines.org/about/smf/license.php BSD
 *
 * @version 2.1 Beta 3
 */

/**
 * This pseudo-template defines all the theme options
 */
function template_options()
{
	global $context, $txt;

	$context['theme_options'] = array(
		$txt['theme_opt_calendar'],
		array(
			'id' => 'calendar_start_day',
			'label' => $txt['calendar_start_day'],
			'options' => array(
				0 => $txt['days'][0],
				1 => $txt['days'][1],
				6 => $txt['days'][6],
			),
			'default' => true,
		),
		$txt['theme_opt_display'],
		array(
			'id' => 'show_children',
			'label' => $txt['show_children'],
			'default' => true,
		),
		array(
			'id' => 'topics_per_page',
			'label' => $txt['topics_per_page'],
			'options' => array(
				0 => $txt['per_page_default'],
				5 => 5,
				10 => 10,
				25 => 25,
				50 => 50,
			),
			'default' => true,
		),
		array(
			'id' => 'messages_per_page',
			'label' => $txt['messages_per_page'],
			'options' => array(
				0 => $txt['per_page_default'],
				5 => 5,
				10 => 10,
				25 => 25,
				50 => 50,
			),
			'default' => true,
		),
		array(
			'id' => 'view_newest_first',
			'label' => $txt['recent_posts_at_top'],
			'default' => true,
		),
		array(
			'id' => 'show_no_avatars',
			'label' => $txt['show_no_avatars'],
			'default' => true,
		),
		array(
			'id' => 'show_no_signatures',
			'label' => $txt['show_no_signatures'],
			'default' => true,
		),
		array(
			'id' => 'posts_apply_ignore_list',
			'label' => $txt['posts_apply_ignore_list'],
			'default' => false,
		),
		$txt['theme_opt_posting'],
		array(
			'id' => 'return_to_post',
			'label' => $txt['return_to_post'],
			'default' => true,
		),
		array(
			'id' => 'auto_notify',
			'label' => $txt['auto_notify'],
			'default' => true,
		),
		array(
			'id' => 'wysiwyg_default',
			'label' => $txt['wysiwyg_default'],
			'default' => false,
		),
		array(
			'id' => 'use_editor_quick_reply',
			'label' => $txt['use_editor_quick_reply'],
			'default' => true,
		),
		array(
			'id' => 'drafts_autosave_enabled',
			'label' => $txt['drafts_autosave_enabled'],
			'default' => true,
		),
		array(
			'id' => 'drafts_show_saved_enabled',
			'label'  => $txt['drafts_show_saved_enabled'],
			'default' => true,
		),
		$txt['theme_opt_moderation'],
		array(
			'id' => 'display_quick_mod',
			'label' => $txt['display_quick_mod'],
			'options' => array(
				0 => $txt['display_quick_mod_none'],
				1 => $txt['display_quick_mod_check'],
				2 => $txt['display_quick_mod_image'],
			),
			'default' => true,
		),
		$txt['theme_opt_personal_messages'],
		array(
			'id' => 'popup_messages',
			'label' => $txt['popup_messages'],
			'default' => true,
		),
		array(
			'id' => 'view_newest_pm_first',
			'label' => $txt['recent_pms_at_top'],
			'default' => true,
		),
		array(
			'id' => 'pm_remove_inbox_label',
			'label' => $txt['pm_remove_inbox_label'],
			'default' => true,
		),
	);
}

/**
 * This pseudo-template defines all the available theme settings (but not their actual values)
 */
function template_settings()
{
	global $context, $scripturl, $txt;

	$context['theme_settings'] = array(
		array(
			'id' => 'header_logo_url',
			'label' => $txt['header_logo_url'],
			'description' => $txt['header_logo_url_desc'],
			'type' => 'text',
		),
		array(
			'id' => 'site_slogan',
			'label' => $txt['site_slogan'],
			'description' => $txt['site_slogan_desc'],
			'type' => 'text',
		),
		array(
			'id' => 'smiley_sets_default',
			'label' => $txt['smileys_default_set_for_theme'],
			'options' => $context['smiley_sets'],
			'type' => 'text',
		),
	'',
		array(
			'id' => 'enable_news',
			'label' => $txt['enable_random_news'],
		),
	'',
		array(
			'id' => 'show_newsfader',
			'label' => $txt['news_fader'],
		),
		array(
			'id' => 'newsfader_time',
			'label' => $txt['admin_fader_delay'],
			'type' => 'number',
		),
		array(
			'id' => 'number_recent_posts',
			'label' => $txt['number_recent_posts'],
			'description' => $txt['zero_to_disable'],
			'type' => 'number',
		),
		array(
			'id' => 'show_stats_index',
			'label' => $txt['show_stats_index'],
		),
		array(
			'id' => 'show_latest_member',
			'label' => $txt['latest_members'],
		),
		array(
			'id' => 'show_group_key',
			'label' => $txt['show_group_key'],
		),
		array(
			'id' => 'display_who_viewing',
			'label' => $txt['who_display_viewing'],
			'options' => array(
				0 => $txt['who_display_viewing_off'],
				1 => $txt['who_display_viewing_numbers'],
				2 => $txt['who_display_viewing_names'],
			),
			'type' => 'number',
		),
	'',
		array(
			'id' => 'og_image',
			'label' => $txt['og_image'],
			'description' => $txt['og_image_desc'],
			'type' => 'url',
		),
		array(
			'id' => 'foter_divbox',
			'label' => $txt['foter_divbox'],
		),
		array(
			'id' => 'foter_title1',
			'label' => $txt['foter_title1'],
			'type' => 'text',
		),
		array(
			'id' => 'foter_divbox1',
			'label' => $txt['foter_divbox1'],
			'description' => $txt['divbox_desc'],
			'type' => 'textarea',
		),
		array(
			'id' => 'foter_title2',
			'label' => $txt['title2'],
			'type' => 'text',
		),
		array(
			'id' => 'quicknav_but1',
			'label' => $txt['quicknav_but1'],
			'type' => 'text',
		),
		array(
			'id' => 'quicknav_url1',
			'label' => $txt['quicknav_url1'],
			'type' => 'text',
		),
		array(
			'id' => 'quicknav_but2',
			'label' => $txt['quicknav_but2'],
			'type' => 'text',
		),
		array(
			'id' => 'quicknav_url2',
			'label' => $txt['quicknav_url2'],
			'type' => 'text',
		),
		array(
			'id' => 'quicknav_but3',
			'label' => $txt['quicknav_but3'],
			'type' => 'text',
		),
		array(
			'id' => 'quicknav_url3',
			'label' => $txt['quicknav_url3'],
			'type' => 'text',
		),
		array(
			'id' => 'quicknav_but4',
			'label' => $txt['quicknav_but4'],
			'type' => 'text',
		),
		array(
			'id' => 'quicknav_url4',
			'label' => $txt['quicknav_url4'],
			'type' => 'text',
		),
		array(
			'id' => 'quicknav_but5',
			'label' => $txt['quicknav_but5'],
			'type' => 'text',
		),
		array(
			'id' => 'quicknav_url5',
			'label' => $txt['quicknav_url5'],
			'type' => 'text',
		),
		array(
			'id' => 'foter_title3',
			'label' => $txt['title3'],
			'type' => 'text',
		),
		array(
			'id' => 'facebook_url',
			'label' => $txt['facebook_url'],
			'type' => 'text',
		),
		array(
			'id' => 'twitter_url',
			'label' => $txt['twitter_url'],
			'type' => 'text',
		),
		array(
			'id' => 'youtube_url',
			'label' => $txt['youtube_url'],
			'type' => 'text',
		),
		array(
			'id' => 'dribble_url',
			'label' => $txt['dribble_url'],
			'type' => 'text',
		),
		array(
			'id' => 'vimeo_url',
			'label' => $txt['vimeo_url'],
			'type' => 'text',
		),
		array(
			'id' => 'googleplus_url',
			'label' => $txt['googleplus_url'],
			'type' => 'text',
		),
		array(
			'id' => 'linkedin_url',
			'label' => $txt['linkedin_url'],
			'type' => 'text',
		),
		array(
			'id' => 'pinterest_url',
			'label' => $txt['pinterest_url'],
			'type' => 'text',
		),
		array(
			'id' => 'instagram_url',
			'label' => $txt['instagram_url'],
			'type' => 'text',
		),
		array(
			'id' => 'digg_url',
			'label' => $txt['digg_url'],
			'type' => 'text',
		),
		array(
			'id' => 'quicknav_but6',
			'label' => $txt['quicknav_but6'],
			'type' => 'text',
		),
		array(
			'id' => 'quicknav_url6',
			'label' => $txt['quicknav_url6'],
			'type' => 'text',
		),
	);
}

?>