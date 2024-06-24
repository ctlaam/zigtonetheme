<?php
/* Template Name: Wallpaper */
get_template_part('wallpaper-header');
?>
    <div class="container-fluid wallper-page" >
    <div class="sc-6d1b8e79-2 HwkVz results" style="">
        <div class="sc-4962bbc6-0 jotGrf search-wrapper">
            <div></div>
        </div>
        <div class="sc-2d789a6b-0 ebzgLE search-page-filter-links">
            <div class="left-links">
                <?php
                $categories = get_terms('wallpaper', array(
//						'orderby' => 'name',
//						'order'   => 'ASC'
                ));

                foreach( $categories as $category ) {
                    ?>
                    <a class="activeQuery active activePath"
                       href="<?php echo esc_url(get_category_link($category->term_id)) ?>"><?php echo esc_html($category->name) ?></a>
                <?php } ?>
            </div>
            <div class="right-links">

            </div>
        </div>
        <div class="row w-wallpapers-container" style="margin-left:0;margin-right:0;">
            <?php
            $params = array(
                'post_type' => 'wallpaper2',
                'posts_per_page' => 1
            );
            $query = new WP_Query($params);

            if ($query->have_posts()) :
                while ($query->have_posts()) :
                    $query->the_post();
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
                            $carousel_inner .= '<div class="carousel-item ' . $active . '" data-file="' . $link_download . '" " data-file-ios="' . $image_link . '"><img class="d-block w-100" src="' . $image_link . '"></div>';
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
                <?php
                endwhile;
                ?>
            <?php
            endif;
            ?>

        </div>
        <?php echo  do_shortcode('[ajax_load_more offset="5" pause="true" pause_override="true" container_type="div" css_classes="row w-wallpapers-container" loading_style="infinite fading-circles"  post_type="wallpaper2"  taxonomy="wallpaper" posts_per_page="5" transition_container="false"]'); ?>
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
    </div>
<?php
get_template_part('wallpaper-footer');