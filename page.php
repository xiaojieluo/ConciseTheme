
<?php $myRequest = $_POST['myRequest']; if ($myRequest != "ajax"){get_header();} ?>
<?php var_dump($myRequest);?>

<!-- <div class="content"> -->
<article class="mod-post mod-post__type-page">
	<header>
		<h1 class="mod-post__title"><?php the_title(); ?></h1>
	</header>
	<?php while( have_posts() ): the_post(); $p_id = get_the_ID(); ?>
		<div class="mod-post__entry">
			<?php the_content(); ?>
		</div>
	<?php endwhile; ?>
</article>
<?php if ($myRequest != "ajax"){get_footer();} ?>
