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
            <a title="<?php echo esc_html($category->name) ?>" href="<?php echo esc_url(get_category_link($category->term_id)) ?>">
                <?php echo esc_html($category->name) ?> (<?php echo $category->category_count ?>)
            </a>
        </div>
    <?php } ?>
</div>
<footer>
    <div class="footer">
        <div class="row">
            <ul>
                <li><a href="#">Contact us</a></li>
                <li><a href="#">Our Services</a></li>
                <li><a href="#">Privacy Policy</a></li>
                <li><a href="#">Terms & Conditions</a></li>
                <li><a href="#">Career</a></li>
            </ul>
        </div>

        <div class="row justify-content-center">
            INFERNO Copyright © 2021 Inferno - All rights reserved || Designed By: Mahesh
        </div>
    </div>
</footer>
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<?php wp_footer(); ?>

</body>

</html>