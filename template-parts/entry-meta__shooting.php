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
	<i class="fa fa-camera"></i>
	%s',
	esc_html( $meta['body'][0] ),
	esc_html( $meta['body'][0] )
);

/**
 * lens
 */
$entry_meta['lens'] = sprintf(
	'<span class="screen-reader-text">%s</span>
	%s',
	esc_html( $meta['lens'][0] ),
	esc_html( $meta['lens'][0] )
);

/**
 * Tags
 */
$tags = get_the_tag_list( '', ', ' );
if ( $tags ) {
	$entry_meta['tags'] = sprintf(
		'<span class="screen-reader-text">%s</span>
		<i class="fa fa-tags"></i>
		%s',
		esc_html__( 'Tags', 'mimizuku' ),
		get_the_tag_list( '', ', ' )
	);
}

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
