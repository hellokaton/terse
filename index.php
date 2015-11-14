<?php
/**
 * Terse主题 <a href="https://github.com/biezhi">github主页</a>
 * 
 * @package Terse for typecho
 * @author 王爵
 * @version 1.0
 * @link https://biezhi.me
 */
$this->need('header.php'); ?>
<div class="content">
	<div class="container">
		<?php while($this->next()): ?>
			<div class="entry">
				<div class="entry-left">
					<h2 class="entry-title">
						<a itemtype="url" href="<?php $this->permalink() ?>"><?php $this->title() ?></a>
					</h2>
				</div>
				<div class="entry-content">			
					<?php $this->content(''); ?>
				</div>
				<div class="post-tags" itemprop="keywords">
					<?php $this->tags(' ', true, ''); ?>
				</div>
				<div class="more">			
					<a class="btn" href="<?php $this->permalink() ?>">查看全文</a>
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