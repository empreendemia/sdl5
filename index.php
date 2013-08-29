<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme and one of the
 * two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * For example, it puts together the home page when no home.php file exists.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */

get_header();

$exclude_ids = array();

/* posts em destaque */
$featured_posts = get_posts(array(
    'numberposts' => 5,
    'tag' => 'destaques',
    'orderby' => 'post_date',
    'order' => 'DESC'
));
$exclude_ids[] = $featured_posts[0]->ID;
$exclude_ids[] = $featured_posts[1]->ID;
$exclude_ids[] = $featured_posts[2]->ID;
$exclude_ids[] = $featured_posts[3]->ID;
$exclude_ids[] = $featured_posts[4]->ID;

/* dicas ao empreendedor */
$tip_post = get_posts(array('posts_per_page'=>'1','tag'=>'dicas-ao-empreendedor'));
$tip_post = $tip_post[0];
$exclude_ids[] = $tip_post->ID;

query_posts(array(
	'posts_per_page'=>'10',
	'post__not_in' => $exclude_ids
));
?>
	<div id="featured-posts">
		<div class="wrapper">
			<div id="featured-posts-slider">
				<ul id="featured-posts-list">
					<?php for ($i = 0; $i < 5; $i++) : ?>
					<li id="featured-post-<?php echo $i ?>">
						<a href="<?php echo get_permalink($featured_posts[$i]->ID); ?>">
							<div class="image"><?php echo get_the_post_thumbnail($featured_posts[$i]->ID, 'header') ?></div>
							<div class="text">
								<h2 class="title"><?php echo $featured_posts[$i]->post_title ?></h2>
								<p class="excerpt">Resumo</p>
							</div>
						</a>
					</li>
					<?php endfor; ?>
				</ul>
			</div>
			<ul id="featured-posts-selector">
				<?php for ($i = 0; $i < 5; $i++) : ?>
				<li id="featured-post-selector-<?php echo $i ?>" onclick="javascript: selectFeaturedPost(<?php echo $i ?>)">
					<?php echo $featured_posts[$i]->post_title ?>
				</li>
				<?php endfor; ?>
			</ul>
			<div id="featured-posts-bar">
				<div class="progress show-none"></div>
			</div>
		</div>
	</div>
	
	<div class="content-area">
            <div class="wrapper">
				<div class="columns">
					<div id="primary" class="column-left">
						<div id="content" class="site-content" role="main">
							<div id="last_tip">
								<h2><a href="<?php echo get_permalink($tip_post->ID) ?>"><?php echo $tip_post->post_title ?></a></h2>
								<div class="more"><a href="<?php echo get_site_url() ?>/tags/dicas-ao-empreendedor">Veja outras dicas ao empreendedor</a></div>
							</div><!-- .last_tip -->
							<div id="recent_posts">
								<?php 
								if (have_posts()) :
								while (have_posts()) : the_post();
								$image = get_the_post_thumbnail($post->ID, array(200, 200));
								$image = ($image != '') ? $image : false;
								$categories = get_categories();
								$category = $categories[0]->name;
								?>
		
								<!-- begin post -->
		
									<div class="recent_post <?php if ($image) echo 'withimage'; else echo 'noimage' ?>">
										<a href="<?php the_permalink(); ?>">
											<?php if ($image) : ?><div class="thumb"><?php echo $image ?></div><?php endif ?>
											<h3><?php the_title(); ?></h3>
											<div class="category">postado em <strong><?php echo $category ?></strong></div>
											<div class="excerpt"><?php the_excerpt() ?></div>
										</a>
									</div>
								<?php endwhile; ?>
								<?php endif; ?>
								<div class="clear"></div>
							</div><!-- #recent_posts -->
								
						</div><!-- #content -->
					</div><!-- .col-left -->
					<div class="column-right">
						<?php get_sidebar(); ?>
					</div><!-- .col-right -->
					<div class="clear"></div>
				</div><!-- .columns -->
            </div><!-- .wrapper -->
	</div><!-- #primary -->

<?php get_footer(); ?>