<?php
/**
 * @package mimizuku
 * @author inc2734
 * @license GPL-2.0+
 */

$entry_meta = [];

$meta = get_post_custom();

/**
 * body
 */
$entry_meta['body'] = sprintf(
	'<span class="screen-reader-text">%s</span>
	<i class="fa fa-body"></i>%s',
	esc_html( $meta['body'][0] ),
	esc_html( $meta['body'][0] )
);

/**
 * lens
 */
$entry_meta['lens'] = sprintf(
	'<span class="screen-reader-text">%s</span>
	<i class="fa fa-lens"></i>%s',
	esc_html( $meta['lens'][0] ),
	esc_html( $meta['lens'][0] )
);

/**
 * shhoting_date
 */
/*
$entry_meta['shooting_date'] = sprintf(
	'<span class="screen-reader-text">%s</span>
	<i class="fa fa-shooting_date"></i>%s',
	esc_html( $meta['shooting_date'][0] ),
	esc_html( $meta['shooting_date'][0] )
);
*/


$entry_meta = apply_filters( 'mimizuku_entry_meta_items', $entry_meta );
?>
<div class="_p-entry-meta__shooting">
	<ul class="_p-entry-meta__list">
		<?php foreach ( $entry_meta as $key => $item ) : ?>
		<li class="_p-entry-meta__item _p-entry-meta__item--<?php echo esc_attr( $key ); ?>">
			<?php echo wp_kses_post( $item ); ?>
		</li>
		<?php endforeach; ?>
	</ul>
</div>
