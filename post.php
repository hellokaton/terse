<?php $this->need('header.php'); ?>

	<div class="content">
		<div class="container">
			<div class="post">
				<div class="entry-left">
					<h1 class="entry-title">
						<a itemtype="url" href="<?php $this->permalink() ?>"><?php $this->title() ?></a>
					</h1>					
				</div>
				<div class="entry-right">			
					<span class="date"><?php $this->date('Y-m-d'); ?></span>
				</div>
				<div class="clearfix"></div>
			</div>
			<div class="post-content" itemprop="articleBody">
                <?php $this->content(); ?>
            </div>
			<div class="post-tags" itemprop="keywords">
				<?php $this->tags(' ', true, '没有标签'); ?>
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