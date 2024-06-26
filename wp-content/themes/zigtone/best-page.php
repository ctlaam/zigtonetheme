<?php
/* Template Name: Best */
get_header();
?>
    <div class="page-warp col">
        <div class="container main">
            <div class="content">
                <section class="section ringtone">
                    <header class="page-heading">
                        <div class="heading-box">
                            <h1 class="title">Ringtones Ringtones Download</h1>
                        </div>
                    </header>
                    <section class="section">
                        <div class="section-head">
                            <div class="section-icon">
                                <svg class="icon music-icon" viewBox="0 0 24 24" fill="#fff" xmlns="http://www.w3.org/2000/svg">
                                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                    <g id="SVGRepo_iconCarrier">
                                        <path d="M2.74982 18.6508C2.33982 18.6508 1.99982 18.3108 1.99982 17.9008V12.2008C1.94982 9.49078 2.95982 6.93078 4.83982 5.01078C6.71982 3.10078 9.23982 2.05078 11.9498 2.05078C17.4898 2.05078 21.9998 6.56078 21.9998 12.1008V17.8008C21.9998 18.2108 21.6598 18.5508 21.2498 18.5508C20.8398 18.5508 20.4998 18.2108 20.4998 17.8008V12.1008C20.4998 7.39078 16.6698 3.55078 11.9498 3.55078C9.63982 3.55078 7.49982 4.44078 5.90982 6.06078C4.30982 7.69078 3.45982 9.86078 3.49982 12.1808V17.8908C3.49982 18.3108 3.16982 18.6508 2.74982 18.6508Z" fill="#fff"></path>
                                        <path d="M5.94 12.4492H5.81C3.71 12.4492 2 14.1592 2 16.2592V18.1392C2 20.2392 3.71 21.9492 5.81 21.9492H5.94C8.04 21.9492 9.75 20.2392 9.75 18.1392V16.2592C9.75 14.1592 8.04 12.4492 5.94 12.4492Z" fill="#fff"></path>
                                        <path d="M18.19 12.4492H18.06C15.96 12.4492 14.25 14.1592 14.25 16.2592V18.1392C14.25 20.2392 15.96 21.9492 18.06 21.9492H18.19C20.29 21.9492 22 20.2392 22 18.1392V16.2592C22 14.1592 20.29 12.4492 18.19 12.4492Z" fill="#fff"></path>
                                    </g>
                                </svg>
                            </div>
                            <div class="flex-grow-1 ps-3">
                                <span class="section-subtitle">Ringtone</span>
                                <h2 class="mb-0">Trending <span class="text-primary">Ringtones</span></h2>
                            </div>
                        </div>
                        <div class="ringtones grid">

                            <?php
                            $paged = get_query_var('paged');
                            $args = array(
                                'post_type'      => 'post', // Loại bài viết là post
                                'posts_per_page' => 1,      // Số lượng bài viết lấy ra (20 bài)
                                'meta_key'       => 'view', // Tên của custom field
                                'orderby'        => 'meta_value_num', // Sắp xếp theo giá trị số của custom field
                                'order'          => 'DESC', // Thứ tự giảm dần
                                'paged' => $paged
                            );

                            $query = new WP_Query( $args );


                            if ($query->have_posts()) :

                                while ($query->have_posts()) :
                                    $query->the_post();
                                    get_template_part('template-parts/content', get_post_type());
                                endwhile;
                            endif;
                            ?>
                        </div>
                        <div class="row mt-3 mb-3">
                            <nav class="navigation pagination" role="navigation">
                                <div class="nav-links">
                                    <?php
                                    $total = $query->max_num_pages;
                                    $current = max(1, $paged);
                                    if ($total > 1) {
                                        echo paginate_links(array(
                                            'base' => get_pagenum_link(1) . '%_%',
                                            'format' => 'page/%#%',
                                            'current' => $current,
                                            'total' => $total,
                                            'prev_text' => '«',
                                            'next_text' => '»',
                                            'mid_size' => 1
                                        ));
                                    }
                                    wp_reset_postdata();
                                    ?>
                                </div>
                            </nav>
                        </div>
                    </section>
            </div>
            <aside class="sidebar">
                <div id="sticky-sidebar">
                    <div id="sticky-sidebar-content">
                        <div class="sb-row">
                            <div class="sb-header d-flex align-items-center">
                                <div class="sb-header-icon rounded-pill">
                                    <svg class="icon chart-icon" width="16px" height="16px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M21 21H6.2C5.07989 21 4.51984 21 4.09202 20.782C3.71569 20.5903 3.40973 20.2843 3.21799 19.908C3 19.4802 3 18.9201 3 17.8V3M7 15L12 9L16 13L21 7" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
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
<?php
get_footer();
