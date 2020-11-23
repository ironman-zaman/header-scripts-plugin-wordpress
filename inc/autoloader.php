<?php

if ( ! class_exists( 'Autoload_WP' ) ) {
	/**
	 * Generic autoloader for classes named in WordPress coding style.
	 */
	class Autoload_WP {

		public $dir;
        
		function __construct( $dir = '' ) {
             $this->dir = plugin_dir_path( __DIR__ );
            
			if ( ! empty( $this->dir ) )
			  spl_autoload_register( array( $this, 'autoloader' ) );
		}

		function autoloader( $class_name ) {
			$class_path = $this->dir . '/classes/class-' . strtolower( str_replace( '_', '-', $class_name ) ) . '.php';
            if ( file_exists( $class_path ) )
            {
                include $class_path;
            }
				
		}
	}
}