<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package zigtone
 */

get_header();
?>
<?php $downloadPage = get_page_by_path('download');  ?>
    <div class="page-warp col">
        <div class="container ">
            <section id="sec-ringtones">

                <script src="https://www.paypal.com/sdk/js?client-id=AYyzJ0-ymWuIPjfoCEqcX6bzLHO4Kc_M2k9scymkULYwh8VUqTndlLOAXrcrC74KiN4zruHPR6v5tdLA"
                        data-uid-auto="uid_agmdtuiqyjbigvhisewywfrqccypzs">
                </script>

                <div class="container-single">
                    <div class="row" style="height: auto !important;">
                        <div class="left-single" style="height: auto !important;">
                            <?php
                            while (have_posts()) :
                                the_post();

                                $post = get_post();
                                $categories = get_the_category();
                                $file_url = esc_url(wp_get_attachment_url(get_field('file')));
                                $file_meta = wp_get_attachment_metadata(get_field('file'));
                                $filetype = wp_check_filetype(wp_basename($file_url));

                                ?>
                                <div class="breadcrumb-post" id="goPlay">
                                    <p id="breadcrumbs" class="post_breadcrumbs">
                                    <span>
                                        <a href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a>
                                        »
                                        <span class="breadcrumb_last" aria-current="page"><?php the_title(); ?></span>
                                    </span>
                                    </p>
                                    <p></p>
                                </div>
                                <div class="rt-info-post">
                                    <div class="left-info-post">
                                        <h1 itemprop="name"><?php the_title(); ?></h1>
                                    </div>
                                    <div class="qrcode"></div>

                                </div>

                                <div class="box-player">
                                    <div tabindex="0" class="plyr plyr--full-ui plyr--audio plyr--html5 plyr--stopped">
                                        <div tabindex="0"
                                             class="plyr plyr--full-ui plyr--audio plyr--html5 plyr--stopped">
                                            <audio id="p1307">
                                                <source src="<?php echo esc_url(wp_get_attachment_url(get_field('file'))); ?>">
                                            </audio>
                                            <button type="button" class="plyr__control plyr__control--overlaid"
                                                    data-plyr="play"
                                                    aria-pressed="false">
                                                <svg role="presentation">
                                                    <use xlink:href="#plyr-play"></use>
                                                </svg>
                                                <span class="plyr__sr-only">Play</span></button>
                                        </div>
                                    </div>
                                </div>
                                <script>
                                    const player = new Plyr('#p1307', {
                                        settings: [],
                                    });
                                </script>

                                <div class="table-detail-audio" style="height: auto !important;">

                                    <div class="detail-audio">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <script async=""
                                                        src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
                                                <!-- post 1 -->
                                                <ins class="adsbygoogle" style="display:block"
                                                     data-ad-client="ca-pub-7405523477960326" data-ad-slot="8214502914"
                                                     data-ad-format="auto" data-full-width-responsive="true">
                                                    <iframe id="aswift_0"
                                                            style="height: 1px !important; max-height: 1px !important; max-width: 1px !important; width: 1px !important;">
                                                        <iframe id="google_ads_frame0"></iframe>
                                                    </iframe>
                                                </ins>
                                                <script>
                                                    (adsbygoogle = window.adsbygoogle || []).push({});
                                                </script>
                                                <div class="title-detail-audio all-title">
                                                    <h3>
                                                        <i class="fas fa-info-circle"></i>
                                                        Download <?php the_title(); ?>
                                                    </h3>
                                                </div>
                                                <div class="single-content">
                                                    Download <?php the_title(); ?> from the genre. Free,
                                                    high-quality <?php the_title(); ?>
                                                    (<?php echo esc_html($post->file_size) ?>) ringtones for your phone.
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                    &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                                    &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                                    &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                                    &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                                    &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<table
                                            class="table table-bordered">
                                        <tbody>
                                        <tr>
                                            <th><b>Name Ringtone</b></th>
                                            <td>
                                                <h3 class="title-table"><?php the_title(); ?></h3>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>Categories</th>
                                            <td>
                                        <span class="post-category">
                                            <?php
                                            foreach ($categories as $category) {
                                                echo '<a href="' . esc_url(get_category_link($category->term_id)) . '">' . esc_html($category->name) . '</a>, ';
                                            }
                                            ?>
                                        </span>

                                            </td>
                                        </tr>
                                        <tr>
                                            <th>Views/Downloads</th>
                                            <td class="parameter">
                                                <i class="fas fa-eye"> <?php echo esc_html($post->view) ?></i>
                                                <i class="fas fa-download"> <?php echo esc_html($post->download_count) ?></i>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>File size</th>
                                            <td><?php echo esc_html($post->file_size) ?></td>
                                        </tr>
                                        <tr id="download-now">
                                            <th>Type</th>
                                            <td>
                                                <?php echo $filetype['type'] ?>
                                            </td>
                                        </tr>

                                        <tr>
                                            <th>Author</th>
                                            <td>
                                                <?php echo get_the_author(); ?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>Download Now!</th>
                                            <td>
                                                <a class="buton-download download-button" href="javascript:void()" data-toggle="modal" data-target="#download-popup">
                                                    <i class="fas fa-download"></i>Download
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>Update</th>
                                            <td>
                                                <?php echo get_the_modified_date(); ?>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            <?php
                            endwhile;
                            ?>

                            <!-- Post same -->
                            <div class="same-ringtones">
                                <div class="aside-post">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="title-aside title-same-post all-title"><h3><i
                                                            class="fas fa-music icon-title"></i> Related Ringtones</h3>
                                            </div>

                                            <?php
                                            $params = array('posts_per_page' => 15);
                                            $query = new WP_Query($params);

                                            if ($query->have_posts()) : the_post();

                                                while ($query->have_posts()) :
                                                    $query->the_post();
                                                    ?>
                                                    <div class="same-posts-container">
                                                        <div class="col-md-12 col-lg-6 container-same-item">
                                                            <div class="box-same-item">
                                                                <div class="box-play">
                                                                    <svg height="45px" width="45px"
                                                                         xmlns="http://www.w3.org/2000/svg"
                                                                         viewBox="0 0 512 512">
                                                                        <path fill="#51A0A4"
                                                                              d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8zm115.7 272l-176 101c-15.8 8.8-35.7-2.5-35.7-21V152c0-18.4 19.8-29.8 35.7-21l176 107c16.4 9.2 16.4 32.9 0 42z"/>
                                                                    </svg>
                                                                </div>
                                                                <div class="title-audio">
                                                                    <a href="https://zigtone.com/pop/dum-masala-ringtone/"
                                                                       title="Dum Masala"
                                                                       class="link-post"><?php the_title(); ?></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                <?php
                                                endwhile;
                                                ?>
                                            <?php
                                            endif;
                                            ?>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="modal fade" id="download-popup" tabindex="-1" role="dialog" aria-labelledby="newsPopupLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <p class="modal-title" id="newsPopupLabel"><?php the_title(); ?></p>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body text-center">
                                            <br/><strong>Download Here</strong>
                                            <div id="wait-for" class="mt-4"></div>
                                            <div class="download-box mt-4 d-none">
                                                <a class="buton-download" href="<?php echo get_page_link($downloadPage) . '?id=' . get_field('file') . '&post=' . get_the_ID() ?>">
                                                    <i class="fas fa-download"></i>MP3
                                                </a>
                                                <a class="buton-download ml-2" href="<?php echo get_page_link($downloadPage) . '?id=' . get_field('file') . '&post=' . get_the_ID() . '&type=m4r' ?>">
                                                    <i class="fas fa-download"></i>M4R
                                                </a>

                                                <div class="mt-4 w-gift-box">
                                                    <div class="mb-3">
                                                        <strong>Geschenk für dich</strong>
                                                    </div>
                                                    <?php
                                                    $images = array();
                                                    $params = array(
                                                        'post_type' => 'wallpaper2',
                                                        'posts_per_page' => 2
                                                    );
                                                    $query = new WP_Query($params);

                                                    if ( $query->have_posts() ) :
                                                        while ( $query->have_posts() ) :
                                                            $query->the_post();
                                                            $id = get_the_ID();
                                                            $files = get_field('file');
                                                            foreach ($files as $f) {
                                                                $i = array(
                                                                    'id' => $id,
                                                                    'file' => $f,
                                                                    'url' => wp_get_attachment_image_src($f, 'home-thumb')[0]
                                                                );
                                                                array_push($images, $i);
                                                            }
                                                        endwhile;
                                                    endif;

                                                    $rand_keys = array_rand($images, 4);
                                                    foreach ($rand_keys as $k) {
                                                        $image = $images[$k];
                                                        ?>
                                                        <div class="w-gift">
                                                            <a href="http://zingtone.local/phone-wallpaper#wallpaper-<?php echo $image['id'] ?>-<?php echo $image['file'] ?>" rel="nofollow" target="_blank">
                                                                <img src="<?php echo $image['url'] ?>"rel="nofollow" target="_blank">
                                                            </a>
                                                        </div>
                                                    <?php } ?>
                                                    <div class="mt-3 text-center p-1">
                                                        <small>Coole Klingeltöne + Schöne Hintergrundbilder für Handy</small>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="right-single">

                            <aside class="sidebar sidebar-detail">
                                <div id="sticky-sidebar">
                                    <div id="sticky-sidebar-content">
                                        <div class="sb-row">
                                            <div class="sb-header d-flex align-items-center">
                                                <div class="sb-header-icon rounded-pill">
                                                    <svg class="icon chart-icon" width="16px" height="16px"
                                                         viewBox="0 0 24 24" fill="none"
                                                         xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M21 21H6.2C5.07989 21 4.51984 21 4.09202 20.782C3.71569 20.5903 3.40973 20.2843 3.21799 19.908C3 19.4802 3 18.9201 3 17.8V3M7 15L12 9L16 13L21 7"
                                                              stroke="#000000" stroke-width="2" stroke-linecap="round"
                                                              stroke-linejoin="round"></path>
                                                    </svg>
                                                </div>
                                                <h3 class="heading">TOP Ringtones list</h3>
                                            </div>
                                            <div class="sb-body">
                                                <ul class="ringtones list-group">
                                                    <?php
                                                    $params = array('posts_per_page' => 15);
                                                    $query = new WP_Query($params);

                                                    if ($query->have_posts()) : the_post();
                                                        $count = 1;
                                                        while ($query->have_posts()) :

                                                            $query->the_post();
                                                            ?>
                                                            <li class="ringtone list-group-item" data-id="14067">
                                                                <div class="list-group-player mediPlayer"
                                                                     data-fid="0qpu3tyv4nz0gs838ewgmv27kz5xcwvds">
                                                                    <svg height="35px" width="35px"
                                                                         xmlns="http://www.w3.org/2000/svg"
                                                                         viewBox="0 0 512 512">
                                                                        <path fill="#51A0A4"
                                                                              d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8zm115.7 272l-176 101c-15.8 8.8-35.7-2.5-35.7-21V152c0-18.4 19.8-29.8 35.7-21l176 107c16.4 9.2 16.4 32.9 0 42z"></path>
                                                                    </svg>
                                                                </div>
                                                                <div class="list-group-content">
                                                                    <a href="https://mobcup.com.co/tu-maro-dariyo-ringtone-download-pagalworld-4nz0gs8"
                                                                       class="list-group-title text-truncate"
                                                                       title="Tu Maro Dariyo Ringtone Download Pagalworld"><?php the_title() ?></a>
                                                                    <span class="list-group-subtitle">00:21 sec • <?php echo esc_html(get_field('view')); ?> views</span>
                                                                </div>
                                                                <span class="btn btn-icon btn-sm btn-default rounded-pill me-2 d-btn">
                                            <svg class="icon download-icon" fill="#000000" width="14px" height="14px"
                                                 viewBox="0 0 32 32" version="1.1" xmlns="http://www.w3.org/2000/svg">
                                                <title>download-cloud</title>
                                                <path d="M0 16q0 2.912 1.824 5.088t4.576 2.752q0.032 0 0.032-0.032v-0.064t0.032-0.032q0.544-1.344 1.344-2.176t2.208-1.184v-2.336q0-2.496 1.728-4.256t4.256-1.76 4.256 1.76 1.76 4.256v2.336q1.376 0.384 2.176 1.216t1.344 2.144l0.096 0.288h0.384q2.464 0 4.224-1.76t1.76-4.224v-2.016q0-2.464-1.76-4.224t-4.224-1.76q-0.096 0-0.32 0.032 0.32-1.152 0.32-2.048 0-3.296-2.368-5.632t-5.632-2.368q-2.88 0-5.056 1.824t-2.784 4.544q-1.152-0.352-2.176-0.352-3.296 0-5.664 2.336t-2.336 5.664v1.984zM10.016 25.824q-0.096 0.928 0.576 1.6l4 4q0.576 0.576 1.408 0.576t1.408-0.576l4-4q0.672-0.672 0.608-1.6-0.064-0.32-0.16-0.576-0.224-0.576-0.736-0.896t-1.12-0.352h-1.984v-5.984q0-0.832-0.608-1.408t-1.408-0.608-1.408 0.608-0.576 1.408v5.984h-2.016q-0.608 0-1.12 0.352t-0.736 0.896q-0.096 0.288-0.128 0.576z"></path>
                                            </svg>
                                        </span>
                                                                <span class="list-group-number">#<?php echo $count; ?></span>
                                                            </li>
                                                        <?php
                                                            $count++;
                                                        endwhile;
                                                        wp_reset_postdata();
                                                        ?>
                                                    <?php
                                                    endif;
                                                    ?>

                                                </ul>
                                            </div>
                                        </div>
                                        <div class="ad2" style="margin: 20px 0;"></div>
                                        <div class="sb-row">
                                            <div class="sb-header d-flex align-items-center">
                                                <div class="sb-header-icon rounded-pill">
                                                    <svg class="icon chart-icon">
                                                        <use xlink:href="#chart-icon"></use>
                                                    </svg>
                                                </div>
                                                <h3 class="heading">Best Collection list</h3>
                                            </div>
                                            <div class="sb-body">
                                                <ul class="ringtones list-group">
                                                    <?php
                                                    $params = array('posts_per_page' => 15);
                                                    $query = new WP_Query($params);

                                                    if ($query->have_posts()) : the_post();
                                                        $count = 1;
                                                        while ($query->have_posts()) :

                                                            $query->the_post();
                                                            ?>
                                                            <li class="ringtone list-group-item" data-id="14067">
                                                                <div class="list-group-player mediPlayer"
                                                                     data-fid="0qpu3tyv4nz0gs838ewgmv27kz5xcwvds">
                                                                    <svg height="35px" width="35px"
                                                                         xmlns="http://www.w3.org/2000/svg"
                                                                         viewBox="0 0 512 512">
                                                                        <path fill="#51A0A4"
                                                                              d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8zm115.7 272l-176 101c-15.8 8.8-35.7-2.5-35.7-21V152c0-18.4 19.8-29.8 35.7-21l176 107c16.4 9.2 16.4 32.9 0 42z"></path>
                                                                    </svg>
                                                                </div>
                                                                <div class="list-group-content">
                                                                    <a href="https://mobcup.com.co/tu-maro-dariyo-ringtone-download-pagalworld-4nz0gs8"
                                                                       class="list-group-title text-truncate"
                                                                       title="Tu Maro Dariyo Ringtone Download Pagalworld"><?php the_title() ?></a>
                                                                    <span class="list-group-subtitle">00:21 sec • <?php echo esc_html(get_field('view')); ?> views</span>
                                                                </div>
                                                                <span class="btn btn-icon btn-sm btn-default rounded-pill me-2 d-btn">
                                            <svg class="icon download-icon" fill="#000000" width="14px" height="14px"
                                                 viewBox="0 0 32 32" version="1.1" xmlns="http://www.w3.org/2000/svg">
                                                <title>download-cloud</title>
                                                <path d="M0 16q0 2.912 1.824 5.088t4.576 2.752q0.032 0 0.032-0.032v-0.064t0.032-0.032q0.544-1.344 1.344-2.176t2.208-1.184v-2.336q0-2.496 1.728-4.256t4.256-1.76 4.256 1.76 1.76 4.256v2.336q1.376 0.384 2.176 1.216t1.344 2.144l0.096 0.288h0.384q2.464 0 4.224-1.76t1.76-4.224v-2.016q0-2.464-1.76-4.224t-4.224-1.76q-0.096 0-0.32 0.032 0.32-1.152 0.32-2.048 0-3.296-2.368-5.632t-5.632-2.368q-2.88 0-5.056 1.824t-2.784 4.544q-1.152-0.352-2.176-0.352-3.296 0-5.664 2.336t-2.336 5.664v1.984zM10.016 25.824q-0.096 0.928 0.576 1.6l4 4q0.576 0.576 1.408 0.576t1.408-0.576l4-4q0.672-0.672 0.608-1.6-0.064-0.32-0.16-0.576-0.224-0.576-0.736-0.896t-1.12-0.352h-1.984v-5.984q0-0.832-0.608-1.408t-1.408-0.608-1.408 0.608-0.576 1.408v5.984h-2.016q-0.608 0-1.12 0.352t-0.736 0.896q-0.096 0.288-0.128 0.576z"></path>
                                            </svg>
                                        </span>
                                                                <span class="list-group-number">#<?php echo $count; ?></span>
                                                            </li>
                                                            <?php
                                                            $count++;
                                                        endwhile;
                                                        wp_reset_postdata();
                                                        ?>
                                                    <?php
                                                    endif;
                                                    ?>

                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </aside>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>


<?php
get_footer();
