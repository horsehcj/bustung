<?php
/**
 * The Template for displaying all single products
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see         https://docs.woocommerce.com/document/template-structure/
 * @package     WooCommerce\Templates
 * @version     1.6.4
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}
?>

@extends('layouts.app')

@section('content')

	@while(have_posts()) @php the_post() @endphp
		@php global $product @endphp
		<section class="single-product-hero-section">
			<?php
				$post_thumbnail_id = $product->get_image_id();
				echo $post_thumbnail_id;
			?>
		</section>
		<?php wc_get_template_part( 'content', 'single-product' ); ?>
	@endwhile
@endsection
