<?php
get_header();
?>

    <section id="primary-full" class="content-area">
        <main id="main" class="site-main" role="main">
            <h3>Filters</h3>

<?php
silencio_partial('partials/filters', array('page' => 'recipe'), true);
if (have_posts()) {
?>
            <h1 class="page-title sr-only">Recipes</h1>

<?php
    while (have_posts()) {
        the_post();
        get_template_part('content', get_post_format());
    }
    silencio_paging_numeric();
} else {
    get_template_part('content', 'none');
}
?>

        </main><!-- #main -->
    </section><!-- #primary -->

<?php
get_footer();
