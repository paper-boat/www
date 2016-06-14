<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template("content", "myheader"); ?>
   	  <link rel="stylesheet" href="<?php echo CSS_PATH;?>mycss/list_img2.css">
   	  <script src="<?php echo JS_PATH;?>myjs/jquery.js"></script>
      <script src="<?php echo JS_PATH;?>myjs/zcy_index.js"></script>
   		<?php include template("content", "mybanner"); ?>
	<!-- 下部分 -->
	<div id="form1" name="form1" >
    <div id="container" style="background: url(<?php echo IMG_PATH;?>images/conbg.png) repeat-y;">
      <div class="con_title">
        <span>中成药</span>
      </div>
      <div id="pro_banner">
        <ul id="imagebg" class="imagebg">
            <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=34acc1f09a5ed6a207e4ee1b6ded873e&action=lists&num=6&siteid=%24siteid&moreinfo=1&order=id+ASC&catid=%24catid&page=%24page\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$pagesize = 6;$page = intval($page) ? intval($page) : 1;if($page<=0){$page=1;}$offset = ($page - 1) * $pagesize;$content_total = $content_tag->count(array('siteid'=>$siteid,'moreinfo'=>'1','order'=>'id ASC','catid'=>$catid,'limit'=>$offset.",".$pagesize,'action'=>'lists',));$pages = pages($content_total, $page, $pagesize, $urlrule);$data = $content_tag->lists(array('siteid'=>$siteid,'moreinfo'=>'1','order'=>'id ASC','catid'=>$catid,'limit'=>$offset.",".$pagesize,'action'=>'lists',));}?>
                <?php $n=1;if(is_array($data)) foreach($data AS $v) { ?>
          <li class="bannerbg" >
            <div class="bannerbg_main" style="background:url(<?php echo $v['thumb'];?>) center no-repeat; cursor:pointer;">
              
            </div>
          </li>
          <?php $n++;}unset($n); ?>
          <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
        </ul>
        <div class="scroll">
          <a href="##" id="left_img_btn" class="s_pre" style="background: url(<?php echo IMG_PATH;?>images/left_arrow.jpg) no-repeat left center;"></a>
          <div id="current" class="current" style="left: 70px;">
            
          </div>
          <div class="outScroll_pic">
            <ul id="small_pic" class="scroll_pic cls" style="left: 0px;">
              <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=3191e9967a7cad37710a85cddce60165&action=lists&num=6&siteid=%24siteid&moreinfo=1&order=id+ASC+LIMIT+5%2C6--&catid=%24catid&page=%24page\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$pagesize = 6;$page = intval($page) ? intval($page) : 1;if($page<=0){$page=1;}$offset = ($page - 1) * $pagesize;$content_total = $content_tag->count(array('siteid'=>$siteid,'moreinfo'=>'1','order'=>'id ASC LIMIT 5,6--','catid'=>$catid,'limit'=>$offset.",".$pagesize,'action'=>'lists',));$pages = pages($content_total, $page, $pagesize, $urlrule);$data = $content_tag->lists(array('siteid'=>$siteid,'moreinfo'=>'1','order'=>'id ASC LIMIT 5,6--','catid'=>$catid,'limit'=>$offset.",".$pagesize,'action'=>'lists',));}?>
                <?php $n=1;if(is_array($data)) foreach($data AS $v) { ?>
              <li class="currently" style="background: url(<?php echo IMG_PATH;?>images/pbg1.jpg) no-repeat;">
                <img src="<?php echo $v['thumb'];?>" alt="">
                <p><?php echo $v['content'];?></p>
              </li>
              <?php $n++;}unset($n); ?>
             <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
            </ul>
          </div>
          <a href="##" id="right_img_btn" class="s_next" style="background: url(<?php echo IMG_PATH;?>images/right_arrow.jpg) no-repeat left center;"></a>
        </div>
      </div>
    </div>
    
  </div>
		   <!--  -->
 <?php include template("content", "myfooter"); ?>
