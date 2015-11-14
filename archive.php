<?php $this->need('header.php'); ?>

	<div class="content">
		<div class="container">
			<h5 class="archive-title"><?php $this->archiveTitle(array(
	            'category'  =>  _t('分类 “%s” 下的文章'),
	            'search'    =>  _t('包含关键字 “%s” 的文章'),
	            'tag'       =>  _t('标签 “%s” 下的文章'),
	            'author'    =>  _t('“%s” 发布的文章')
	        ), '', ''); ?></h5>
			<?php while($this->next()): ?>
				<div class="entry">
					<div class="entry-left">
						<div class="entry-meta">
							<a itemprop="name" href="<?php $this->author->permalink(); ?>" rel="author" class="entry-author">
								<?php $this->author(); ?>
							</a>
							in
							<?php $this->category(','); ?>
						</div>

						<h2 class="entry-title">
							<a itemtype="url" href="<?php $this->permalink() ?>"><?php $this->title() ?></a>
						</h2>
						
						<div><?php echo $this->fields->description;?></div>						
					</div>

					<div class="entry-right">			
						<span class="date"><?php $this->date('F j'); ?></span>
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