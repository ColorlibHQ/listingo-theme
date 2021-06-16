<?php 
// Block direct access
if( !defined( 'ABSPATH' ) ){
	exit( 'Direct script access denied.' );
}
/**
 * @Packge 	   : Listingo
 * @Version    : 1.0
 * @Author 	   : Colorlib
 * @Author URI : http://colorlib.com/wp/
 *
 */

	$listingo_reservation_title     = !empty( listingo_opt( 'listingo_reservation_title' ) ) ? listingo_opt( 'listingo_reservation_title' ) : '';
	$listingo_reservation_sub_title = !empty( listingo_opt( 'listingo_reservation_sub_title' ) ) ? listingo_opt( 'listingo_reservation_sub_title' ) : '';
	$listingo_reservation_btn_text  = !empty( listingo_opt( 'listingo_reservation_btn_text' ) ) ? listingo_opt( 'listingo_reservation_btn_text' ) : '';
	$listingo_reservation_btn_url	  = !empty( listingo_opt( 'listingo_reservation_btn_url' ) ) ? listingo_opt( 'listingo_reservation_btn_url' ) : '';
	?>
	<div class="footer_header d-flex justify-content-between">
		<div class="footer_header_left">
			<h3><?php echo esc_html( $listingo_reservation_title )?></h3>
			<p><?php echo esc_html( $listingo_reservation_sub_title )?></p>
		</div>
		<div class="footer_btn">
			<a href="<?php echo esc_url( $listingo_reservation_btn_url )?>" class="boxed-btn2"><?php echo esc_html( $listingo_reservation_btn_text )?></a>
		</div>
	</div>