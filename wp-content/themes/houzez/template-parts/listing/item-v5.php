<?php
global $post, $ele_thumbnail_size, $image_size;
$property_type = houzez_taxonomy_simple('property_type');
if( houzez_is_fullwidth_2cols_custom_width() ) {
	$image_size = 'houzez-item-image-4';
} else {
	$image_size = 'houzez-item-image-1';
}
?>
<div class="item-listing-wrap hz-item-gallery-js item-listing-wrap-v5 card" data-hz-id="hz-<?php esc_attr_e($post->ID); ?>" <?php houzez_property_gallery($image_size); ?>>
	<div class="item-wrap item-wrap-v5 item-wrap-no-frame h-100">
		<div class="d-flex align-items-center h-100">
			<div class="item-header">
				<?php get_template_part('template-parts/listing/partials/item-featured-label'); ?>
				<?php get_template_part('template-parts/listing/partials/item-labels'); ?>
				<?php get_template_part('template-parts/listing/partials/item-tools'); ?>
				<?php get_template_part('template-parts/listing/partials/item-image'); ?>
				<div class="preview_loader"></div>
			</div><!-- item-header -->	
			<div class="item-body flex-grow-1">
				<?php 
				$city = houzez_taxonomy_simple('property_city');
				echo '</strong> <span style="color:#b42128">'.esc_attr( $city ).'</span></li>';
				?>
				<?php get_template_part('template-parts/listing/partials/item-title'); ?>
				
				<?php if(!empty($property_type) && houzez_option('disable_type', 1)) { ?>
				<div class="item-v5-type">
					<?php echo esc_attr($property_type); ?>
				</div>
				<?php } ?>

				<?php get_template_part('template-parts/listing/partials/item-features-v5'); ?>
				<br>
				<div class="item-v5-price">
					<?php echo houzez_listing_price_v5(); ?>
				</div>
			</div><!-- item-body -->
		</div><!-- d-flex -->
	</div><!-- item-wrap -->
</div><!-- item-listing-wrap -->