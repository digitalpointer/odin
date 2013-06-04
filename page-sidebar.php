<?php
/**
 * Template Name: P&aacute;gina com sidebar
 */
get_header();
?>
<div id="primary" class="span8">
    <div id="content" role="main">
        <?php while ( have_posts() ) : the_post(); ?>
            <article <?php post_class(); ?>>
                <header class="entry-header">
                    <h1 class="entry-title"><?php the_title(); ?></h1>
                </header><!-- .entry-header -->
                <div class="entry-content">
                    <?php the_content(); ?>
                    <?php wp_link_pages( array( 'before' => '<div class="page-link"><span>' . __( 'Pages:', 'odin' ) . '</span>', 'after' => '</div>' ) ); ?>
                </div><!-- .entry-content -->
            </article>
            <?php
                if ( 'open' == $post->comment_status ) {
                    comments_template( '', true );
                }
            ?>
        <?php endwhile; ?>
    </div><!-- #content -->
</div><!-- #primary -->
<?php get_sidebar(); ?>
<?php get_footer(); ?>
