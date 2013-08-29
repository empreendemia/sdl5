<?php
/**
 * The Template for displaying all single posts.
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */

get_header();

the_post();

$with_image = has_post_thumbnail();
?>

<?php if ($with_image) : ?>
<div id="post-header" class="withimage">
    <div class="wrapper">
        <div class="image fade-in-start">
            <?php the_post_thumbnail('header'); ?>
        </div>
        <h2 class="title"><?php the_title(); ?></h2>
    </div>
</div>
<?php else : ?>
<div id="post-header" class="noimage">
    <div class="wrapper">
        <h2 class="title"><?php the_title(); ?></h2>
    </div>
</div>
<?php endif; ?>

<div class="content-area">
    <div class="wrapper">
        <div class="columns">
            <div id="primary" class="column-left">
                <div id="content" class="site-content" role="main">
                    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                        <header class="entry-header">
                            <h1 class="entry-title"><?php the_title(); ?></h1>
                            <div class="entry-meta">
                                <?php twentythirteen_entry_meta(); ?>
                                <?php edit_post_link( __( 'Edit', 'twentythirteen' ), '<span class="edit-link">', '</span>' ); ?>
                            </div><!-- .entry-meta -->
                        </header>
                        <div class="entry-content">
                            <?php the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'twentythirteen' ) ); ?>
                            <?php wp_link_pages( array( 'before' => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'twentythirteen' ) . '</span>', 'after' => '</div>', 'link_before' => '<span>', 'link_after' => '</span>' ) ); ?>
                        </div><!-- .entry-content -->
                        <footer class="entry-meta">
                            <?php if ( comments_open() && ! is_single() ) : ?>
                                <div class="comments-link">
                                    <?php comments_popup_link( '<span class="leave-reply">' . __( 'Leave a comment', 'twentythirteen' ) . '</span>', __( 'One comment so far', 'twentythirteen' ), __( 'View all % comments', 'twentythirteen' ) ); ?>
                                </div><!-- .comments-link -->
                            <?php endif; // comments_open() ?>
                    
                            <?php if ( is_single() && get_the_author_meta( 'description' ) && is_multi_author() ) : ?>
                                <?php get_template_part( 'author-bio' ); ?>
                            <?php endif; ?>
                        </footer><!-- .entry-meta -->
                    </article>
                </div><!-- #content -->
            </div><!-- #primary -->
            <div class="column-right <?php if ($with_image) echo 'rise' ?>">
                <?php get_sidebar(); ?>
            </div><!-- .col-right -->
            <div class="clear"></div>
        </div><!-- .columns -->
    </div><!-- .wrapper -->
</div><!-- .contentarea -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>