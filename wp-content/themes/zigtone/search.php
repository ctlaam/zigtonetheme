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
    <div class="container rt-container"><div class="row main-cateogy" style="height: auto !important;">
        <div class="left-category" style="height: auto !important;">
            <div class="row">
                <div class="title">
                    <h1>
                        <?php
                        echo get_search_query();
                        ?>
                    </h1>
                </div>
            </div>
            <div class="row content-breadcrumb">

                <p id="breadcrumbs" class="post_breadcrumbs"><span><span><a href="<?php echo get_bloginfo('wpurl') ?>">Startseite</a> » <span class="breadcrumb_last" aria-current="page"><?php echo 'Ergebnisse für "' . get_search_query() . '" zurückgegeben'; ?></span></span></span></p>		</div>
            <div class="row category-ajax">
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
            <div class="row" style="margin-bottom: 25px;">
                <div class="navigation">
                    <div class="alignleft">
                        <?php previous_posts_link('« Previous Page'); ?>
                    </div>
                    <div class="alignright">
                        <?php next_posts_link('Next Page »', $query->max_num_pages); ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="right-category">
            <?php get_sidebar(); ?>
        </div>
    </div>

<?php
get_footer();
