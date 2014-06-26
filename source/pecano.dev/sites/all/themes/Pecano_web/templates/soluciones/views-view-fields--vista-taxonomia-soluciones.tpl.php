<?php foreach ($fields as $id => $field): ?>
  <li data-option-value=".<?php print str_replace(' ', '-', $field->content); ?> ">
  	<a href="#">
  		<?php print $field->content; ?>
  	</a>
  </li>
<?php endforeach; ?>