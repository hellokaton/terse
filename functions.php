<?php

function themeConfig($form) {
    $siteIcon = new Typecho_Widget_Helper_Form_Element_Text('siteIcon', NULL, _t('http://demo.sc.chinaz.com/Files/pic/icons/5712/5.png'), _t('网站Icon'), _t('在这里填入一个图片URL地址, 作为网站Icon, 默认不显示'));
    $form->addInput($siteIcon);

    $siteAvatar = new Typecho_Widget_Helper_Form_Element_Text('siteAvatar', NULL, _t('https://avatars3.githubusercontent.com/u/3849072?v=3&s=460'), _t('头像'), _t('在首页显示你的头像'));
    $form->addInput($siteAvatar);    

    $cnzzCode = new Typecho_Widget_Helper_Form_Element_Text('cnzzCode', NULL, _t(''), _t('统计代码'), _t('输入统计代码，没有则留空'));
    $form->addInput($cnzzCode);
		
    $sidebarBlock = new Typecho_Widget_Helper_Form_Element_Checkbox('sidebarBlock', array(
        'ShowSearch' => _t('显示搜索框'),
        'ShowRecentPosts' => _t('显示最新文章'),
        'ShowRecentComments' => _t('显示最近回复'),
        'ShowTags' => _t('显示标签'),
        'ShowArchive' => _t('显示归档'),
        'ShowOther' => _t('显示其它杂项')),
    array('ShowRecentPosts', 'ShowRecentComments', 'ShowFriend', 'ShowOther'), _t('侧边栏显示'));
    $form->addInput($sidebarBlock->multiMode());

    $misc = new Typecho_Widget_Helper_Form_Element_Checkbox('misc', array(
        'ShowLogin' => _t('前台显示登录入口'),
        'ShowLoadTime' => _t('页脚显示加载耗时')
        ),
    array('ShowLogin'), _t('杂项'));
    $form->addInput($misc->multiMode());
}

function timer_start() {
    global $timestart;
    $mtime = explode( ' ', microtime() );
    $timestart = $mtime[1] + $mtime[0];
    return true;
}
timer_start();
 
function timer_stop( $display = 0, $precision = 3 ) {
    global $timestart, $timeend;
    $mtime = explode( ' ', microtime() );
    $timeend = $mtime[1] + $mtime[0];
    $timetotal = $timeend - $timestart;
    $r = number_format( $timetotal, $precision );
    if ( $display )
    echo $r;
    return $r;
}
