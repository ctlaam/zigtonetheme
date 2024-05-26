<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package zigtone
 */

?>
<?php
 // Lấy thông tin cần thiết từ bài viết
        $post_id = get_the_ID();
        $post_title = get_the_title();
        $post_url = get_permalink();
        $post_excerpt = get_the_excerpt();
        $audio_url = get_post_meta($post_id, 'audio_url', true); // Giả sử bạn lưu URL audio trong custom field 'audio_url'
        $downloads = get_post_meta($post_id, 'downloads', true); // Giả sử bạn lưu số lượt tải về trong custom field 'downloads'
        $duration = get_post_meta($post_id, 'duration', true); // Giả sử bạn lưu thời lượng audio trong custom field 'duration'
        ?>

        <div class="item ringtone">
            <div class="details">
                <div class="controls" data-id="<?php echo $post_id; ?>" data-f="1">
                    <div class="mediPlayer">
                        <audio ringtoneaudio class="listen" preload="none" data-size="56" src="<?php echo esc_url($audio_url); ?>" id="audio<?php echo $post_id; ?>"></audio>
                        <svg viewBox="0 0 100 100" id="playable<?php echo $post_id; ?>" version="1.1" xmlns="http://www.w3.org/2000/svg" width="56" height="56" data-play="playable" class="not-started playable">
                            <g class="shape">
                                <circle class="progress-track" cx="50" cy="50" r="47.45" stroke="#ff0099" stroke-opacity="0.25" stroke-linecap="round" fill="none" stroke-width="5"></circle>
                                <circle class="precache-bar" cx="50" cy="50" r="47.45" stroke="#ff0099" stroke-opacity="0.25" stroke-linecap="round" fill="none" stroke-width="5" transform="rotate(-90 50 50)"></circle>
                                <circle class="progress-bar" cx="50" cy="50" r="47.45" stroke="#ff0099" stroke-opacity="1" stroke-linecap="round" fill="none" stroke-width="5" transform="rotate(-90 50 50)"></circle>
                            </g>
                            <circle class="controls" cx="50" cy="50" r="45" stroke="none" fill="#000000" opacity="0.0" pointer-events="all"></circle>
                            <g class="control pause">
                                <line x1="40" y1="35" x2="40" y2="65" stroke="#ff0099" fill="none" stroke-width="8" stroke-linecap="round"></line>
                                <line x1="60" y1="35" x2="60" y2="65" stroke="#ff0099" fill="none" stroke-width="8" stroke-linecap="round"></line>
                            </g>
                            <g class="control play">
                                <polygon points="45,35 65,50 45,65" fill="#ff0099" stroke-width="0"></polygon>
                            </g>
                            <g class="control stop">
                                <rect x="35" y="35" width="30" height="30" stroke="#000000" fill="none" stroke-width="1"></rect>
                            </g>
                        </svg>
                    </div>
                    <div class="spinner-border"></div>
                </div>
                <a class="meta" href="<?php echo esc_url($post_url); ?>">
                    <div class="data">
                        <h3 class="title"><?php echo esc_html($post_title); ?></h3>
                        <div class="info">
                            <div class="duration"><?php echo esc_html($duration); ?></div>
                            <div class="downloads"><?php echo esc_html($downloads); ?></div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="tags" style="display:none">
                <?php
                $tags = get_the_tags();
                if ($tags) {
                    foreach ($tags as $tag) {
                        echo '<a href="' . get_tag_link($tag->term_id) . '">' . $tag->name . '</a>';
                    }
                }
                ?>
            </div>
            <div class="bottom-wrap">
                <div class="share-button" data-share-url="<?php echo urlencode($post_url); ?>" data-share-title="<?php echo esc_attr($post_title); ?>">
                    <svg width="800px" height="800px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M13.803 5.33333C13.803 3.49238 15.3022 2 17.1515 2C19.0008 2 20.5 3.49238 20.5 5.33333C20.5 7.17428 19.0008 8.66667 17.1515 8.66667C16.2177 8.66667 15.3738 8.28596 14.7671 7.67347L10.1317 10.8295C10.1745 11.0425 10.197 11.2625 10.197 11.4872C10.197 11.9322 10.109 12.3576 9.94959 12.7464L15.0323 16.0858C15.6092 15.6161 16.3473 15.3333 17.1515 15.3333C19.0008 15.3333 20.5 16.8257 20.5 18.6667C20.5 20.5076 19.0008 22 17.1515 22C15.3022 22 13.803 20.5076 13.803 18.6667C13.803 18.1845 13.9062 17.7255 14.0917 17.3111L9.05007 13.9987C8.46196 14.5098 7.6916 14.8205 6.84848 14.8205C4.99917 14.8205 3.5 13.3281 3.5 11.4872C3.5 9.64623 4.99917 8.15385 6.84848 8.15385C7.9119 8.15385 8.85853 8.64725 9.47145 9.41518L13.9639 6.35642C13.8594 6.03359 13.803 5.6896 13.803 5.33333Z" fill="#1C274C"/>
                    </svg>
                </div>
                <div class="download-button">
                    <img src="https://www.ringtonebaaz.net/wp-content/themes/itones/assets/img/download-icon.png" alt="download icon"> Download
                </div>
            </div>
        </div>