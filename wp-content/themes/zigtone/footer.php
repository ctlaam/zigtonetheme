<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package zigtone
 */

?>
<div class="genre row m-0">
    <?php
    $categories = get_categories(array(
        'orderby' => 'name',
        'order'   => 'ASC',
        'exclude' => 37
    ));

    foreach ($categories as $category) {
    ?>
        <div class="item-genre col-lg-2 col-md-4 col-2">
            <a title="<?php echo esc_html($category->name) ?>" href="<?php $category_link = $category->name; $search_url = esc_url(home_url("/?s=$category_link"));  echo $search_url;    ?>">
                <?php echo esc_html($category->name) ?> (<?php echo $category->category_count ?>)
            </a>
        </div>
    <?php } ?>
</div>
<footer>
    <div class="footer-custom">

        <p class="text-center"><a href="https://klingeltonekostenlos.de" title="Klingelton Kostenlos">zingtone free 2024</a> | <?php echo home_url() ?></p>
        <p class="text-center"><a href="#">About Us</a> | <a href="#" target="_blank" rel="nofollow noopener noreferrer">Legal Notice</a> | <a href="#" target="_blank" rel="nofollow noopener noreferrer">Privacy Policy</a> | <a href="#" target="_blank" rel="nofollow noopener noreferrer">Terms of Use</a> | <a href="#" target="_blank" rel="nofollow noopener noreferrer">Contact </a> | <a href="#" target="_blank" rel="nofollow noopener noreferrer">Cookies</a> | <a href="#" target="_blank" rel="nofollow noopener noreferrer">SiteMap</a> </p>
        <ul class="social-link text-center">
            <li>
                <a href="#" title="facebook" target="_blank" rel="nofollow noopener noreferrer"><i class="fab fa-facebook-square"></i></a>
            </li>
            <li>
                <a href="#" title="Instagram" target="_blank" rel="nofollow noopener noreferrer"><i class="fab fa-instagram"></i></a>
            </li>
            <li>
                <a href="#" title="twitter" target="_blank" rel="nofollow noopener noreferrer"><i class="fab fa-twitter-square"></i></a>
            </li>
        </ul>
        <style>
            .social-link{
                list-style:none;
            }
            .social-link li{
                display:inline-block;
                margin-right:10px;
            }
        </style>
        <div class="text-center">
            Copyright © 2020 - 2024. Erstellt von <b><a href="<?php echo home_url() ?>"><?php echo home_url() ?></a></b>. Alle Rechte vorbehalten.
            <br>
            Adresse: zingtone free: (+23) 20 72625911
        </div>
    </div>

</footer>
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<?php wp_footer(); ?>
<script>
        let hash = window.location.hash.substr(1);
        let st = '#' + hash;

        if (hash.length > 0 && $(st).length > 0) {
        let title = $(st).data('title');
        let file = $(st).data('file');
        let fileIOS = $(st).data('file-ios');
        let carouselInner = $(st).data('carousel');
        console.log(title);
        $('#w-wallpaper-detail-title').html(title);
        $('.w-wallpaper-download').attr('href', file);
        $('.w-wallpaper-download-ios').attr('href', fileIOS);
        $('.carousel-inner').html(carouselInner);
        $('#w-wallpaper-detail').modal('toggle');
    }
</script>
</body>

</html>