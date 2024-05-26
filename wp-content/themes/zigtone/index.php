<?php

/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package zigtone
 */

get_header();
?>

<main id="primary" class="site-main content">
	<div class="container">
		<form class="search-form" id="nav-search" name="nav-search">
			<div class="search-input">
				<input type="search" name="s" placeholder="Search ringtones..." autocomplete="off" autocapitalize="off">
				<svg type="submit" class="icon" viewBox="0 0 54 54">
					<path fill="currentColor" d="M38.25,35.59l-4.42-4.41a10.14,10.14,0,1,0-3.65,3.65l4.41,4.42a2.59,2.59,0,0,0,3.66-3.66ZM17.53,26.1a7.58,7.58,0,1,1,7.58,7.58A7.59,7.59,0,0,1,17.53,26.1Z"> </path>
				</svg>
			</div>
		</form>
		<div class="row rt-title-home">
			<h1 style="margin: 0 auto;"><i class="far fa-bell"></i> Top Ringtones 2024, Download iPhone ringtone, Instrumental ringtone, Bollywood ringtones, Tiktok ringtones...</h1>
		</div>
		<div class="ringtones ">
			<?php
				$params = array('posts_per_page' => 15);
				$query = new WP_Query($params);

				if ( $query->have_posts() ) :

					while ( $query->have_posts() ) :
						$query->the_post();
						get_template_part( 'template-parts/content', get_post_type() );
					endwhile;
				endif;
			?>
		</div>
	</div>
</main><!-- #main -->

<?php
get_footer();
