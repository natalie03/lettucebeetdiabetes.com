<?php
get_header();
?>

    <section id="primary-full" class="content-area">
        <main id="main" class="site-main" role="main">

<?php
if (have_posts()) {
?>

            <header class="page-header">
                <h1 class="page-title sr-only">Recipes</h1>
            </header><!-- .page-header -->

<?php
    while (have_posts()) {
        the_post();
        get_template_part('content', get_post_format());
    }
    silencio_paging_nav();
} else {
    get_template_part('content', 'none');
}
?>

        </main><!-- #main -->
    </section><!-- #primary -->

<?php
get_footer();
