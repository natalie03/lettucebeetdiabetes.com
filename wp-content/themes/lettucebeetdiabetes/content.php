<article id="post-<?php the_ID(); ?>" <?php post_class('archive-article'); ?>>
<?php
if (has_post_thumbnail()) {
    the_post_thumbnail('blog-thumb');
}
?>
    <header class="entry-header">
        <h2 class="entry-title"><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h2>
        <div class="entry-meta"><?php silencio_footer_meta(); ?></div>

    </header><!-- .entry-header -->

</article><!-- #post-## -->
