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
<div class="genre">
    <?php
    $categories = get_categories(array(
        'orderby' => 'name',
        'order'   => 'ASC',
        'exclude' => 37
    ));

    foreach( $categories as $category ) {
        ?>
        <div class="item-genre">
            <a
                    title="<?php echo esc_html($category->name) ?>"
                    href="<?php echo esc_url(get_category_link($category->term_id)) ?>"
            >
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

<?php wp_footer(); ?>

</body>

</html>
