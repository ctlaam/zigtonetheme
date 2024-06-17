<?php

/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package zigtone
 */

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
                <div class="ad">
                    <ins class="adsbygoogle" style="display:block" data-ad-client="ca-pub-3445999244031312" data-ad-slot="5165091296" data-ad-format="auto" data-full-width-responsive="true">
                        <iframe id="aswift_0" style="height: 1px !important; max-height: 1px !important; max-width: 1px !important; width: 1px !important;">
                            <iframe id="google_ads_frame0"></iframe>
                        </iframe>
                    </ins>
                    <script>
                        (adsbygoogle = window.adsbygoogle || []).push({});
                    </script>
                </div>
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
                        $params = array('posts_per_page' => 15);
                        $query = new WP_Query($params);

                        if ($query->have_posts()) :

                            while ($query->have_posts()) :
                                $query->the_post();
                                get_template_part('template-parts/content', get_post_type());
                            endwhile;
                        endif;
                        ?>
                    </div>
                </section>

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
                            <h2 class="mb-0"><span class="text-primary">FAQ</span></h2>
                        </div>
                    </div>
                    <div class="faq-header">Frequently Asked Questions</div>

                    <div class="faq-content">
                        <div class="faq-question">
                            <input id="q1" type="checkbox" class="panel">
                            <div class="plus">+</div>
                            <label for="q1" class="panel-title">What is the meaning of life?</label>
                            <div class="panel-content">42</div>
                        </div>

                        <div class="faq-question">
                            <input id="q2" type="checkbox" class="panel">
                            <div class="plus">+</div>
                            <label for="q2" class="panel-title">How much wood would a woodchuck chuck?</label>
                            <div class="panel-content">A woodchuck would chuck all the wood he could chuck, if a
                                woodchuck could chuck wood!
                            </div>
                        </div>

                        <div class="faq-question">
                            <input id="q3" type="checkbox" class="panel">
                            <div class="plus">+</div>
                            <label for="q3" class="panel-title">What happens if Pinocchio says, "my nose will grow
                                now"?</label>
                            <div class="panel-content">Certain questions are better left &nbsp; <a href="https://en.wikipedia.org/wiki/The_Unanswered_Question" target="_blank">unanswered</a></div>
                        </div>
                    </div>
                </section>
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
                            <h2 class="mb-0"><span class="text-primary">Blog</span></h2>
                        </div>
                    </div>
                    <div class="row blog-block">
                        <div class="col-12 col-xl-4 col-md-6">
                            <div class="blog-card blog-card-blog">
                                <div class="blog-card-image">
                                    <a href="#">
                                        <img class="img" src="https://picsum.photos/id/1084/536/354?grayscale">
                                    </a>
                                    <div class="ripple-cont">
                                    </div>
                                </div>
                                <div class="blog-table">
                                    <h4 class="blog-card-caption">
                                        <a href="#">Lorem Ipsum is simply dummy text of the printing and</a>
                                    </h4>
                                    <div class="ftr">
                                        <div class="author">
                                            <a href="#"><span>See more</span></a>
                                        </div>
                                        <div class="stats"><i class="far fa-clock"></i> 10 min</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-xl-4 col-md-6">
                            <div class="blog-card blog-card-blog">
                                <div class="blog-card-image">
                                    <a href="#">
                                        <img class="img" src="https://picsum.photos/id/1084/536/354?grayscale">
                                    </a>
                                    <div class="ripple-cont">
                                    </div>
                                </div>
                                <div class="blog-table">
                                    <h4 class="blog-card-caption">
                                        <a href="#">Lorem Ipsum is simply dummy text of the printing and</a>
                                    </h4>
                                    <div class="ftr">
                                        <div class="author">
                                            <a href="#"><span>See more</span></a>
                                        </div>
                                        <div class="stats"><i class="far fa-clock"></i> 10 min</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-xl-4 col-md-6">
                            <div class="blog-card blog-card-blog">
                                <div class="blog-card-image">
                                    <a href="#">
                                        <img class="img" src="https://picsum.photos/id/1084/536/354?grayscale">
                                    </a>
                                    <div class="ripple-cont">
                                    </div>
                                </div>
                                <div class="blog-table">
                                    <h4 class="blog-card-caption">
                                        <a href="#">Lorem Ipsum is simply dummy text of the printing and</a>
                                    </h4>
                                    <div class="ftr">
                                        <div class="author">
                                            <a href="#"><span>See more</span></a>
                                        </div>
                                        <div class="stats"><i class="far fa-clock"></i> 10 min</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
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
                                <li class="ringtone list-group-item" data-id="14067">
                                    <div class="list-group-player mediPlayer" data-fid="0qpu3tyv4nz0gs838ewgmv27kz5xcwvds">
                                        <svg height="35px" width="35px" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                            <path fill="#51A0A4" d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8zm115.7 272l-176 101c-15.8 8.8-35.7-2.5-35.7-21V152c0-18.4 19.8-29.8 35.7-21l176 107c16.4 9.2 16.4 32.9 0 42z"></path>
                                        </svg>
                                    </div>
                                    <div class="list-group-content">
                                        <a href="https://mobcup.com.co/tu-maro-dariyo-ringtone-download-pagalworld-4nz0gs8" class="list-group-title text-truncate" title="Tu Maro Dariyo Ringtone Download Pagalworld">Tu Maro Dariyo Song
                                            Ringtone Download</a>
                                        <span class="list-group-subtitle">00:21 sec • 110 views</span>
                                    </div>
                                    <span class="btn btn-icon btn-sm btn-default rounded-pill me-2 d-btn">
                                        <svg class="icon download-icon" fill="#000000" width="14px" height="14px" viewBox="0 0 32 32" version="1.1" xmlns="http://www.w3.org/2000/svg">
                                            <title>download-cloud</title>
                                            <path d="M0 16q0 2.912 1.824 5.088t4.576 2.752q0.032 0 0.032-0.032v-0.064t0.032-0.032q0.544-1.344 1.344-2.176t2.208-1.184v-2.336q0-2.496 1.728-4.256t4.256-1.76 4.256 1.76 1.76 4.256v2.336q1.376 0.384 2.176 1.216t1.344 2.144l0.096 0.288h0.384q2.464 0 4.224-1.76t1.76-4.224v-2.016q0-2.464-1.76-4.224t-4.224-1.76q-0.096 0-0.32 0.032 0.32-1.152 0.32-2.048 0-3.296-2.368-5.632t-5.632-2.368q-2.88 0-5.056 1.824t-2.784 4.544q-1.152-0.352-2.176-0.352-3.296 0-5.664 2.336t-2.336 5.664v1.984zM10.016 25.824q-0.096 0.928 0.576 1.6l4 4q0.576 0.576 1.408 0.576t1.408-0.576l4-4q0.672-0.672 0.608-1.6-0.064-0.32-0.16-0.576-0.224-0.576-0.736-0.896t-1.12-0.352h-1.984v-5.984q0-0.832-0.608-1.408t-1.408-0.608-1.408 0.608-0.576 1.408v5.984h-2.016q-0.608 0-1.12 0.352t-0.736 0.896q-0.096 0.288-0.128 0.576z"></path>
                                        </svg>
                                    </span>
                                    <span class="list-group-number">#1</span>
                                </li>
                                <li class="ringtone list-group-item" data-id="24066">
                                    <div class="list-group-player mediPlayer" data-fid="mqnpsjh7r652j5kgxcdvya7te3n1uoabi">
                                        <svg class="icon play">
                                            <use xlink:href="#play-icon"></use>
                                        </svg>
                                    </div>
                                    <div class="list-group-content">
                                        <a href="https://mobcup.com.co/tu-mala-anguracha-ringtone-download-r652j5k" class="list-group-title text-truncate" title="Tu Mala Anguracha – Ek Phool | TDM Ringtone">Tu Mala Anguracha
                                            Song Ringtone Download</a>
                                        <span class="list-group-subtitle">00:28 sec • 100 views</span>
                                    </div>
                                    <span class="btn btn-icon btn-sm btn-default rounded-pill me-2 d-btn"><svg class="icon download-icon">
                                            <use xlink:href="#download-icon"></use>
                                        </svg></span>
                                    <span class="list-group-number">#2</span>
                                </li>
                                <li class="ringtone list-group-item" data-id="34065">
                                    <div class="list-group-player mediPlayer" data-fid="uwk93c4qpcfmaj4wazr1v1qxyx5smlisl">
                                        <svg class="icon play">
                                            <use xlink:href="#play-icon"></use>
                                        </svg>
                                    </div>
                                    <div class="list-group-content">
                                        <a href="https://mobcup.com.co/nazara-khasa-aala-chahar-ringtone-download-pcfmaj4" class="list-group-title text-truncate" title="Nazara – Khasa Aala Chahar | Haryanvi Ringtone">Nazara Song
                                            Ringtone Download</a>
                                        <span class="list-group-subtitle">00:34 sec • 154 views</span>
                                    </div>
                                    <span class="btn btn-icon btn-sm btn-default rounded-pill me-2 d-btn"><svg class="icon download-icon">
                                            <use xlink:href="#download-icon"></use>
                                        </svg></span>
                                    <span class="list-group-number">#3</span>
                                </li>
                                <li class="ringtone list-group-item" data-id="44064">
                                    <div class="list-group-player mediPlayer" data-fid="jc16m5o924fxijbmieobjm1cyw6zj20ty">
                                        <svg class="icon play">
                                            <use xlink:href="#play-icon"></use>
                                        </svg>
                                    </div>
                                    <div class="list-group-content">
                                        <a href="https://mobcup.com.co/pagal-babbu-maan-ringtone-download-24fxijb" class="list-group-title text-truncate" title="Pagal – Babbu Maan | Guru Randhawa Ringtone">Pagal Song Ringtone
                                            Download</a>
                                        <span class="list-group-subtitle">00:51 sec • 136 views</span>
                                    </div>
                                    <span class="btn btn-icon btn-sm btn-default rounded-pill me-2 d-btn"><svg class="icon download-icon">
                                            <use xlink:href="#download-icon"></use>
                                        </svg></span>
                                    <span class="list-group-number">#4</span>
                                </li>
                                <li class="ringtone list-group-item" data-id="54063">
                                    <div class="list-group-player mediPlayer" data-fid="01gw8yi64hxqwuoays5j3ucix0p8qk9yg">
                                        <svg class="icon play">
                                            <use xlink:href="#play-icon"></use>
                                        </svg>
                                    </div>
                                    <div class="list-group-content">
                                        <a href="https://mobcup.com.co/laake-logdi-de-gut-naal-phul-ni-ringtone-download-4hxqwuo" class="list-group-title text-truncate" title="Laake Logdi De Gut Naal Phul Ni – Jind Kad Ke | Instagram Reels Ringtone">Laake
                                            Logdi De Gut Naal Phul Ni Song Ringtone Download</a>
                                        <span class="list-group-subtitle">00:28 sec • 255 views</span>
                                    </div>
                                    <span class="btn btn-icon btn-sm btn-default rounded-pill me-2 d-btn"><svg class="icon download-icon">
                                            <use xlink:href="#download-icon"></use>
                                        </svg></span>
                                    <span class="list-group-number">#5</span>
                                </li>
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
                                <li class="ringtone list-group-item" data-id="139">
                                    <div class="list-group-player mediPlayer" data-fid="mayfhj9wai4hep4qglxv50goha0jt2qcy">
                                        <svg class="icon play">
                                            <use xlink:href="#play-icon"></use>
                                        </svg>
                                    </div>
                                    <div class="list-group-content">
                                        <a href="https://mobcup.com.co/leo-ordinary-person-ringtone-ai4hep4" class="list-group-title text-truncate" title="LEO Ordinary Person Ringtone Download">LEO Ordinary Person Song
                                            Ringtone Download</a>
                                        <span class="list-group-subtitle">00:55 sec • 736403 views</span>
                                    </div>
                                    <span class="btn btn-icon btn-sm btn-default rounded-pill me-2 d-btn"><svg class="icon download-icon">
                                            <use xlink:href="#download-icon"></use>
                                        </svg></span>
                                    <span class="list-group-number">#1</span>
                                </li>
                                <li class="ringtone list-group-item" data-id="245">
                                    <div class="list-group-player mediPlayer" data-fid="b05w9scn8yj2haby1d0shszg60tmp70u1">
                                        <svg class="icon play">
                                            <use xlink:href="#play-icon"></use>
                                        </svg>
                                    </div>
                                    <div class="list-group-content">
                                        <a href="https://mobcup.com.co/ruaan-hindi-song-ringtone-8yj2hab" class="list-group-title text-truncate" title="Ruaan – Tiger 3 | Arijit Singh | Hindi Song Ringtone Download">Ruaan
                                            Song Ringtone Download</a>
                                        <span class="list-group-subtitle">00:43 sec • 180503 views</span>
                                    </div>
                                    <span class="btn btn-icon btn-sm btn-default rounded-pill me-2 d-btn"><svg class="icon download-icon">
                                            <use xlink:href="#download-icon"></use>
                                        </svg></span>
                                    <span class="list-group-number">#2</span>
                                </li>
                                <li class="ringtone list-group-item" data-id="347">
                                    <div class="list-group-player mediPlayer" data-fid="gdt5ywxrhn6mx20qvx8yuhxmewvp97xvd">
                                        <svg class="icon play">
                                            <use xlink:href="#play-icon"></use>
                                        </svg>
                                    </div>
                                    <div class="list-group-content">
                                        <a href="https://mobcup.com.co/tujhe-yaad-na-meri-aayi-2-ringtone-b-praak-hn6mx20" class="list-group-title text-truncate" title="Tujhe Yaad Na Meri Aayi 2 Ringtone Download – B Praak">Tujhe Yaad
                                            Na Meri Aayi 2 Ringtone Download – B Praak</a>
                                        <span class="list-group-subtitle">00:28 sec • 168159 views</span>
                                    </div>
                                    <span class="btn btn-icon btn-sm btn-default rounded-pill me-2 d-btn"><svg class="icon download-icon">
                                            <use xlink:href="#download-icon"></use>
                                        </svg></span>
                                    <span class="list-group-number">#3</span>
                                </li>
                                <li class="ringtone list-group-item" data-id="451">
                                    <div class="list-group-player mediPlayer" data-fid="z67cmrsi6194lf7l38vqo0xaz0gsjajc4">
                                        <svg class="icon play">
                                            <use xlink:href="#play-icon"></use>
                                        </svg>
                                    </div>
                                    <div class="list-group-content">
                                        <a href="https://mobcup.com.co/sunte-hain-jab-pyar-ho-to-instrumental-ringtone-6194lf7" class="list-group-title text-truncate" title="Sunte Hain Jab Pyar Ho To Instrumental Ringtone Download">Sunte
                                            Hain Jab Pyar Ho To Song Ringtone Download</a>
                                        <span class="list-group-subtitle">00:26 sec • 258751 views</span>
                                    </div>
                                    <span class="btn btn-icon btn-sm btn-default rounded-pill me-2 d-btn"><svg class="icon download-icon">
                                            <use xlink:href="#download-icon"></use>
                                        </svg></span>
                                    <span class="list-group-number">#4</span>
                                </li>
                                <li class="ringtone list-group-item" data-id="552">
                                    <div class="list-group-player mediPlayer" data-fid="tz1yjkrioveh7p25staz6xsyovpjhsfqw">
                                        <svg class="icon play">
                                            <use xlink:href="#play-icon"></use>
                                        </svg>
                                    </div>
                                    <div class="list-group-content">
                                        <a href="https://mobcup.com.co/so-beautiful-so-elegant-just-looking-like-a-wow-ringtone-oveh7p2" class="list-group-title text-truncate" title="So Beautiful So Elegant JUst Looking Like A Wow Ringtone Download">So
                                            Beautiful So Elegant Song Ringtone Download</a>
                                        <span class="list-group-subtitle">00:05 sec • 190972 views</span>
                                    </div>
                                    <span class="btn btn-icon btn-sm btn-default rounded-pill me-2 d-btn"><svg class="icon download-icon">
                                            <use xlink:href="#download-icon"></use>
                                        </svg></span>
                                    <span class="list-group-number">#5</span>
                                </li>
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
