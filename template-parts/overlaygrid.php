<?php
$args = array(
	'category_name' => 'photo',
	'posts_per_page' => -1
	);
$the_query = new WP_Query( $args );

?>

<div class="_p-overlay">
	<div class="_p-overlay__close">
		<a href="#" class="_p-overlay__closebtn"><i class="fa fa-times-circle" aria-hidden="true"></i></a>
	</div>
	<ul class="_p-entries _c-container _c-row">
		<?php
			if ( $the_query->have_posts() ) :
			while ( $the_query->have_posts() ) : $the_query->the_post();
		?>
		<li class="_p-entries__item _c-row__col _c-row__col--lg-1-8 _c-row__col--md-1-6 _c-row__col--1-3">
			<?php get_template_part( 'views/content/content', 'summary' ); ?>
		</li>
		<?php endwhile;endif; ?>
	</ul>
	<div class="_p-overlay__close">
		<a href="#" class="_p-overlay__closebtn"><i class="fa fa-times-circle" aria-hidden="true"></i></a>
	</div>
</div>

