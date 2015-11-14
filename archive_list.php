<?php
/**
* 归档模板
*
* @package custom
*/
$this->need('header.php'); ?>
	<div class="content">
		<div class="container">
			<h1 class="archive-title">归档</h1>
			<?php $this->widget('Widget_Contents_Post_Recent', 'pageSize=10000')->to($archives);
                    $year=0; $mon=0; $i=0; $j=0;
                    $output = '<div id="archives">';
                    while($archives->next()):
                    $year_tmp = date('Y',$archives->created);
                    $mon_tmp = date('m',$archives->created);
                    $y=$year; $m=$mon;
                    if ($mon != $mon_tmp && $mon > 0) $output .= '';
                    if ($year != $year_tmp && $year > 0) $output .= '';
                    if ($year != $year_tmp) {
                    $year = $year_tmp;
                    $output .= '<h3 class="al_year">'. $year .' 年</h3><ul class="al_mon_list">'; //输出年份
                    }
                    if ($mon != $mon_tmp) {
                    $mon = $mon_tmp;
                    $output .= '<li><span class="al_mon">'. $mon .' 月</span><ul class="al_post_list">'; //输出月份
                    }
                    $output .= '<li>'.date('d日: ',$archives->created).'<a href="'.$archives->permalink .'">'. $archives->title .'</a> <em>('. $archives->commentsNum.')</em></li>'; //输出文章日期和标题
                    endwhile;
                    $output .= '</ul></li></ul></div>';
                    echo $output;
                  ?>
		</div>
	</div>

<?php $this->need('footer.php'); ?>