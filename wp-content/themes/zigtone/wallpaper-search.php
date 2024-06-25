<?php
/* Template Name: Wallpaper Search */

get_template_part('wallpaper-header');
$query = isset($_GET['q']) ? $_GET['q'] : '';
?>

    <div class="container-fluid w-cover-box">
        <div class="row ml-0 mr-0">
            <div class="col-md-8 ml-auto mr-auto text-center">
                <h1 class="w-cover-title">
                    <?php
                    echo $query;
                    ?>
                </h1>
                <h2 class="w-cover-subtitle">Beautiful HD wallpapers - Free wallpapers for mobile</h2>
            </div>
        </div>
    </div>

    <div class="w-wallpaper-box mb-5">
        <div class="container-fluid mobile-container wallper-page">
            <div class="row pt-3"></div>
            <div class="row pt-2">
                <div class="col-md-12 text-center mb-5">
                     <?php echo do_shortcode('[ajax_load_more search="' . $query . '" loading_style="infinite classic" container_type="div" css_classes="row w-wallpapers-container" post_type="wallpaper2" posts_per_page="6" transition_container="false" images_loaded="true"]') ?>
                </div>

            </div>
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
