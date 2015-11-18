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
			<div class="footer-right">
				<?php Links_Plugin::output(); ?>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
	<script type="text/javascript">
	$('.loading').animate({'width':'78%'},50);
	</script>
	<?php $this->footer(); ?>

	<?php if ( !empty($this->options->extPlugin) && in_array('UseFancybox', $this->options->extPlugin) ) : ?>
	<link rel="stylesheet" href="<?php $this->options->themeUrl('fancybox/jquery.fancybox.css'); ?>" type="text/css">
	<script type="text/javascript" src="<?php $this->options->themeUrl('fancybox/jquery.fancybox.js'); ?>"></script>
	<script type="text/javascript">
		var imgArr = $(".entry img");
	    for(var i=0,len=imgArr.length;i<len;i++){
	      var src = imgArr.eq(i).attr("src");
	      var title = imgArr.eq(i).attr("alt");
	      imgArr.eq(i).replaceWith("<a href='"+src+"' title='"+title+"' rel='fancy-group' class='fancy-ctn fancybox'><img src='"+src+"' title='"+title+"'></a>");
	   }
	   $(".entry .fancy-ctn").fancybox();
	</script>
	<?php endif; ?>
	<script type="text/javascript" src="<?php $this->options->themeUrl('js/main.js'); ?>"></script>
</body>
</html>