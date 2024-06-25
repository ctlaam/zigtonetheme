<?php $category = get_the_category()[0]; $duration = get_post_meta(get_the_ID(), 'duration', true);
$downloads = get_post_meta(get_the_ID(), 'download_count', true); $categorys = get_the_category(); $ringtone_url = get_post_meta(get_the_ID(), 'ringtone_url', true) ?>


<div class="ringtone grid-item" data-id="<?php the_ID(); ?>">
    <div class="details">
        <div class="controls">
            <div class="mediPlayer box-play" data-fid="<?php echo esc_attr($ringtone_url); ?>">
                <i class="far fa-play-circle icon-play" data-link="<?php echo esc_html(wp_get_attachment_url(get_field('file'))); ?>"></i>
            </div>
        </div>
        <a class="meta" href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
            <div class="data">
                <h3 class="title"><?php the_title(); ?></h3>
                <div class="info">
                    <div class="duration"><?php echo esc_html($duration); ?></div>
                    <div class="downloads"><?php echo esc_html($downloads); ?></div>
                </div>

            </div>
        </a>
    </div>
    <div class="tags">
        <?php
        foreach ($categorys as $category) {
            echo '<a href="' . esc_url(get_category_link($category->term_id)) . '" rel="tag">' . ($category->name) . '</a>';
        }
        ?>
    </div>
    <div class="bottom-wrap">
        <div class="action">
            <div class=" btn-icon btn-sm btn-default rounded-pill me-2 share" data-url="<?php the_permalink(); ?>" data-title="<?php the_title_attribute(); ?>" data-bs-toggle="modal" data-bs-target="#share_tkkb">
                <svg class="share share-icon" fill="#51A0A4" height="16px" width="16px" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 458.624 458.624" xml:space="preserve">
                    <g>
                        <g>
                            <path d="M339.588,314.529c-14.215,0-27.456,4.133-38.621,11.239l-112.682-78.67c1.809-6.315,2.798-12.976,2.798-19.871
                                        c0-6.896-0.989-13.557-2.798-19.871l109.64-76.547c11.764,8.356,26.133,13.286,41.662,13.286c39.79,0,72.047-32.257,72.047-72.047
                                        C411.634,32.258,379.378,0,339.588,0c-39.79,0-72.047,32.257-72.047,72.047c0,5.255,0.578,10.373,1.646,15.308l-112.424,78.491
                                        c-10.974-6.759-23.892-10.666-37.727-10.666c-39.79,0-72.047,32.257-72.047,72.047s32.256,72.047,72.047,72.047
                                        c13.834,0,26.753-3.907,37.727-10.666l113.292,79.097c-1.629,6.017-2.514,12.34-2.514,18.872c0,39.79,32.257,72.047,72.047,72.047
                                        c39.79,0,72.047-32.257,72.047-72.047C411.635,346.787,379.378,314.529,339.588,314.529z" />
                        </g>
                    </g>
                </svg>
            </div>
            <div class=" btn-icon btn-sm btn-default rounded-pill fav like">
                <svg class="icon like-icon" width="800px" height="800px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M2 9.1371C2 14 6.01943 16.5914 8.96173 18.9109C10 19.7294 11 20.5 12 20.5C13 20.5 14 19.7294 15.0383 18.9109C17.9806 16.5914 22 14 22 9.1371C22 4.27416 16.4998 0.825464 12 5.50063C7.50016 0.825464 2 4.27416 2 9.1371Z" fill="#1C274C" />
                </svg>
            </div>
        </div>
        <div class=" btn-red rounded-pill download">
            <svg class="icon download-icon" fill="#51A0A4" width="14px" height="14px" viewBox="0 0 32 32" version="1.1" xmlns="http://www.w3.org/2000/svg">
                <title>download-cloud</title>
                <path d="M0 16q0 2.912 1.824 5.088t4.576 2.752q0.032 0 0.032-0.032v-0.064t0.032-0.032q0.544-1.344 1.344-2.176t2.208-1.184v-2.336q0-2.496 1.728-4.256t4.256-1.76 4.256 1.76 1.76 4.256v2.336q1.376 0.384 2.176 1.216t1.344 2.144l0.096 0.288h0.384q2.464 0 4.224-1.76t1.76-4.224v-2.016q0-2.464-1.76-4.224t-4.224-1.76q-0.096 0-0.32 0.032 0.32-1.152 0.32-2.048 0-3.296-2.368-5.632t-5.632-2.368q-2.88 0-5.056 1.824t-2.784 4.544q-1.152-0.352-2.176-0.352-3.296 0-5.664 2.336t-2.336 5.664v1.984zM10.016 25.824q-0.096 0.928 0.576 1.6l4 4q0.576 0.576 1.408 0.576t1.408-0.576l4-4q0.672-0.672 0.608-1.6-0.064-0.32-0.16-0.576-0.224-0.576-0.736-0.896t-1.12-0.352h-1.984v-5.984q0-0.832-0.608-1.408t-1.408-0.608-1.408 0.608-0.576 1.408v5.984h-2.016q-0.608 0-1.12 0.352t-0.736 0.896q-0.096 0.288-0.128 0.576z"></path>
            </svg>
            Download
        </div>
    </div>
</div>