<?php if ($element['#view_mode'] == 'teaser'): ?>
	<?php print render($items[0]); ?>
<?php else: ?>
	<?php foreach ($items as $delta => $item): ?>
		<li <?php print $item_attributes[$delta]; ?> > <?php print render($item); ?> </li>
	<?php endforeach; ?>
<?php endif; ?>
