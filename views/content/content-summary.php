<?php
/**
 * @package mimizuku
 * @author inc2734
 * @license GPL-2.0+
 */
?>
<section <?php post_class( [ '_p-entry-summary' ] ); ?>>
	<a href="<?php the_permalink(); ?>">
		<div class="_p-entry-summary__thumbnail">
			<?php the_post_thumbnail('thumbnail'); ?>
		</div>

		<div class="_p-entry-summary__body">
			<h1 class="_p-entry-summary__title"><?php the_title(); ?></h1>
		</div>
	</a>
</section>
