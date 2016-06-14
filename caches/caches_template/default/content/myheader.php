<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
  <title>北京同仁堂</title>
  <link rel="stylesheet" href="<?php echo CSS_PATH;?>mycss/header.css">
  <script src="<?php echo JS_PATH;?>myjs/jquery.js"></script>
 <script src="<?php echo JS_PATH;?>myjs/xiala.js"></script>
</head>
<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=e40828ebe055bf01afa6bcfc71ca8399&action=category&catid=0&num=0&order=listorder+ASC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('catid'=>'0','order'=>'listorder ASC','limit'=>'20',));}?>
<body <?php if($top_parentid==31) { ?>style="background: url(<?php echo IMG_PATH;?>images/bg2.jpg) fixed"
<?php } elseif ($top_parentid==10) { ?>style="background: url(<?php echo IMG_PATH;?>images/bg3.jpg) fixed"
<?php } elseif ($top_parentid==11) { ?>style="background: url(<?php echo IMG_PATH;?>images/bg4.jpg) fixed"
<?php } elseif ($top_parentid==12) { ?>style="background: url(<?php echo IMG_PATH;?>images/bg5.jpg) fixed"
<?php } elseif ($top_parentid==32) { ?>style="background: url(<?php echo IMG_PATH;?>images/bg6.jpg) fixed"
<?php } else { ?> style="background: url(<?php echo IMG_PATH;?>images/bg.jpg) fixed"<?php } ?>>
<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>

  <div class="box">
    <!-- 顶部 -->
    <div class="top-labe" style="background: url(<?php echo IMG_PATH;?>images/arrow.png) no-repeat left center;">
      <a href="##">设为首页</a>
      <a href="##">网站导航</a>
      <a href="##" class="language">中文</a>
      <span id="spa">|</span>
      <a href="##" class="language">English</a>
    </div>
     <div class="head" style="background: url(<?php echo IMG_PATH;?>images/conbg.png) repeat-y;">
      <div class="logo">
        <a href="##"><img src="<?php echo IMG_PATH;?>images/logo.jpg" alt=""></a>
      </div>
      <div class="list">
        <ul>
          <li><a href="<?php echo siteurl($siteid);?>">首页</a></li>
          <li><a href="##">官方微信</a></li>
          <li><a href="##">企业邮箱</a></li>
          <li><a href="##">产品防伪</a></li>
        </ul>
        <form action="search.aspx" method="get" name="myFormSeach" id="myFormSeach" >
                  <div id="search-form" style="background: url(<?php echo IMG_PATH;?>images/searchbg.jpg) no-repeat left">
                     <input name="key_button" id="key_button" value="" class="submit" type="button" style="background: url(<?php echo IMG_PATH;?>images/search.jpg) no-repeat left center;">
                     <input name="key" id="key" class="say" value="站内搜索" type="text">
                 </div>
                </form>
        </div>
        <div class="slideBox">
             <!-- 导航栏 -->
            <div class="menu">
              <ul>
            <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=e40828ebe055bf01afa6bcfc71ca8399&action=category&catid=0&num=0&order=listorder+ASC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('catid'=>'0','order'=>'listorder ASC','limit'=>'20',));}?>
            <?php $n=1;if(is_array($data)) foreach($data AS $v) { ?>
            <li class="prod "><a href="<?php echo $v['url'];?>" class="pro" ><?php echo $v['catname'];?></a>
              <?php $nowid=$v[catid];?>
               <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=5500f2b7f0a42a6d9d7b3e016168598f&action=category&catid=%24nowid&order=listorder+ASC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('catid'=>$nowid,'order'=>'listorder ASC','limit'=>'20',));}?>
                <ul>
                    <?php $n=1;if(is_array($data)) foreach($data AS $v) { ?>
                        <li><a href="<?php echo $v['url'];?>" style="background: url(<?php echo IMG_PATH;?>images/menuline.png) repeat-x 0 0;"><?php echo $v['catname'];?></a></li>
                    <?php $n++;}unset($n); ?>
                  </ul>
                  <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
            </li>
            <?php $n++;}unset($n); ?>
            <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
  </ul> 
        </div>
