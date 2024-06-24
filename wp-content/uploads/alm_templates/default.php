<?php
	$category = get_the_terms(get_the_ID(), 'wallpaper')[0];
	$download_page = get_page_by_path('download-wallpaper');
	$images = get_field('file');
    $download_count_array = json_decode(get_field('download_count'), true);
?>
<?php foreach($images as $image) { ?>
<div class="col-6 col-sm-6 col-md-4 col-lg-3 col-xl-2 mb-5 w-wallpaper-item">
	<?php
    	$carousel_inner = '';
		foreach($images as $image_inner) {
			$active = '';
			$image_link = wp_get_attachment_image_src($image_inner, 'full')[0];
			if ($image == $image_inner) {
				$active = 'active';
			}
			$link_download = get_page_link($download_page) . '?id=' . $image_inner . '&post=' . get_the_ID();
			$carousel_inner .= '<div class="carousel-item ' . $active . '" data-file="' . $link_download . '"><img class="d-block w-100" src="' . $image_link . '"></div>';
		}
	?>
    <div id="wallpaper-<?php echo get_the_ID() . '-' . $image ?>" class="w-wallpaper" data-title="<?php echo get_the_title() ?>" data-carousel="<?php echo htmlentities($carousel_inner); ?>" data-file="<?php echo get_page_link($download_page) . '?id=' . $image . '&post=' . get_the_ID() ?>" data-file-ios="<?php echo wp_get_attachment_image_src($image, 'full')[0] ?>">
        <div class="w-wallpaper-body">
            <?php $thumnail = wp_get_attachment_image_src($image, 'home-thumb'); ?>
            <img src="<?php echo $thumnail[0] ?>" class="w-image" alt="<?php echo get_the_title() ?>">
            <div class="w-wallpaper-info">
                <span class="w-wallpaper-info-category"><i class="fas fa-list-alt"></i></i><?php echo $category->name ?></span>
                <span class="w-wallpaper-info-download"><i class="fas fa-download"></i><?php echo array_key_exists($image, $download_count_array) ? $download_count_array[$image] : 0; ?></span>
            </div>
        </div>
    </div>
</div>
<?php } ?>