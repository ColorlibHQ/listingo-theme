<?php 
/**
 * @Packge     : Listingo
 * @Version    : 1.0
 * @Author     : Colorlib
 * @Author URI : http://colorlib.com/wp/
 *
 */
 
    // Block direct access
    if( !defined( 'ABSPATH' ) ){
        exit( 'Direct script access denied.' );
    }

        /**
         * Footer Area
         *
         * @Footer
         * @Back To Top Button
         *
         * @Hook listingo_footer
         *
         * @Hooked  listingo_footer_area 
         *
         */

		do_action( 'listingo_footer' );

	wp_footer(); 
 ?>
</body>
</html>