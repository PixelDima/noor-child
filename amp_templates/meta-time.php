<div class="amp-wp-meta amp-wp-posted-on">
    <time datetime="<?php echo esc_attr( date( 'c', $this->get( 'post_publish_timestamp' ) ) ); ?>">
		<?php
		$ago = dima_helper::dima_get_option( 'dima_amp_ago' );
		echo esc_html(
			sprintf(
				'%s ' . esc_attr( $ago ) . '',
				human_time_diff( $this->get( 'post_publish_timestamp' ), current_time( 'timestamp' ) )
			)
		);
		?>
    </time>
</div>
