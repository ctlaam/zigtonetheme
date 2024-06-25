<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package zigtone
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Figtree:ital,wght@0,300..900;1,300..900&family=Inter:wght@100..900&display=swap" rel="stylesheet">
    <?php wp_head(); ?>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.0/css/all.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <div id="page" class="site">
        <a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e('Skip to content', 'zigtone'); ?></a>

        <header id="header">
            <div class="header-top navbar-expand-lg">
                <div class="container">
                    <nav class="navbar py-0">
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#main-navbar" aria-controls="main-navbar" aria-expanded="false" aria-label="Toggle navigation">
                            <svg class="icon menu-icon" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" fill="none">
                                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                <g id="SVGRepo_iconCarrier">
                                    <path fill="#000000" fill-rule="evenodd" d="M18 5a1 1 0 100-2H2a1 1 0 000 2h16zm0 4a1 1 0 100-2H2a1 1 0 100 2h16zm1 3a1 1 0 01-1 1H2a1 1 0 110-2h16a1 1 0 011 1zm-1 5a1 1 0 100-2H2a1 1 0 100 2h16z"></path>
                                </g>
                            </svg>
                        </button>
                        <a class="navbar-brand d-flex align-items-center py-0" href="<?php echo esc_url( home_url( '/' ) ); ?>">
                            <span class="navbar-brand-text" style="color: red;">Zingtone</span><span class="navbar-brand-text">Free</span>
                        </a>
                        <div class="collapse navbar-collapse" id="main-navbar">
                            <ul class="navbar-nav mb-3 mb-lg-0">
<!--                                <li class="nav-item"><a class="nav-link " href="--><?php //echo esc_url( home_url( '/' ) ); ?><!--">Home</a></li>-->
                                <li class="nav-item"><a class="nav-link " href="#" rel="nofollow">Latest Ringtones</a>
                                </li>
                                <li class="nav-item"><a class="nav-link " href="#" rel="nofollow">Best Ringtones</a>
                                </li>
                                <li class="nav-item"><a class="nav-link " href="#" rel="nofollow">iPhone Ringtone</a>
                                </li>
                                <li class="nav-item"><a class="nav-link " href="http://zingtone.local/phone-wallpaper">Wallpaper</a>
                                </li>
                            </ul>
                        </div>
                        <ul class="navbar-nav-btn flex-row ms-auto">
                            <li class="nav-item me-2">
                                <span id="search-btn" class="btn btn-icon btn-sm btn-default rounded-pill" style="">
                                    <svg class="icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                        <path d="M18.031 16.6168L22.3137 20.8995L20.8995 22.3137L16.6168 18.031C15.0769 19.263 13.124 20 11 20C6.032 20 2 15.968 2 11C2 6.032 6.032 2 11 2C15.968 2 20 6.032 20 11C20 13.124 19.263 15.0769 18.031 16.6168ZM16.0247 15.8748C17.2475 14.6146 18 12.8956 18 11C18 7.1325 14.8675 4 11 4C7.1325 4 4 7.1325 4 11C4 14.8675 7.1325 18 11 18C12.8956 18 14.6146 17.2475 15.8748 16.0247L16.0247 15.8748Z"></path>
                                    </svg>
                                </span>
                            </li>
                        </ul>
                        <div class="search-box hide-on-search">
                            <form class="search ps-lg-3" action="http://zingtone.local/" method="get" required="true" role="search">
                                <input id="search" class="form-control rounded-pill" autocomplete="off" name="s" required="true" type="search" value="" placeholder="Type on the search ..." aria-label="Search">
                                <button type="submit" class="btn" aria-label="Search">
                                    <svg class="icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                        <path d="M18.031 16.6168L22.3137 20.8995L20.8995 22.3137L16.6168 18.031C15.0769 19.263 13.124 20 11 20C6.032 20 2 15.968 2 11C2 6.032 6.032 2 11 2C15.968 2 20 6.032 20 11C20 13.124 19.263 15.0769 18.031 16.6168ZM16.0247 15.8748C17.2475 14.6146 18 12.8956 18 11C18 7.1325 14.8675 4 11 4C7.1325 4 4 7.1325 4 11C4 14.8675 7.1325 18 11 18C12.8956 18 14.6146 17.2475 15.8748 16.0247L16.0247 15.8748Z"></path>
                                    </svg>
                                </button>
                            </form>
                            <button type="button" class="btn-close" aria-label="Close"></button>
                        </div>
                    </nav>
                </div>
            </div>
        </header>