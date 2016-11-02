<?php
/**
 * @package mimizuku
 * @author inc2734
 * @license GPL-2.0+
 */
?>

<?php get_template_part( 'template-parts/pagination' ); ?>

<ul class="_p-entries _c-container _c-row">
	<?php while ( have_posts() ) : the_post(); ?>
	<li class="_p-entries__item _c-row__col _c-row__col--lg-1-8 _c-row__col--md-1-6 _c-row__col--1-3">
		<?php get_template_part( 'views/content/content', 'summary' ); ?>
	</li>
	<?php endwhile; ?>
</ul>

<?php get_template_part( 'template-parts/pagination' ); ?>
