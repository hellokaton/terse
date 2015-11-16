<?php $this->need('header.php'); ?>

	<div class="content">
		<div class="container">
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

				<div class="post-content" itemprop="articleBody">
	                <?php $this->content(); ?>
	            </div>
	            <div class="post-tags">
					Tags：
					<?php $this->tags(' ', true, ''); ?>
				</div>
			</div>
			
			<!-- share -->
			<?php $this->need('comments.php'); ?>
		</div>

		<div class="pager" role="pager">
			<div class="prev">
				<?php $this->theNext('%s', '<a href="javascript:void(0);">没有上一篇</a>'); ?>
				<span>&larr;</span>
			</div>

			<div class="next">
				<?php $this->thePrev('%s', '<a href="javascript:void(0);">没有下一篇</a>'); ?>
				<span>&rarr;</span>
			</div>

			<div class="clearfix"></div>
		</div>
	</div>

<?php $this->need('footer.php'); ?>