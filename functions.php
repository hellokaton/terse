<?php

/*
 * 主题配置
 */
function themeConfig($form) {
    $siteIcon = new Typecho_Widget_Helper_Form_Element_Text('siteIcon', NULL, _t('http://demo.sc.chinaz.com/Files/pic/icons/5712/5.png'), _t('网站Icon'), _t('在这里填入一个图片URL地址, 作为网站Icon, 默认不显示'));
    $form->addInput($siteIcon);

    $siteAvatar = new Typecho_Widget_Helper_Form_Element_Text('siteAvatar', NULL, _t('https://avatars3.githubusercontent.com/u/3849072?v=3&s=460'), _t('头像'), _t('在首页显示你的头像'));
    $form->addInput($siteAvatar);    

    $cnzzCode = new Typecho_Widget_Helper_Form_Element_Text('cnzzCode', NULL, _t(''), _t('统计代码'), _t('输入统计代码，没有则留空'));
    $form->addInput($cnzzCode);
    
    $duoshuoName = new Typecho_Widget_Helper_Form_Element_Text('duoshuoName', NULL, _t('blog-biezhi'), _t('多说评论'), _t('输入你的多说短名称'));
    $form->addInput($duoshuoName);
	
    $extPlugin = new Typecho_Widget_Helper_Form_Element_Checkbox('extPlugin', array(
        'UseFancybox' => _t('启用FancyBox')),
        // 'UseInstantclick' => _t('启用instantclick')
    array('UseFancybox'), _t('扩展项'));
    $form->addInput($extPlugin->multiMode());
}

/*
* 手机移动设备识别函数
*/
function is_mobile() {
    $user_agent = $_SERVER['HTTP_USER_AGENT'];
    $mobile_browser = Array(
        "mqqbrowser", //手机QQ浏览器
        "opera mobi", //手机opera
        "juc","iuc",//uc浏览器
        "fennec","ios","applewebKit/420","applewebkit/525","applewebkit/532","ipad","iphone","ipaq","ipod",
        "iemobile", "windows ce",//windows phone
        "240x320","480x640","acer","android","anywhereyougo.com","asus","audio","blackberry",
        "blazer","coolpad" ,"dopod", "etouch", "hitachi","htc","huawei", "jbrowser", "lenovo",
        "lg","lg-","lge-","lge", "mobi","moto","nokia","phone","samsung","sony",
        "symbian","tablet","tianyu","wap","xda","xde","zte"
    );
    $is_mobile = false;
    foreach ($mobile_browser as $device) {
        if (stristr($user_agent, $device)) {
            $is_mobile = true;
            break;
        }
    }
    return $is_mobile;
}