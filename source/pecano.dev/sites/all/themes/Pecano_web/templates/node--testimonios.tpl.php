<?php

/**
 * @file node--testimonio.tpl.php
 * Porto's node template for the Testimonials content type.
 */
?>

<li>
	<div class="span6">
		<blockquote class="testimonial">
		<p><?php print render($content['body']); ?></p>
		</blockquote>
		<div class="testimonial-arrow-down"></div>
		<div class="testimonial-author">
		  <?php if (render($content['field_testimonio_imagen'])): ?>
			<div class="thumbnail thumbnail-small">
				<img src="<?php echo file_create_url($node->field_testimonio_imagen['und'][0]['uri']); ?>" alt="">
				<?php dpm($node);?>
			</div>
			<?php endif;?>
			<p><strong><?php print render($content['field_testimonio_nombre']); ?></strong><span><?php print render($content['field_testimonio_informacion']); ?></span></p>
		</div>
	</div>
</li>
