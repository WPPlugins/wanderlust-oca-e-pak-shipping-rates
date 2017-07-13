<?php

if ( ! defined( 'ABSPATH' ) ) {

	exit;

}



/**

 * Array of settings

 */

return array(

	'enabled'          => array(

		'title'           => __( 'Activar OCA', 'woocommerce-shipping-oca' ),

		'type'            => 'checkbox',

		'label'           => __( 'Activar este método de envió', 'woocommerce-shipping-oca' ),

		'default'         => 'no'

	),

	'debug'      => array(

		'title'           => __( 'Modo Depuración', 'woocommerce-shipping-oca' ),

		'label'           => __( 'Activar modo depuración', 'woocommerce-shipping-oca' ),

		'type'            => 'checkbox',

		'default'         => 'no',

		'desc_tip'    => true,

		'description'     => __( 'Activar el modo de depuración para mostrar información de depuración en la compra/pago y envío.', 'woocommerce-shipping-oca' )

	),

	'title'            => array(

		'title'           => __( 'Título', 'woocommerce-shipping-oca' ),

		'type'            => 'text',

		'description'     => __( 'Controla el título que el usuario ve durante el pago.', 'woocommerce-shipping-oca' ),

		'default'         => __( 'OCA', 'woocommerce-shipping-oca' ),

		'desc_tip'        => true

	),

	'origin'           => array(

		'title'           => __( 'Código Postal de Origen', 'woocommerce-shipping-oca' ),

		'type'            => 'text',

		'description'     => __( 'Ingrese el código postal del <strong> remitente </ strong>.', 'woocommerce-shipping-oca' ),

		'default'         => '',

		'desc_tip'        => true

    ),

    'api'              => array(

		'title'           => __( 'Configuración de la API', 'woocommerce-shipping-oca' ),

		'type'            => 'title',

		'description'     => __( 'Sus datos de acceso de la API se obtienen de la página web de la OCA.', 'woocommerce-shipping-oca' ),

    ),

    'cuit_number'           => array(

		'title'           => __( 'Número de CUIT', 'woocommerce-shipping-oca' ),

		'type'            => 'text',

		'description'     => __( '', 'woocommerce-shipping-oca' ),

		'default'         => __( '', 'woocommerce-shipping-oca' ),

    	'placeholder' => __( '00-00000000-0', 'meta-box' ),



    ),

    'ajuste_precio'           => array(

		'title'           => __( 'Ajustar Costos %', 'woocommerce-shipping-oca' ),

		'type'            => 'text',

		'description'     => __( 'Agregar costo extra al precio.', 'woocommerce-shipping-oca' ),

		'default'         => __( '', 'woocommerce-shipping-oca' ),

    	'placeholder' => __( '1%', 'meta-box' ),		

    ),	

'mercado_pago'      => array(
		'title'           => __( 'Modo Mercado Pago', 'woocommerce-shipping-oca' ),
		'label'           => __( 'No agregar el costo de envio en el Total', 'woocommerce-shipping-oca' ),
		'type'            => 'checkbox',
		'default'         => 'no',
		'desc_tip'    => true,
		'description'     => __( 'Activar el modo de Mercado pago para no agregar costo de envio en el Total.', 'woocommerce-shipping-oca' )
	),	

    'packing'           => array(

		'title'           => __( 'Paquetes', 'woocommerce-shipping-oca' ),

		'type'            => 'title',

		'description'     => __( 'Los siguientes ajustes determinan cómo los artículos se embalan antes de ser enviado a la OCA.', 'woocommerce-shipping-oca' ),

    ),

	'packing_method'   => array(

		'title'           => __( 'Método Embalaje', 'woocommerce-shipping-oca' ),

		'type'            => 'select',

		'default'         => '',

		'class'           => 'packing_method',

		'options'         => array(

			'per_item'       => __( 'Por defecto: artículos individuales', 'woocommerce-shipping-oca' ),

		),

	),

 	'services'  => array(

		'type'            => 'service'

	),

);