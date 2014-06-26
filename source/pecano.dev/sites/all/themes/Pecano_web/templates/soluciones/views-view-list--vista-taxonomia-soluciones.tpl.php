<ul class="nav nav-pills sort-source" data-sort-id="team" data-option-key="filter">
  <li data-option-value="*" class="active"><a href="#"><?php echo t('Show All'); ?></a></li>
  <?php foreach ($rows as $id => $row): ?>
    <?php print $row; ?>
  <?php endforeach; ?>
</ul>