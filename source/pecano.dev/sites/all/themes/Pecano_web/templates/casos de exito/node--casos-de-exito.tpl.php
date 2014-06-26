<div class="row casos-exito-wrap">
	<?php if(isset($content['field_imagenes'])): ?>
		<div class="span6">
			<div class="flexslider flexslider-center-mobile flexslider-simple" 
			data-plugin-options='{"animation":"slide", "animationLoop": true, "maxVisibleItems": 1}'>
				<ul class="slides">
					<?php print render($content['field_imagenes']); ?>
				</ul>
			</div>
		</div>
	<?php endif; ?>
	<?php  if(isset($content['field_imagenes']) || !$is_front):?>
	<div class="span6">
	<?php else: ?>
	<div class="span3">
	<?php endif; ?>
		<?php print render($content); ?>
	</div>
</div>	