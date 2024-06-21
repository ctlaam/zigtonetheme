<?php
get_template_part('wallpaper-header');
$category = get_queried_object();
?>

<?php $desc = get_the_archive_description(); ?>
<div class="container-fluid w-cover-box">
	<div class="row ml-0 mr-0">
		<div class="col-md-8 ml-auto mr-auto text-center">
			<h1 class="w-cover-title"><?php echo $category->name ?> Hintergrundbilder</h1>
			<h2 class="w-cover-subtitle"><?php echo $category->name ?> Hintergrundbilder - Kostenlose Hintergrundbilder <?php echo $category->name ?> für Handy</h2>
		</div>
	</div>
</div>

<div class="w-wallpaper-box mb-5">
	<div class="container-fluid mobile-container">
		<div class="row pt-2">
			<div class="col-md-12 text-center mb-5">
				<?php
					$categories = get_terms('Wallpaper', array(
						'orderby' => 'name',
						'order'   => 'ASC'
					));

					foreach( $categories as $category ) {
				?>
					<div class="w-category">
						<a
							title="<?php echo esc_html($category->name) ?>"
							href="<?php echo esc_url(get_category_link($category->term_id)) ?>"
						>
							<?php echo esc_html($category->name) ?>
						</a>
					</div>
				<?php } ?>
				<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-6707068879808301"
						crossorigin="anonymous"></script>
				<!-- klw1 -->
				<ins class="adsbygoogle"
					 style="display:block"
					 data-ad-client="ca-pub-6707068879808301"
					 data-ad-slot="1554746552"
					 data-ad-format="auto"
					 data-full-width-responsive="true"></ins>
				<script>
					(adsbygoogle = window.adsbygoogle || []).push({});
				</script>
			</div>
		</div>
		<center>
</center><br/>
		<style>
			.loading {
				float: none;
			}
		</style>
		<div class="row w-wallpapers-container" style="margin-left:0;margin-right:0;">
			<?php
				$category = get_queried_object();
				$params = array(
					'post_type' => 'wallpaper2',
					'tax_query' => array(
						array(
							'taxonomy' => 'wallpaper',
							'field' => 'term_id',
							'terms' => $category->term_id
						)
					 ),
					'posts_per_page' => 5
				);
				$query = new WP_Query($params);

				if ($query->have_posts()) : ?>
					<?php
					while ($query->have_posts()) :
						$query->the_post();
						get_template_part('template-parts/content-wallpaper', 'wallpaper');
					endwhile;
				endif;
			?>
		</div>
<!--		--><?php //echo do_shortcode('[ajax_load_more archive="true" offset="5" pause="true" pause_override="true" loading_style="infinite fading-circles" scroll="true" container_type="div" css_classes="row w-wallpapers-container" post_type="wallpaper" posts_per_page="5" transition_container="false" images_loaded="true"]') ?>
	</div>
</div>
<div class="modal fade" id="w-wallpaper-detail" tabindex="-1" role="dialog" aria-labelledby="w-wallpaper-detail-title" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body w-wallpaper-detail-body">
				<div id="wallpapers-carousel" class="carousel slide" data-ride="carousel" data-interval="false">
					<div class="carousel-inner">
					</div>
					<a class="carousel-control-prev" href="#wallpapers-carousel" role="button" data-slide="prev">
						<span class="carousel-control-prev-icon" aria-hidden="true"></span>
						<span class="sr-only">Previous</span>
					</a>
					<a class="carousel-control-next" href="#wallpapers-carousel" role="button" data-slide="next">
						<span class="carousel-control-next-icon" aria-hidden="true"></span>
						<span class="sr-only">Next</span>
					</a>
				</div>
            </div>
            <div class="modal-footer">
                <a type="button" class="btn btn-primary w-wallpaper-download-ios">Download <i class="fab fa-apple"></i></a>
                <a type="button" class="btn btn-primary w-wallpaper-download">Download <i class="fab fa-android"></i><i class="fab fa-windows"></i></a>
            </div>
        </div>
    </div>
</div>

<?php
get_template_part('wallpaper-footer');
