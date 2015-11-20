<?php
/**
* 归档模板
*
* @package custom
*/
$this->need('header.php'); ?>
	<div class="content">
		<div class="container">
			<div class="entry archive_list">
				<h1 class="entry-title">
					<a itemtype="url" href="<?php $this->permalink() ?>"><?php $this->title() ?></a>
				</h1>
				<div class="post-content pl18" itemprop="articleBody">
	                <?php $this->widget('Widget_Contents_Post_Recent', 'pageSize=10000')->parse('<li><i>{year}-{month}-{day}</i> : <a href="{permalink}">{title}</a></li>'); ?>
	            </div>
			</div>	
		</div>
	</div>
<?php $this->need('footer.php'); ?>