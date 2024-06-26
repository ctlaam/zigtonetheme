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
<?php $downloadPage = get_page_by_path('download'); ?>
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
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a
                                                    href="<?php echo esc_url(home_url('/')); ?>">Home</a></li>
                                        <li class="breadcrumb-item active"
                                            aria-current="page"><?php the_title(); ?></li>
                                    </ol>
                                </nav>
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
                                                MP3/M4R
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
                                                <a class="buton-download download-button" href="javascript:void()"
                                                   data-toggle="modal" data-target="#download-popup">
                                                    <i class="fas fa-download"></i>Download
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>Update</th>
                                            <td>
                                                <?php echo get_the_modified_date('Y/m/d'); ?>
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
                                            $params = array(
                                                'posts_per_page' => 20,
                                                'orderby' => 'rand'
                                            );
                                            $query = new WP_Query($params);

                                            if ($query->have_posts()) : the_post();

                                                while ($query->have_posts()) :
                                                    $query->the_post();
                                                    $ringtone_url = get_post_meta(get_the_ID(), 'ringtone_url', true);
                                                    $duration = get_post_meta(get_the_ID(), 'duration', true);
                                                    ?>
                                                    <div class="same-posts-container">
                                                        <div class="col-md-12 col-lg-6 container-same-item">
                                                            <div class="box-same-item">
                                                                <div class="mediPlayer box-play icon-play-random" data-fid="<?php echo esc_attr($ringtone_url); ?>">
                                                                    <i class="far fa-play-circle icon-play icon-play-suggest " data-link="<?php echo esc_html(wp_get_attachment_url(get_field('file'))); ?>"></i>
                                                                </div>
                                                                <div>
                                                                    <span class="title-audio details">
                                                                        <a href="<?php the_permalink(); ?>"
                                                                           title="<?php the_title() ?>"
                                                                           class="link-post"><?php the_title(); ?></a>
                                                                    </span>
                                                                    <span class="group-subtitle duration"><?php $duration = get_post_meta(get_the_ID(), 'duration', true) ;echo esc_html($duration) ?></span>
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

                            <div class="modal fade" id="download-popup" tabindex="-1" role="dialog"
                                 aria-labelledby="newsPopupLabel" aria-hidden="true">
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
                                                <a class="buton-download"
                                                   href="<?php echo get_page_link($downloadPage) . '?id=' . get_field('file') . '&post=' . get_the_ID() ?>">
                                                    <i class="fas fa-download"></i>MP3
                                                </a>
                                                <a class="buton-download ml-2"
                                                   href="<?php echo get_page_link($downloadPage) . '?id=' . get_field('file') . '&post=' . get_the_ID() . '&type=m4r' ?>">
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

                                                    if ($query->have_posts()) :
                                                        while ($query->have_posts()) :
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
                                                            <a href="http://zingtone.local/phone-wallpaper#wallpaper-<?php echo $image['id'] ?>-<?php echo $image['file'] ?>"
                                                               rel="nofollow" target="_blank">
                                                                <img src="<?php echo $image['url'] ?>" rel="nofollow"
                                                                     target="_blank">
                                                            </a>
                                                        </div>
                                                    <?php } ?>
                                                    <div class="mt-3 text-center p-1">
                                                        <small>Coole Klingeltöne + Schöne Hintergrundbilder für
                                                            Handy</small>
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
                                                <h3 class="heading">TOP Views</h3>
                                            </div>
                                            <div class="sb-body">
                                                <ul class="ringtones list-group">
                                                    <?php
                                                    $params = array(
                                                        'posts_per_page' => 4,
                                                        'post_type' => 'post',
                                                        'meta_key' => 'view',
                                                        'orderby' => 'meta_value_num',
                                                        'order' => 'DESC',
                                                    );
                                                    $query = new WP_Query($params);

                                                    if ($query->have_posts()) : the_post();
                                                        $count = 1;
                                                        while ($query->have_posts()) :

                                                            $query->the_post();
                                                            $ringtone_url = get_post_meta(get_the_ID(), 'ringtone_url', true);
                                                            ?>
                                                            <li class="ringtone list-group-item" data-id="14067">
                                                                <div class="mediPlayer box-play" data-fid="<?php echo esc_attr($ringtone_url); ?>">
                                                                    <i class="far fa-play-circle icon-play icon-play-suggest" data-link="<?php echo esc_html(wp_get_attachment_url(get_field('file'))); ?>"></i>
                                                                </div>
                                                                <div class="list-group-content">
                                                                    <a href="<?php the_permalink(); ?>"
                                                                       class="list-group-title text-truncate"
                                                                       title="Tu Maro Dariyo Ringtone Download Pagalworld"><?php the_title() ?></a>
                                                                    <span class="list-group-subtitle">00:21 sec • <?php echo esc_html(get_field('view')); ?> Views</span>
                                                                </div>
                                                                <span class="btn btn-icon btn-sm btn-default rounded-pill me-2 d-btn">
                                            <svg fill="#000000" width="20px" height="20px" viewBox="-3.5 0 32 32" version="1.1" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <title>view</title> <path d="M12.406 13.844c1.188 0 2.156 0.969 2.156 2.156s-0.969 2.125-2.156 2.125-2.125-0.938-2.125-2.125 0.938-2.156 2.125-2.156zM12.406 8.531c7.063 0 12.156 6.625 12.156 6.625 0.344 0.438 0.344 1.219 0 1.656 0 0-5.094 6.625-12.156 6.625s-12.156-6.625-12.156-6.625c-0.344-0.438-0.344-1.219 0-1.656 0 0 5.094-6.625 12.156-6.625zM12.406 21.344c2.938 0 5.344-2.406 5.344-5.344s-2.406-5.344-5.344-5.344-5.344 2.406-5.344 5.344 2.406 5.344 5.344 5.344z"></path> </g></svg>
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
                                                    <svg width="20px" height="20px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path fill-rule="evenodd" clip-rule="evenodd" d="M12.1329 19.5001C11.2535 19.5139 10.453 18.9947 10.1068 18.1862C9.76067 17.3776 9.93758 16.44 10.5546 15.8132C11.1716 15.1864 12.1062 14.9946 12.9202 15.328C13.7341 15.6613 14.2658 16.4535 14.2659 17.3331C14.2705 17.9033 14.0483 18.4519 13.6483 18.8583C13.2482 19.2647 12.7032 19.4956 12.1329 19.5001Z" stroke="#000000" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path> <path d="M11 6.24998C11.4142 6.24998 11.75 5.91419 11.75 5.49998C11.75 5.08576 11.4142 4.74998 11 4.74998V6.24998ZM5 4.74998C4.58579 4.74998 4.25 5.08576 4.25 5.49998C4.25 5.91419 4.58579 6.24998 5 6.24998V4.74998ZM11 9.24998C11.4142 9.24998 11.75 8.91419 11.75 8.49998C11.75 8.08576 11.4142 7.74998 11 7.74998V9.24998ZM5 7.74998C4.58579 7.74998 4.25 8.08576 4.25 8.49998C4.25 8.91419 4.58579 9.24998 5 9.24998V7.74998ZM9 12.25C9.41421 12.25 9.75 11.9142 9.75 11.5C9.75 11.0858 9.41421 10.75 9 10.75V12.25ZM5 10.75C4.58579 10.75 4.25 11.0858 4.25 11.5C4.25 11.9142 4.58579 12.25 5 12.25V10.75ZM13.515 17.333C13.515 17.7472 13.8508 18.083 14.265 18.083C14.6792 18.083 15.015 17.7472 15.015 17.333H13.515ZM15.015 8.99998C15.015 8.58576 14.6792 8.24998 14.265 8.24998C13.8508 8.24998 13.515 8.58576 13.515 8.99998H15.015ZM14.265 8.99998H13.515C13.515 9.21257 13.6052 9.41518 13.7632 9.55741C13.9212 9.69964 14.1322 9.76813 14.3436 9.74585L14.265 8.99998ZM14.265 7.49998H15.015C15.015 7.48645 15.0146 7.47292 15.0139 7.45941L14.265 7.49998ZM14.8187 6.05369L14.2884 5.52336V5.52336L14.8187 6.05369ZM16.265 5.49998L16.2244 6.24888C16.2379 6.24961 16.2515 6.24998 16.265 6.24998V5.49998ZM17.42 5.49998V6.24999L17.4235 6.24997L17.42 5.49998ZM19.0042 6.99586L18.2553 7.03533V7.03533L19.0042 6.99586ZM17.586 8.64998L17.5107 7.90376L17.5074 7.90411L17.586 8.64998ZM11 4.74998H5V6.24998H11V4.74998ZM11 7.74998H5V9.24998H11V7.74998ZM9 10.75H5V12.25H9V10.75ZM15.015 17.333V8.99998H13.515V17.333H15.015ZM15.015 8.99998V7.49998H13.515V8.99998H15.015ZM15.0139 7.45941C14.9962 7.13326 15.1181 6.81498 15.349 6.58402L14.2884 5.52336C13.7562 6.05557 13.4754 6.78899 13.5161 7.54055L15.0139 7.45941ZM15.349 6.58402C15.58 6.35306 15.8983 6.23121 16.2244 6.24888L16.3056 4.75108C15.554 4.71036 14.8206 4.99115 14.2884 5.52336L15.349 6.58402ZM16.265 6.24998H17.42V4.74998H16.265V6.24998ZM17.4235 6.24997C17.8659 6.24789 18.232 6.59355 18.2553 7.03533L19.7532 6.9564C19.6878 5.71524 18.6593 4.74414 17.4165 4.74999L17.4235 6.24997ZM18.2553 7.03533C18.2786 7.47712 17.9508 7.85934 17.5107 7.90377L17.6613 9.39619C18.8979 9.27137 19.8186 8.19755 19.7532 6.9564L18.2553 7.03533ZM17.5074 7.90411L14.1864 8.25411L14.3436 9.74585L17.6646 9.39585L17.5074 7.90411Z" fill="#000000"></path> </g></svg>
                                                </div>
                                                <h3 class="heading">Top Downloaded</h3>
                                            </div>
                                            <div class="sb-body">
                                                <ul class="ringtones list-group">
                                                    <?php
                                                    $params = array(
                                                        'posts_per_page' => 4,
                                                        'post_type' => 'post',
                                                        'meta_key' => 'download_count',
                                                        'orderby' => 'meta_value_num',
                                                        'order' => 'DESC',
                                                    );
                                                    $query = new WP_Query($params);

                                                    if ($query->have_posts()) : the_post();
                                                        $count = 1;
                                                        while ($query->have_posts()) :

                                                            $query->the_post();
                                                            $ringtone_url = get_post_meta(get_the_ID(), 'ringtone_url', true);
                                                            ?>
                                                            <li class="ringtone list-group-item" data-id="14067">
                                                                <div class="mediPlayer box-play" data-fid="<?php echo esc_attr($ringtone_url); ?>">
                                                                    <i class="far fa-play-circle icon-play icon-play-suggest" data-link="<?php echo esc_html(wp_get_attachment_url(get_field('file'))); ?>"></i>
                                                                </div>
                                                                <div class="list-group-content">
                                                                    <a href="<?php the_permalink(); ?>"
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
