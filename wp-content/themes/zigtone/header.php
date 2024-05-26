<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package zigtone
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Figtree:ital,wght@0,300..900;1,300..900&family=Inter:wght@100..900&display=swap" rel="stylesheet">
	<link rel="stylesheet" id="admin-bar-css" href="./assets//custom-style.css">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>
	<div id="page" class="site">
		<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e('Skip to content', 'zigtone'); ?></a>

		<header id="masthead" class="site-header">
			<div class="header">
				<div class="nav">
					<a href="#" class="logo" style="text-transform: uppercase; font-weight: 800;font-size: 22px; line-height: 1.3em;text-align: center;text-shadow: .02em .05em 0 rgba(0,0,0,0.4); color: #fff">🎧RingtoneBaaz</a>
					<form class="search-form" id="nav-search" name="nav-search">
						<div class="search-input">
							<input type="search" name="s" placeholder="Search ringtones..." autocomplete="off" autocapitalize="off">
							<svg type="submit" class="icon" viewBox="0 0 54 54">
								<path fill="currentColor" d="M38.25,35.59l-4.42-4.41a10.14,10.14,0,1,0-3.65,3.65l4.41,4.42a2.59,2.59,0,0,0,3.66-3.66ZM17.53,26.1a7.58,7.58,0,1,1,7.58,7.58A7.59,7.59,0,0,1,17.53,26.1Z"> </path>
							</svg>
						</div>
					</form>
					<div class="sidebar-icon">
					<div class="social-media-links">
						<a href="/" target="_blank" rel="noopener" aria-label="Follow on Facebook" title="Follow www.ringtonebaaz.net on Facebook">
							<svg aria-hidden="true" viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg">
								<path d="M171.169 20H28.831A8.831 8.831 0 0 0 20 28.831v142.338A8.83 8.83 0 0 0 28.831 180h76.638v-61.875H84.688V93.906h20.781V76.083c0-20.666 12.621-31.919 31.056-31.919c8.83 0 16.42.657 18.632.951v21.597l-12.714.006c-10.031 0-11.974 4.767-11.974 11.762v15.425h23.982l-3.123 24.219h-20.86V180h40.701a8.831 8.831 0 0 0 8.831-8.831V28.831A8.831 8.831 0 0 0 171.169 20z"> </path>
							</svg>
						</a>
						<a href="https://twitter.com/BaazRingtone" target="_blank" rel="noopener" aria-label="Follow on Twitter" title="Follow www.ringtonebaaz.net on Twitter">
							<svg aria-hidden="true" viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg">
								<path d="M66.609 173.144c67.927 0 105.074-56.276 105.074-105.074c0-1.599-.032-3.191-.106-4.774A75.133 75.133 0 0 0 190 44.175a73.717 73.717 0 0 1-21.208 5.813c7.624-4.571 13.478-11.805 16.239-20.428a74.017 74.017 0 0 1-23.449 8.964c-6.739-7.178-16.336-11.668-26.957-11.668c-20.396 0-36.935 16.539-36.935 36.927c0 2.899.325 5.716.958 8.42c-30.692-1.542-57.908-16.238-76.12-38.583a36.796 36.796 0 0 0-5.002 18.561c0 12.813 6.52 24.123 16.434 30.74a36.651 36.651 0 0 1-16.726-4.62c-.008.154-.008.309-.008.471c0 17.887 12.731 32.819 29.628 36.205a37.035 37.035 0 0 1-9.735 1.299c-2.379 0-4.693-.235-6.942-.666c4.701 14.672 18.334 25.349 34.5 25.65c-12.642 9.905-28.564 15.808-45.867 15.808c-2.98 0-5.919-.171-8.81-.511c16.344 10.473 35.75 16.587 56.609 16.587"> </path>
							</svg>
						</a>
						<a href="https://www.youtube.com/channel/UC0l_fWuP9ElBxTJN7thF8Ow" target="_blank" rel="noopener" aria-label="Subscribe on YouTube" title="Subscribe to www.ringtonebaaz.net on YouTube">
							<svg aria-hidden="true" viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg">
								<path d="M176.66 61.49c-1.84-6.89-7.27-12.31-14.15-14.15C150.03 44 100 44 100 44s-50.03 0-62.51 3.34c-6.88 1.84-12.31 7.26-14.15 14.15C20 73.97 20 100 20 100s0 26.03 3.34 38.51c1.84 6.89 7.27 12.31 14.15 14.15C49.97 156 100 156 100 156s50.03 0 62.51-3.34c6.88-1.84 12.31-7.26 14.15-14.15C180 126.03 180 100 180 100s0-26.03-3.34-38.51zM84 124V76l41.57 24L84 124z"> </path>
							</svg>
						</a>
						<a href="/" target="_blank" rel="noopener" aria-label="Follow on Instagram" title="Follow www.ringtonebaaz.net on Instagram">
							<svg aria-hidden="true" class="_irE _h-2 _iFA _iWM" viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg">
								<path d="M132.313 34.909c21.483.98 31.797 11.276 32.778 32.778c.668 14.642.668 49.977 0 64.625c-.98 21.483-11.276 31.797-32.778 32.778c-14.64.668-49.979.668-64.625 0c-21.483-.98-31.797-11.276-32.778-32.778c-.668-14.642-.668-49.977 0-64.625c.98-21.483 11.276-31.797 32.778-32.778c14.641-.668 49.976-.668 64.625 0zM67.031 20.516C38.273 21.828 21.85 37.812 20.516 67.031c-.688 15.09-.688 50.854 0 65.939c1.312 28.751 17.288 45.181 46.514 46.514c15.086.688 50.856.688 65.939 0c28.751-1.312 45.181-17.288 46.514-46.514c.688-15.09.688-50.854 0-65.939c-1.312-28.758-17.296-45.181-46.514-46.514c-15.089-.689-50.854-.689-65.938-.001zM100 58.937c-22.678 0-41.063 18.385-41.063 41.063S77.322 141.063 100 141.063s41.063-18.385 41.063-41.063c0-22.679-18.385-41.063-41.063-41.063zm0 67.718c-14.721 0-26.655-11.934-26.655-26.655c0-14.721 11.934-26.655 26.655-26.655c14.721 0 26.655 11.934 26.655 26.655c0 14.721-11.934 26.655-26.655 26.655z"> </path>
								<circle cx="142.685" cy="57.315" r="9.596"></circle>
							</svg>
						</a>
					</div>
				</div>
				</div>
				
			</div>
		</header><!-- #masthead -->