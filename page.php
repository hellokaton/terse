<?php $this->need('header.php'); ?>
	<div class="content">
		<div class="container">
			<div class="entry">
				<h1 class="entry-title">
					<a itemtype="url" href="<?php $this->permalink() ?>"><?php $this->title() ?></a>
				</h1>
				<div class="post-content" itemprop="articleBody">
	                <?php $this->content(); ?>
	            </div>
			</div>			
			<!-- share -->				
			<?php $this->need('comments.php'); ?>
		</div>
	</div>
<?php $this->need('footer.php'); ?>