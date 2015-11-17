<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<title><?php $this->archiveTitle(array('category' => _t('分类 %s 下的文章'), 'search' => _t('包含关键字 %s 的文章'), 'tag' => _t('标签 %s 下的文章'), 'author' => _t('%s 发布的文章')), '', ' - '); ?><?php $this->options->title(); ?></title>
	<meta name="description" content="<?php $this->description() ?>" />
	<meta name="keywords" content="<?php $this->keywords() ?>" />
	<?php if ($this->options->siteIcon): ?>
    <link rel="Shortcut Icon" href="<?php $this->options->siteIcon() ?>" />
    <link rel="Bootmark" href="<?php $this->options->siteIcon() ?>" />
	<?php endif; ?>	
	<link rel="stylesheet" href="<?php $this->options->themeUrl('style.css'); ?>">
    <script type="text/javascript" src="//cdn.bootcss.com/jquery/2.1.4/jquery.min.js"></script>
</head>
<body>
	<div class="loading"></div>
	<script type="text/javascript">
	$('.loading').animate({'width':'30%'},50);
	</script>
	<div class="header">
		<div class="container">
			<a href="<?php $this->options->siteUrl(); ?>" class="site-title"><?php $this->options->title(); ?></a>			
			<p class="site-description"><?php $this->options->description() ?></p>
			<div class="avatar">
	            <a href="<?php $this->options->siteUrl(); ?>" alt="<?php $this->options->title(); ?>" title="<?php $this->options->title(); ?>">
	            	<img src="<?php $this->options->siteAvatar() ?>"/>
	            </a>
	        </div>
			<div class="nav" role="navigation">
				<a<?php if($this->is('index')): ?> class="current"<?php endif; ?> href="<?php $this->options->siteUrl(); ?>"><?php _e('首页'); ?></a>
	            <?php $this->widget('Widget_Contents_Page_List')->to($pages); ?>
	            <?php while($pages->next()): ?>
	            <a<?php if($this->is('page', $pages->slug)): ?> class="current"<?php endif; ?> href="<?php $pages->permalink(); ?>" title="<?php $pages->title(); ?>"><?php $pages->title(); ?></a>
	            <?php endwhile; ?>
			</div>	
		</div>
	</div>