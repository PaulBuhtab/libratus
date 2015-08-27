<?php
/*	Libratus Theme Options
================================================== */
// 	force UTF-8 Ø
class ThemeOptions {

	function ThemeOptions() {
		// force core theme options for this theme
		setThemeOption('albums_per_row',3,null,'libratus');
		setThemeOption('images_per_row',6,null,'libratus');
		setThemeOption('image_use_side','longest',null,'libratus');
		setThemeOptionDefault('image_size', 800, null, 'libratus');
		setThemeOption('image_use_side', 'longest', null, 'libratus');
		setThemeOption('thumb_size', 300, null, 'libratus');
		// set core theme option defaults
		setThemeOptionDefault('albums_per_page',15);
		setThemeOptionDefault('images_per_page',30); 
		setThemeOptionDefault('thumb_crop',false); 
		// set libratus option defaults
		setThemeOptionDefault('libratus_maxwidth', '1400');
		setThemeOptionDefault('libratus_ss_type', 'random');
		setThemeOptionDefault('libratus_ss_album', '');
		setThemeOptionDefault('libratus_ss_interval', 5000);
		setThemeOptionDefault('libratus_index_fullwidth', false);
		setThemeOptionDefault('libratus_date_albums', true);
		setThemeOptionDefault('libratus_date_images', true);
		setThemeOptionDefault('libratus_date_news', true);
		setThemeOptionDefault('libratus_date_pages', true);
		setThemeOptionDefault('libratus_social', true);
		setThemeOptionDefault('libratus_download', true);
		setThemeOptionDefault('libratus_customcss', '');
		setThemeOptionDefault('libratus_facebook', '');
		setThemeOptionDefault('libratus_twitter', '');
		setThemeOptionDefault('libratus_google', '');
		setThemeOptionDefault('libratus_copy', '© '.date("Y"));
		setThemeOptionDefault('libratus_analytics','');
		setThemeOptionDefault('libratus_analytics_type','universal');
		setThemeOptionDefault('libratus_stats_images_popular', true);
		setThemeOptionDefault('libratus_stats_images_latestbyid', true); 
		setThemeOptionDefault('libratus_stats_images_mostrated', true); 
		setThemeOptionDefault('libratus_stats_images_toprated', true);
		setThemeOptionDefault('libratus_stats_albums_popular', true); 
		setThemeOptionDefault('libratus_stats_albums_latestbyid', true); 
		setThemeOptionDefault('libratus_stats_albums_mostrated', true); 
		setThemeOptionDefault('libratus_stats_albums_toprated', true); 
		setThemeOptionDefault('libratus_stats_albums_latestupdated', true);
		setThemeOptionDefault('libratus_stats_number', 30);
		setThemeOptionDefault('libratus_bottom_stats_number', 5);
		setThemeOptionDefault('libratus_bottom_stats_perrow', 3);
		setThemeOptionDefault('libratus_stats_images_popular_bottom', true);
		setThemeOptionDefault('libratus_stats_images_latestbyid_bottom', true);
		setThemeOptionDefault('libratus_stats_images_toprated_bottom', true);
		setThemeOptionDefault('libratus_related_maxnumber', 10);
		if (class_exists('cacheManager')) {
			$me = basename(dirname(__FILE__));
			cacheManager::deleteThemeCacheSizes($me);
			cacheManager::addThemeCacheSize($me, getThemeOption('image_size'), NULL, NULL, NULL, NULL, NULL, NULL, false, getOption('fullimage_watermark'), NULL, NULL); // full image size
			cacheManager::addThemeCacheSize($me, getThemeOption('thumb_size'), NULL, NULL, NULL, NULL, NULL, NULL, true, getOption('Image_watermark'), NULL, NULL); // default thumb
			cacheManager::addThemeCacheSize($me, NULL, getThemeOption('libratus_maxwidth'), 550, NULL, NULL, NULL, NULL, true, getOption('Image_watermark'), NULL, NULL); //big header images	
		}
	}
	
	function getOptionsDisabled() {
		return array('custom_index_page');
	}
	
	function getOptionsSupported() {
		$showdates_checkboxes = array(
			gettext_th('Albums', "libratus") => 'libratus_date_albums', 
			gettext_th('Images', "libratus") => 'libratus_date_images', 
			gettext_th('News', "libratus") => 'libratus_date_news', 
			gettext_th('Pages', "libratus") => 'libratus_date_pages'
			);
		$stats_checkboxes = array(
			gettext_th('Images - Popular', "libratus") => 'libratus_stats_images_popular', 
			gettext_th('Images - Latest by ID', "libratus") => 'libratus_stats_images_latestbyid', 
			gettext_th('Images - Latest by Date', "libratus") => 'libratus_stats_images_latestbydate', 
			gettext_th('Images - Latest by mtime', "libratus") => 'libratus_stats_images_latestbymtime', 
			gettext_th('Images - Latest by Publish Date', "libratus") => 'libratus_stats_images_latestbypdate', 
			gettext_th('Images - Most Rated', "libratus") => 'libratus_stats_images_mostrated', 
			gettext_th('Images - Top Rated', "libratus") => 'libratus_stats_images_toprated',
			gettext_th('Albums - Popular', "libratus") => 'libratus_stats_albums_popular', 
			gettext_th('Albums - Latest by ID', "libratus") => 'libratus_stats_albums_latestbyid', 
			gettext_th('Albums - Latest by Date', "libratus") => 'libratus_stats_albums_latestbydate', 
			gettext_th('Albums - Latest by mtime', "libratus") => 'libratus_stats_albums_latestbymtime', 
			gettext_th('Albums - Latest by Publish Date', "libratus") => 'libratus_stats_albums_latestbypdate', 
			gettext_th('Albums - Most Rated', "libratus") => 'libratus_stats_albums_mostrated', 
			gettext_th('Albums - Top Rated', "libratus") => 'libratus_stats_albums_toprated', 
			gettext_th('Albums - Latest Updated', "libratus") => 'libratus_stats_albums_latestupdated'
			);
		$bottom_stats_checkboxes = array(
			gettext_th('Gallery - Description', "libratus") => 'libratus_stats_gal_desc_bottom', 
			gettext_th('News - Latest', "libratus") => 'libratus_stats_news_latest_bottom',
			gettext_th('Comments - Latest', "libratus") => 'libratus_stats_comments_latest_bottom', 
			gettext_th('Images - Popular', "libratus") => 'libratus_stats_images_popular_bottom', 
			gettext_th('Images - Latest by ID', "libratus") => 'libratus_stats_images_latestbyid_bottom', 
			gettext_th('Images - Latest by Date', "libratus") => 'libratus_stats_images_latestbydate_bottom', 
			gettext_th('Images - Latest by mtime', "libratus") => 'libratus_stats_images_latestbymtime_bottom', 
			gettext_th('Images - Latest by Publish Date', "libratus") => 'libratus_stats_images_latestbypdate_bottom', 
			gettext_th('Images - Most Rated', "libratus") => 'libratus_stats_images_mostrated_bottom', 
			gettext_th('Images - Top Rated', "libratus") => 'libratus_stats_images_toprated_bottom',
			gettext_th('Albums - Popular', "libratus") => 'libratus_stats_albums_popular_bottom', 
			gettext_th('Albums - Latest by ID', "libratus") => 'libratus_stats_albums_latestbyid_bottom', 
			gettext_th('Albums - Latest by Date', "libratus") => 'libratus_stats_albums_latestbydate_bottom', 
			gettext_th('Albums - Latest by mtime', "libratus") => 'libratus_stats_albums_latestbymtime_bottom', 
			gettext_th('Albums - Latest by Publish Date', "libratus") => 'libratus_stats_albums_latestbypdate_bottom', 
			gettext_th('Albums - Most Rated', "libratus") => 'libratus_stats_albums_mostrated_bottom', 
			gettext_th('Albums - Top Rated', "libratus") => 'libratus_stats_albums_toprated_bottom', 
			gettext_th('Albums - Latest Updated', "libratus") => 'libratus_stats_albums_latestupdated_bottom'
			);
		global $_zp_gallery;
		$albumlist = array();
		$albumlist['Entire Gallery'] = '';
		$albums = getNestedAlbumList(null, 9999999, false);
		foreach($albums as $album) {
			$albumobj = newAlbum($album['name'], true);
			$albumlist[$album['name']] = $album['name'];
		}
		return array(	
			gettext_th('Max Width of Site', "libratus") => array('key' => 'libratus_maxwidth', 'type' => OPTION_TYPE_TEXTBOX, 
				'order'=>1, 
				'multilingual' => 0,
				'desc' => gettext_th('Set the max-width of site in pixels.  Site is fluid but will not expand beyond this width.')),
			gettext_th('Home Slideshow Type', "libratus") => array('key' => 'libratus_ss_type', 'type' => OPTION_TYPE_SELECTOR,
				'order' => 2, 
				'selections' => array(
					gettext_th('Random', "libratus") => 'random', 
					gettext_th('Popular', "libratus") => 'popular', 
					gettext_th('Latest by ID', "libratus") => 'latestbyid', 
					gettext_th('Latest by Date', "libratus") => 'latestbydate', 
					gettext_th('Latest by mtime', "libratus") => 'latestbymtime', 
					gettext_th('Latest by Publish Date', "libratus") => 'latestbypdate', 
					gettext_th('Most Rated', "libratus") => 'mostrated', 
					gettext_th('Top Rated', "libratus") => 'toprated'), 
				'desc' => gettext_th('Select what image statistic to show on the frontpage slideshow.', "libratus")),
			gettext_th('Home Slideshow from Album', "libratus") => array('key' => 'libratus_ss_album', 'type' => OPTION_TYPE_SELECTOR,
				'order' => 3, 
				'selections' => $albumlist, 
				'desc' => gettext_th('Optionally select a specific album the Home Slideshow pulls from. Default is "Entire Gallery", which pulls from the entire gallery. Be careful with this option to ensure there are images that meet the statistic and they are viewable (rights), otherwise no images will show.', "libratus")),
			gettext_th('Slideshow Interval', "libratus") => array('key' => 'libratus_ss_interval', 'type' => OPTION_TYPE_TEXTBOX, 
				'order'=>4, 
				'multilingual' => 0,
				'desc' => gettext_th('In milliseconds (default 5000).', "libratus")),
			gettext_th('Home Page Full-width', "libratus") => array('key' => 'libratus_index_fullwidth', 'type' => OPTION_TYPE_CHECKBOX, 
				'order' => 5,
				'desc' => gettext_th("Check for album thumbs to full-width on home page (no sidebar statistics menu with search).")),
			gettext_th('Show Date', "libratus") => array('key' => 'libratus_date', 'type' => OPTION_TYPE_CHECKBOX_ARRAY,
				'order' => 6,
				'checkboxes' => $showdates_checkboxes,
				'desc' => gettext_th("Toggle whether to display dates in albums, images, news, and pages. On \"pages\", libratus shows last updated date if checked. Note that you need to show dates on images, or on news, for those to show on the archive page.")),
			gettext_th('Download Button', "libratus") => array('key' => 'libratus_download', 'type' => OPTION_TYPE_CHECKBOX, 
				'order' => 7,
				'desc' => gettext_th("Check to enable users the ability to download original image from image details page. If you want a save dialog, you will need to set the appropriate option in options->image as well (protected, download).", "libratus")),
			gettext_th('Simple Social Sharing?', "libratus") => array('key' => 'libratus_social', 'type' => OPTION_TYPE_CHECKBOX, 
				'order' => 8,
				'desc' => gettext_th("Check to display simple links (lightweight) for users to share to their Facebook, Google, and Twitter accounts. Make sure to enable the meta tags plugin and enable the og entries for these sites to pull the correct thumbs, titles, and descriptions upon share.", "libratus")),
			gettext_th('Custom CSS', "libratus") => array('key' => 'libratus_customcss', 'type' => OPTION_TYPE_TEXTAREA, 
				'order'=>9, 
				'multilingual' => 0,
				'desc' => gettext_th('Enter any custom CSS, safely carries over upon theme upgrade. Will be placed between style tags in the head.', "libratus")),
			gettext_th('Google Tracking Code', "libratus") => array('key' => 'libratus_analytics', 'type' => OPTION_TYPE_TEXTBOX, 
				'order'=>10, 
				'multilingual' => 0,
				'desc' => gettext_th('Enter your Google Analytics Universal Tracking Id here to auto insert the tracking code on every page (UA-...). Leave blank to omit. Note that the analytics code will not be outputted for admin users, so that administrator page visits will not be counted.', "libratus")),
			gettext_th('Tracking Type', "libratus") => array('key' => 'libratus_analytics_type', 'type' => OPTION_TYPE_RADIO, 
				'order' => 11,
				'buttons' => array(gettext_th('Universal', "libratus")=>'universal', gettext_th('Classic', "libratus")=>'classic'),
				'desc' => gettext_th("Select what type of analytics you are using. See your Google analytics account for explanations.", "libratus")),
			gettext_th('Facebook Link', "libratus") => array('key' => 'libratus_facebook', 'type' => OPTION_TYPE_TEXTBOX, 
				'order'=>12, 
				'multilingual' => 0,
				'desc' => gettext_th('Enter your full Facebook page link (http://....). Leave blank to omit.', "libratus")),
			gettext_th('Twitter Link', "libratus") => array('key' => 'libratus_twitter', 'type' => OPTION_TYPE_TEXTBOX, 
				'order'=>13, 
				'multilingual' => 0,
				'desc' => gettext_th('Enter your full Twitter page link (http://....). Leave blank to omit.', "libratus")),
			gettext_th('Google+ Link', "libratus") => array('key' => 'libratus_google', 'type' => OPTION_TYPE_TEXTBOX, 
				'order'=>14, 
				'multilingual' => 0,
				'desc' => gettext_th('Enter your full Google+ page link (http://....). Leave blank to omit.', "libratus")),
			gettext_th('Copyright Text', "libratus") => array('key' => 'libratus_copy', 'type' => OPTION_TYPE_TEXTBOX, 
				'order'=>15, 
				'multilingual' => 0,
				'desc' => gettext_th('Edit text for footer copyright. Leave blank to omit.', "libratus")),
			gettext_th('Statistical Pages on Archive', "libratus") => array('key' => 'libratus_stats', 'type' => OPTION_TYPE_CHECKBOX_ARRAY,
				'order' => 16,
				'checkboxes' => $stats_checkboxes,
				'desc' => gettext_th('Select which statistical pages to show in the archive side menu and homepage side menu (optional), if any.', "libratus")),
			gettext_th('Statistical Pages Number', "libratus") => array('key' => 'libratus_stats_number', 'type' => OPTION_TYPE_TEXTBOX, 
				'order'=>17, 
				'multilingual' => 0,
				'desc' => gettext_th('Enter the number of images or albums to show for each statistic on the archive pages (default 30).', "libratus")),
			gettext_th('Bottom Stats Items per Row', "libratus") => array('key' => 'libratus_bottom_stats_perrow', 'type' => OPTION_TYPE_RADIO, 
				'order' => 18,
				'buttons' => array(gettext_th('Disable', "libratus")=>0, gettext_th('1', "libratus")=>1, gettext_th('2', "libratus")=>2, gettext_th('3', "libratus")=>3, gettext_th('4', "libratus")=>4),
				'desc' => gettext_th("Select how many items per row for the bottom stats, if any.", "libratus")),
			gettext_th('Bottom Stats', "libratus") => array('key' => 'libratus_bottom_stats', 'type' => OPTION_TYPE_CHECKBOX_ARRAY,
				'order' => 19,
				'checkboxes' => $bottom_stats_checkboxes,
				'desc' => gettext_th('Select what to show in the bottom row, if not disabled above. Recommended to choose multiples of the option items per row.', "libratus")),
			gettext_th('Number of Images in Bottom Stats', "libratus") => array('key' => 'libratus_bottom_stats_number', 'type' => OPTION_TYPE_TEXTBOX, 
				'order'=>20, 
				'multilingual' => 0,
				'desc' => gettext_th('Enter the number of images or albums to show for each selected statistic in the bottom footer.', "libratus")),
			gettext_th('Related Max Number', "libratus") => array('key' => 'libratus_related_maxnumber', 'type' => OPTION_TYPE_TEXTBOX, 
				'order'=>21, 
				'multilingual' => 0,
				'desc' => gettext_th('Enter the MAX number of related albums and images to show on their respective pages (if plugin is enabled).', "libratus"))
		);
	}
} ?>