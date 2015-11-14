<?php $this->need('header.php'); ?>

	<div class="content">
		<div class="container">
			<div class="post">
				<div class="entry-left">
					<h1 class="entry-title">
						<a itemtype="url" href="<?php $this->permalink() ?>"><?php $this->title() ?></a>
					</h1>
					
					<div><?php echo $this->fields->description;?></div>
				</div>

				<div class="entry-right">			
					<span class="date"><?php $this->date('F j'); ?></span>
				</div>

				<div class="clearfix"></div>
			</div>

			<div class="post-content" itemprop="articleBody">
                <?php $this->content(); ?>
            </div>

			<!-- share -->				
			<?php $this->need('comments.php'); ?>

		</div>
	</div>

<?php $this->need('footer.php'); ?>