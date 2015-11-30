<?php
$this->need('header.php'); ?>
<div class="content">
	<div class="container">
		<?php while($this->next()): ?>
			<div class="entry">
				<div class="entry-left">
					<h1 class="entry-title">
						<a itemtype="url" href="<?php $this->permalink() ?>"><?php $this->title() ?></a>
					</h1>
					<div class="entry-meta" itemprop="keywords">
						<span>by <a href="<?php $this->author->permalink(); ?>"><?php $this->author() ?></a> · 
						<?php $this->date('Y-m-d');?></span> · <?php $this->category(','); ?>
					</div>
				</div>
				<div class="entry-content">			
					<?php $this->content(); ?>
				</div>
				<div class="post-tags music-tags">
					<?php $this->tags(' ', true, ''); ?>
				</div>
				<div class="clearfix"></div>
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