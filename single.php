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
                            </div><!-- .entry-meta -->
                        </header>
                        <div class="entry-content">
                            <div class="ad_content_full_top">
                                <!-- SaiaDoLugar_Conteudo_Topo_468x60 -->
                                <div id='div-gpt-ad-1377889179116-0' style='width:468px; height:60px;'>
                                <script type='text/javascript'>
                                googletag.cmd.push(function() { googletag.display('div-gpt-ad-1377889179116-0'); });
                                </script>
                                </div>
                            </div>
                            <?php the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'twentythirteen' ) ); ?>
                            <?php wp_link_pages( array( 'before' => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'twentythirteen' ) . '</span>', 'after' => '</div>', 'link_before' => '<span>', 'link_after' => '</span>' ) ); ?>

                            <div class="ad_content_full_bottom">
                                <!-- SaiaDoLugar_Conteudo_Fundo_468x60 -->
                                <div id='div-gpt-ad-1377889491453-0' style='width:468px; height:60px;'>
                                <script type='text/javascript'>
                                googletag.cmd.push(function() { googletag.display('div-gpt-ad-1377889491453-0'); });
                                </script>
                                </div>
                            </div>
                        </div><!-- .entry-content -->
                        <footer class="entry-footer">
                            <div class="entry-meta">
                                <?php twentythirteen_entry_meta(); ?>
                            </div><!-- .entry-meta -->
                        </footer><!-- .entry-footer -->
                    </article>
                    
                    <?php if (function_exists('related_posts')) : ?>
                        <?php related_posts();?>
                    <?php endif ?>

                    <div class="facebook-comments">
                        <div class="fb-comments" data-width="600"></div>
                    </div>
                    
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