<?php
$prefix = 'smbStickyMenu';
$id = wp_unique_id( "$prefix-" );

global $allowedposttags;
extract( $attributes );
?>
<div 
  <?php echo get_block_wrapper_attributes(); ?> 
  id="<?php echo esc_attr( $id ); ?>" 
  data-attributes="<?php echo esc_attr( wp_json_encode( $attributes ) ); ?>" 
  
>


	<div class='<?php echo esc_attr( $prefix ); ?>'>
		<?php echo wp_kses( $content, wp_parse_args( [
			'style' => [],
			'iframe' => [
				'allowfullscreen' => true,
				'allowpaymentrequest' => true,
				'height' => true,
				'loading' => true,
				'name' => true,
				'referrerpolicy' => true,
				'sandbox' => true,
				'src' => true,
				'srcdoc' => true,
				'width' => true,
				'aria-controls' => true,
				'aria-current' => true,
				'aria-describedby' => true,
				'aria-details' => true,
				'aria-expanded' => true,
				'aria-hidden' => true,
				'aria-label' => true,
				'aria-labelledby' => true,
				'aria-live' => true,
				'class' => true,
				'data-*' => true,
				'dir' => true,
				'hidden' => true,
				'id' => true,
				'lang' => true,
				'style' => true,
				'title' => true,
				'role' => true,
				'xml:lang' => true
			],
			'svg' => [
				'xmlns' => [],
				'viewBox' => [],
				'width' => [],
				'height' => [],
				'fill' => [],
				'class' => [],
				'style' => [],
			],
			'g' => [
				'fill' => [],
				'stroke' => [],
				'class' => [],
				'style' => [],
			],
			'path' => [
				'd' => [],
				'fill' => [],
				'stroke' => [],
				'class' => [],
				'style' => [],
				'stroke-width' => []
			],
			'circle' => [
				'cx' => [],
				'cy' => [],
				'r' => [],
				'fill' => [],
				'stroke' => [],
				'class' => [],
				'style' => [],
			],
			'rect' => [
				'x' => [],
				'y' => [],
				'width' => [],
				'height' => [],
				'fill' => [],
				'stroke' => [],
				'class' => [],
				'style' => [],
			],
			'ellipse' => [
				'cx' => [],
				'cy' => [],
				'rx' => [],
				'ry' => [],
				'fill' => [],
				'stroke' => [],
				'class' => [],
				'style' => [],
			],
			'line' => [
				'x1' => [],
				'y1' => [],
				'x2' => [],
				'y2' => [],
				'stroke' => [],
				'class' => [],
				'style' => [],
			],
			'polyline' => [
				'points' => [],
				'fill' => [],
				'stroke' => [],
				'class' => [],
				'style' => [],
			],
			'polygon' => [
				'points' => [],
				'fill' => [],
				'stroke' => [],
				'class' => [],
				'style' => [],
			]
		], $allowedposttags ) ); ?>
	</div>
</div>
