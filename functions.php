<?php

function themeConfig($form) {
    $siteIcon = new Typecho_Widget_Helper_Form_Element_Text('siteIcon', NULL, _t('http://demo.sc.chinaz.com/Files/pic/icons/5712/5.png'), _t('网站Icon'), _t('在这里填入一个图片URL地址, 作为网站Icon, 默认不显示'));
    $form->addInput($siteIcon);

    $siteAvatar = new Typecho_Widget_Helper_Form_Element_Text('siteAvatar', NULL, _t('https://avatars3.githubusercontent.com/u/3849072?v=3&s=460'), _t('头像'), _t('在首页显示你的头像'));
    $form->addInput($siteAvatar);    

    $cnzzCode = new Typecho_Widget_Helper_Form_Element_Text('cnzzCode', NULL, _t(''), _t('统计代码'), _t('输入统计代码，没有则留空'));
    $form->addInput($cnzzCode);
	
    $extPlugin = new Typecho_Widget_Helper_Form_Element_Checkbox('extPlugin', array(
        'UseFancybox' => _t('启用FancyBox')),
        // 'UseInstantclick' => _t('启用instantclick')
    array('UseFancybox'), _t('扩展项'));
    $form->addInput($extPlugin->multiMode());
}