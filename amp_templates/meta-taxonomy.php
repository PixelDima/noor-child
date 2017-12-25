<?php $categories = get_the_category_list( _x( ', ', 'Used between list items, there is a space after the comma.', 'noor' ), '', $this->ID ); ?>
<?php if ( $categories ) : ?>
	<div class="amp-wp-meta amp-wp-tax-category">
		<?php printf( dima_helper::dima_get_option('dima_amp_categories').': %s', $categories ); ?>
	</div>
<?php endif; ?>

<?php
$tags = get_the_tag_list(
	'',
	_x( ', ', 'Used between list items, there is a space after the comma.', 'noor' ),
	'',
	$this->ID
); ?>
<?php if ( $tags && ! is_wp_error( $tags ) ) : ?>
	<div class="amp-wp-meta amp-wp-tax-tag">
		<?php printf( dima_helper::dima_get_option('dima_amp_tags').': %s', $tags ); ?>
	</div>
<?php endif; ?>
