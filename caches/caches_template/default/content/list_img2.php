<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template("content", "myheader"); ?>
   	  <link rel="stylesheet" href="<?php echo CSS_PATH;?>mycss/list_img2.css">
   	  <script src="<?php echo JS_PATH;?>myjs/jquery.js"></script>
      <script src="<?php echo JS_PATH;?>myjs/zcy_index.js"></script>
   		<?php include template("content", "mybanner"); ?>
	<!-- 下部分 -->
	<?php include template("content", "myleft1"); ?>

        <div id="byy"> 
          <?php if($catid=="52") { ?>
        <img src="<?php echo IMG_PATH;?>images/pro_list.jpg" usemap="#Map">
         <?php } ?>   </div>
            <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=9979feb72df62cbd1be2d23cb1803b8b&action=lists&num=12&siteid=%24siteid&order=listorder+ASC&catid=%24catid&page=%24page\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$pagesize = 12;$page = intval($page) ? intval($page) : 1;if($page<=0){$page=1;}$offset = ($page - 1) * $pagesize;$content_total = $content_tag->count(array('siteid'=>$siteid,'order'=>'listorder ASC','catid'=>$catid,'limit'=>$offset.",".$pagesize,'action'=>'lists',));$pages = pages($content_total, $page, $pagesize, $urlrule);$data = $content_tag->lists(array('siteid'=>$siteid,'order'=>'listorder ASC','catid'=>$catid,'limit'=>$offset.",".$pagesize,'action'=>'lists',));}?>
            <?php $n=1;if(is_array($data)) foreach($data AS $v) { ?>
            <div class="pro_pic01">
              <a href="<?php echo $v['url'];?>">
                <img src="<?php echo $v['thumb'];?>" height="156" width="156">
              </a>
              <a href="<?php echo $v['url'];?>" class="pictitle"><?php echo $v['title'];?></a>
            </div>
          <?php $n++;}unset($n); ?>
          <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
            <div class="scott">
              <div class="scott1">
                      <?php echo $pages;?>
        </div>
        <script>
        $(".scott1>.a1:first").css("display","none")
        </script>
            </div>


    </div>
    
  </div>
		   <!--  -->
 <?php include template("content", "myfooter"); ?>
