<li>
	<div class="span3">
		<article>
			<h4><a href="<?php print $node_url; ?>"><?php print $title; ?></a></h4>
			<p>
				<?php $teaser = strip_tags(render($content['body'])); ?> 
				<?php echo substr($teaser, 0, 250)."...";?>
				<a href="<?php print $node_url; ?>" class="read-more">
					<?php echo t('read more'); ?>
					<i class="icon-angle-right"></i>
				</a>
			</p>
		</article>
	</div>
</li>