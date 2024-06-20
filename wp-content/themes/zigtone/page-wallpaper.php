<?php
/* Template Name: Wallpaper */

get_header();
?>
    <div class="container-fluid " id="wallper-page">
    <div class="sc-6d1b8e79-2 HwkVz results" style="">
        <div class="sc-4962bbc6-0 jotGrf search-wrapper">
            <div></div>
        </div>
        <div class="sc-2d789a6b-0 ebzgLE search-page-filter-links">
            <div class="left-links">
                <a translate="no" class="sort-curated activePath activeQuery"
                   href="/search/iphone%20wallpaper?page=1&amp;path=_topics%7Csearch_filter-%24photos&amp;sort=curated">Curated</a>
                <a
                        class="activePath"
                        href="/search/iphone%20wallpaper?page=1&amp;path=_topics%7Csearch_filter-%24photos&amp;sort=popular">Popular</a>
                <a
                        class="activePath"
                        href="/search/iphone%20wallpaper?page=1&amp;path=_topics%7Csearch_filter-%24photos&amp;sort=new">New
                </a>
            </div>
            <div class="right-links">
                <a class="activeQuery active activePath"
                   href="/search/iphone%20wallpaper?page=1&amp;sort=curated&amp;path=_topics">Photos</a>
                <a class="activePath"
                   href="/search/iphone%20wallpaper?page=1&amp;sort=curated&amp;path=_topics%7Csearch_filter-%24illustrations">Illustrations</a>
                <a class="has-children activePath"
                   href="/search/iphone%20wallpaper?page=1&amp;sort=curated&amp;path=_topics%7Csearch_filter-%24pngelements">PNG
                    Elements
                    <div class="sc-acd7fdd0-0 iIzwgp">
                        <div class="collapse-indicator">
                            <div class="arrow"></div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
        <div class="row w-wallpapers-container" style="margin-left:0;margin-right:0;">
            <?php
            $params = array(
                'post_type' => 'wallpaper2',
                'posts_per_page' => 5
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
                <?php
                endwhile;
                ?>
            <?php
            endif;
            ?>

        </div>
<!--        --><?php //echo do_shortcode('[ajax_load_more offset="5" pause="true" pause_override="true" post_type="wallpaper" container_type="div" css_classes="row w-wallpapers-container" posts_per_page="5" transition_container="false" images_loaded="true" loading_style="infinite fading-circles" scroll="true"]') ?>
        <!-- Modal -->
<!--        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"-->
<!--             aria-hidden="true">-->
<!--            <div class="modal-dialog modal-lg" role="document">-->
<!--                <div class="modal-content">-->
<!--                    <div class="modal-header">-->
<!--                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">-->
<!--                            <span aria-hidden="true">&times;</span>-->
<!--                        </button>-->
<!--                    </div>-->
<!--                    <div class="modal-body">-->
<!--                        <div id="carouselExample" class="carousel slide" data-ride="carousel">-->
<!--                            <div class="carousel-inner">-->
<!--                                <div class="carousel-item active">-->
<!--                                    <img src="https://klingeltonekostenlos.de/wp-content/uploads/2023/06/ios1510-scaled.jpg"-->
<!--                                         class="d-block w-100" alt="Image 1">-->
<!--                                </div>-->
<!--                                <div class="carousel-item">-->
<!--                                    <img src="https://klingeltonekostenlos.de/wp-content/uploads/2023/06/ios157.jpg"-->
<!--                                         class="d-block w-100" alt="Image 2">-->
<!--                                </div>-->
<!--                                <div class="carousel-item">-->
<!--                                    <img src="https://klingeltonekostenlos.de/wp-content/uploads/2023/06/ios157.jpg"-->
<!--                                         class="d-block w-100" alt="Image 3">-->
<!--                                </div>-->
<!--                            </div>-->
<!--                            <a class="carousel-control-prev" href="#carouselExample" role="button" data-slide="prev">-->
<!--                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>-->
<!--                                <span class="sr-only">Previous</span>-->
<!--                            </a>-->
<!--                            <a class="carousel-control-next" href="#carouselExample" role="button" data-slide="next">-->
<!--                                <span class="carousel-control-next-icon" aria-hidden="true"></span>-->
<!--                                <span class="sr-only">Next</span>-->
<!--                            </a>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                    <div class="modal-footer">-->
<!--                        <a id="downloadLink" href="your-image-url1.jpg" download-->
<!--                           class="btn btn-primary d-flex align-items-center" style="background: #0d6efd">Download-->
<!--                            <svg style="margin-left: 4px;color: #fff;" width="12" height="16" viewBox="-1.5 0 20 20"-->
<!--                                 version="1.1" xmlns="http://www.w3.org/2000/svg"-->
<!--                                 xmlns:xlink="http://www.w3.org/1999/xlink" fill="#fff">-->
<!--                                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>-->
<!--                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>-->
<!--                                <g id="SVGRepo_iconCarrier"><title>apple [#173]</title>-->
<!--                                    <desc>Created with Sketch.</desc>-->
<!--                                    <defs></defs>-->
<!--                                    <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">-->
<!--                                        <g id="Dribbble-Light-Preview" transform="translate(-102.000000, -7439.000000)"-->
<!--                                           fill="#fff">-->
<!--                                            <g id="icons" transform="translate(56.000000, 160.000000)">-->
<!--                                                <path d="M57.5708873,7282.19296 C58.2999598,7281.34797 58.7914012,7280.17098 58.6569121,7279 C57.6062792,7279.04 56.3352055,7279.67099 55.5818643,7280.51498 C54.905374,7281.26397 54.3148354,7282.46095 54.4735932,7283.60894 C55.6455696,7283.69593 56.8418148,7283.03894 57.5708873,7282.19296 M60.1989864,7289.62485 C60.2283111,7292.65181 62.9696641,7293.65879 63,7293.67179 C62.9777537,7293.74279 62.562152,7295.10677 61.5560117,7296.51675 C60.6853718,7297.73474 59.7823735,7298.94772 58.3596204,7298.97372 C56.9621472,7298.99872 56.5121648,7298.17973 54.9134635,7298.17973 C53.3157735,7298.17973 52.8162425,7298.94772 51.4935978,7298.99872 C50.1203933,7299.04772 49.0738052,7297.68074 48.197098,7296.46676 C46.4032359,7293.98379 45.0330649,7289.44985 46.8734421,7286.3899 C47.7875635,7284.87092 49.4206455,7283.90793 51.1942837,7283.88393 C52.5422083,7283.85893 53.8153044,7284.75292 54.6394294,7284.75292 C55.4635543,7284.75292 57.0106846,7283.67793 58.6366882,7283.83593 C59.3172232,7283.86293 61.2283842,7284.09893 62.4549652,7285.8199 C62.355868,7285.8789 60.1747177,7287.09489 60.1989864,7289.62485"-->
<!--                                                      id="apple-[#173]"></path>-->
<!--                                            </g>-->
<!--                                        </g>-->
<!--                                    </g>-->
<!--                                </g>-->
<!--                            </svg>-->
<!--                        </a>-->
<!--                        <!-- Download button -->-->
<!--                        <a id="downloadLink" href="your-image-url1.jpg" download-->
<!--                           class="btn btn-primary d-flex align-items-center" style="background: #0d6efd">Download-->
<!--                            <svg style="margin-left: 4px;color: #fff;" width="12" height="16"-->
<!--                                 xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 50 50">-->
<!--                                <path fill="#fff"-->
<!--                                      d="M19.852 7.761l-15 2.25C4.362 10.085 4 10.505 4 11v12c0 .553.448 1 1 1h15c.552 0 1-.447 1-1V8.75c0-.291-.127-.567-.348-.758C20.432 7.803 20.139 7.721 19.852 7.761zM45.652 4.242c-.22-.189-.512-.271-.801-.231l-21 3.15C23.362 7.235 23 7.655 23 8.15V23c0 .553.448 1 1 1h21c.552 0 1-.447 1-1V5C46 4.709 45.873 4.433 45.652 4.242zM20 26H5c-.552 0-1 .447-1 1v12c0 .495.362.915.852.989l15 2.25c.05.007.099.011.148.011.238 0 .47-.085.652-.242C20.873 41.817 21 41.541 21 41.25V27C21 26.447 20.552 26 20 26zM45 26H24c-.552 0-1 .447-1 1v14.85c0 .495.362.915.852.989l21 3.15C44.901 45.996 44.951 46 45 46c.238 0 .47-.085.652-.242C45.873 45.567 46 45.291 46 45V27C46 26.447 45.552 26 45 26z"></path>-->
<!--                            </svg>-->
<!--                            <svg style="margin-left: 4px;color: #fff;" width="12" height="16" fill="#fff"-->
<!--                                 viewBox="0 0 32 32" version="1.1" xmlns="http://www.w3.org/2000/svg">-->
<!--                                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>-->
<!--                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>-->
<!--                                <g id="SVGRepo_iconCarrier"><title>android</title>-->
<!--                                    <path d="M23.35 12.653l2.496-4.323c0.044-0.074 0.070-0.164 0.070-0.26 0-0.287-0.232-0.519-0.519-0.519-0.191 0-0.358 0.103-0.448 0.257l-0.001 0.002-2.527 4.377c-1.887-0.867-4.094-1.373-6.419-1.373s-4.532 0.506-6.517 1.413l0.098-0.040-2.527-4.378c-0.091-0.156-0.259-0.26-0.45-0.26-0.287 0-0.519 0.232-0.519 0.519 0 0.096 0.026 0.185 0.071 0.262l-0.001-0.002 2.496 4.323c-4.286 2.367-7.236 6.697-7.643 11.744l-0.003 0.052h29.991c-0.41-5.099-3.36-9.429-7.57-11.758l-0.076-0.038zM9.098 20.176c-0 0-0 0-0 0-0.69 0-1.249-0.559-1.249-1.249s0.559-1.249 1.249-1.249c0.69 0 1.249 0.559 1.249 1.249v0c-0.001 0.689-0.559 1.248-1.249 1.249h-0zM22.902 20.176c-0 0-0 0-0 0-0.69 0-1.249-0.559-1.249-1.249s0.559-1.249 1.249-1.249c0.69 0 1.249 0.559 1.249 1.249v0c-0.001 0.689-0.559 1.248-1.249 1.249h-0z"></path>-->
<!--                                </g>-->
<!--                            </svg>-->
<!--                        </a>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->


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
get_footer();