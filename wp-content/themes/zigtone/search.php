<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package sonneriepro
 */

get_header();
?>
    <div class="container main">
        <div class="content">
        <section class="section ringtone">
            <header class="page-heading">
                <div class="heading-box">
                    <h1 class="title">Search: <?php echo get_search_query() ?></h1>
                </div>
            </header>
            <section class="section">
                <div class="ringtones grid">
                    <?php
                    $paged = get_query_var('paged');
                    $searchTerm = get_search_query();
                    $params = array(
                        's' => $searchTerm,
                        'post_type' => 'post',
                        'posts_per_page' => 10,
                        'paged' => $paged
                    );
                    $query = new WP_Query($params);

                    if ($query->have_posts()) : ?>
                        <?php
                        while ($query->have_posts()) :
                            $query->the_post();
                            get_template_part('template-parts/content-category', get_post_type());
                        endwhile;
                    endif;
                    ?>
                </div>
            </section>
        </section>
    </div>
    </div>
<?php
get_footer();
