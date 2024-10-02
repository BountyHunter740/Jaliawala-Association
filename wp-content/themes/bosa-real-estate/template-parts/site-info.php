<?php
/**
 * Template part for displaying site info
 *
 * @package Bosa Real Estate 1.0.0
 */

?>

<div class="site-info">
	<?php echo wp_kses_post( html_entity_decode( esc_html__( 'Copyright &copy; ' , 'bosa-real-estate' ) ) );
		echo esc_html( date( 'Y' ) );
		printf( esc_html__( ' Bosa Real Estate. Powered by', 'bosa-real-estate' ) );
	?>
	<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'bosa-real-estate' ) ); ?>" target="_blank">
		<?php
			printf( esc_html__( 'WordPress', 'bosa-real-estate' ) );
		?>
	</a>
</div><!-- .site-info -->