<?php
/**
* The default template for displaying content
*
* @link http://codex.wordpress.org/Template_Hierarchy
*
* @package WordPress
* @subpackage Skillcrush_Starter
* @since Skillcrush Starter 2.0
*/
?>

<article id="post-<?php the_ID(); ?>" class="post-entry">
	<div class="entry-wrap">
		<header class="entry-header">
			<div class="entry-meta">
				<time class="entry-time"><?php echo get_the_date(); ?></time>
			</div>
			<h2 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
		</header>
		<div class="entry-summary">
			<?php if ( has_post_thumbnail() ) : ?>
			  <figure>
			    <?php the_post_thumbnail('full'); ?>
			  </figure>
			<?php endif; ?>
			<?php the_excerpt(); ?>
		</div>
		<footer class="entry-footer">
			<div class="entry-meta">
				<span class="entry-terms author">Written by <a href=""><?php the_author();?></a></span>
				<span class="entry-terms category">Posted in <a href=""><?php the_category(', ');?></a></span>
				<span class="entry-terms commets"><a href="<?php comments_link(); ?>"><?php comments_number( '<span>No Comments</span>', '1 Comment', '% comments' ); ?></a>
				</span>
			</div>
		</footer>
	</div>
</article>
