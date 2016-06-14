<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template("content", "myheader"); ?>
     <link rel="stylesheet" href="<?php echo CSS_PATH;?>mycss/inverstor.css">
   	  <link rel="stylesheet" href="<?php echo CSS_PATH;?>mycss/list_xxgg.css">
   	  <script src="<?php echo JS_PATH;?>myjs/jquery.js"></script>
   		<?php include template("content", "mybanner"); ?>
	<!-- 下部分 -->
	<?php include template("content", "myleft"); ?>
		            <div class="in_list">
                   <div class="name03">本年信息公告</div>
                   <ul>
                    <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=30820c16bee6a35bf5e1ed7fca6a4ca5&action=lists&num=12&siteid=%24siteid&moreinfo=1&order=id+ASC&catid=%24catid&page=%24page\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$pagesize = 12;$page = intval($page) ? intval($page) : 1;if($page<=0){$page=1;}$offset = ($page - 1) * $pagesize;$content_total = $content_tag->count(array('siteid'=>$siteid,'moreinfo'=>'1','order'=>'id ASC','catid'=>$catid,'limit'=>$offset.",".$pagesize,'action'=>'lists',));$pages = pages($content_total, $page, $pagesize, $urlrule);$data = $content_tag->lists(array('siteid'=>$siteid,'moreinfo'=>'1','order'=>'id ASC','catid'=>$catid,'limit'=>$offset.",".$pagesize,'action'=>'lists',));}?>
                     <?php $n=1;if(is_array($data)) foreach($data AS $v) { ?>
                      <li style=" background: url(<?php echo IMG_PATH;?>images/dot5.jpg) no-repeat 0 10px;">
                        <a href="##" target="_blank">
                        <span><?php echo $v['content'];?></span>
                        <span class="down" style="background: url(<?php echo IMG_PATH;?>images/pdf.jpg) no-repeat center left;">下载</span> 
                        </a>
                      </li>
                      <?php $n++;}unset($n); ?>
                      <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
                   </ul>
            </div>
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
		
	</div>
	
 <?php include template("content", "myfooter"); ?>

