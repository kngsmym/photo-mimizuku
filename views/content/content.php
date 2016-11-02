<?php
/**
 * @package mimizuku
 * @author inc2734
 * @license GPL-2.0+
 */
?>
<article <?php post_class(); ?>>
	<header class="_p-entry__header">
		<div class="_p-entry__keyvisual">
			<?php the_post_thumbnail(); ?>
			<h1 class="_p-entry__title"><?php the_title(); ?></h1>
			<div class="_p-entry__caption">
				<div class="_p-entry__shooting_date"><?php echo esc_html( get_post_meta($post->ID,'shooting_date',true) ); ?></div>
				<div class="_p-entry__location"><?php echo esc_html( get_post_meta($post->ID,'location',true) ); ?></div>
			</div>
			<?php get_template_part( 'template-parts/entry-meta__shooting' ); ?>
		</div>
	</header>

	<div class="_p-entry__content _c-container">
		<?php get_template_part( 'template-parts/entry-meta' ); ?>
		<?php the_content(); ?>
		<?php get_template_part( 'template-parts/link-pages' ); ?>
	</div>

	<?php
	if ( comments_open() || pings_open() || get_comments_number() ) {
		comments_template( '', true );
	}
	?>
</article>
