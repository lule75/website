<?php if ($element['#view_mode'] == 'tesaser'): ?>
	<?php print render($items[0]); print "<br><p>este es el parrafo de prueba</p>";?>
<?php else: ?>
	<?php foreach ($items as $delta => $item): ?>
		<li <?php print $item_attributes[$delta]; ?> > <?php print render($item); ?> </li>
	<?php endforeach; ?>
<?php endif; ?>
