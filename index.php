<?php //get_header(); ?>
<?php $myRequest = $_POST['myRequest']; if ($myRequest != "ajax"){get_header();} ?>
<?php var_dump($_POST);?>
哪里
<div id="content">
	<article class="mod-archive">
		<div class="mod-archive__item"><div class="mod-archive__year"><?php single_cat_title(); ?></div>
			<ul class="mod-archive__list">
			<?php while( have_posts() ): the_post(); ?>
				<li><time class="mod-archive__time" datetime="<?php the_time('Y-m-d h:i:s'); ?>"><?php the_time('Y-m-d'); ?></time> <span>—</span> <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></li>
			<?php endwhile; ?>
			</ul>
			<div class="posts-nav">
			<?php echo paginate_links(array(
				'prev_next'          => 0,
				'before_page_number' => '',
				'mid_size'           => 2,
			));?>
			</div>
		</div>
	</article>
</div>
<?php if ($myRequest != "ajax"): ?>
	<?php get_footer();?>
<?php endif;?>
<!-- <?php get_footer(); ?> -->
