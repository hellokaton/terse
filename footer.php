	<script type="text/javascript">
	$('.loading').animate({'width':'55%'},50);
	</script>
	<div class="footer">
		<div class="container">
			<div class="footer-left">
				&copy; <?php echo date('Y'); ?> <a href="<?php $this->options->siteUrl(); ?>"><?php $this->options->title(); ?></a>.
				Theme Is <a href="https://github.com/biezhi/terse" title="theme by 王爵" target="_blank">Terse</a>. 
				<?php if ($this->options->cnzzCode): ?>
		        <?php $this->options->cnzzCode() ?>
		        <?php endif; ?>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
	<script type="text/javascript">
	$('.loading').animate({'width':'78%'},50);
	</script>
	<?php $this->footer(); ?>
	<script type="text/javascript" src="<?php $this->options->themeUrl('main.js'); ?>"></script>
</body>
</html>