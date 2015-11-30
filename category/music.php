<?php
$this->need('header.php'); ?>
<div class="content">
	<div class="container">
		<?php while($this->next()): ?>
			<div class="entry music-player">
				<div class="entry-left">
					<h1 class="entry-title">
						<a itemtype="url" href="<?php $this->permalink() ?>"><?php $this->title() ?></a>
					</h1>
				</div>
				<div>			
					<?php $this->content(); ?>
				</div>
			</div>
		<?php endwhile; ?>
		<div class="pagination" role="pagination">
			<?php $this->pageLink('&lt;','prev'); ?>
			<?php $this->pageLink('&gt;','next'); ?>
			<div class="clearfix"></div>
		</div>
	</div>
</div>
<?php $this->need('footer.php'); ?>