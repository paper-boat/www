<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template("content", "myheader"); ?>
     <link rel="stylesheet" href="<?php echo CSS_PATH;?>mycss/inverstor.css">
   	  <link rel="stylesheet" href="<?php echo CSS_PATH;?>mycss/show_new.css">
   		<div class="effect1" style="background: url(<?php echo IMG_PATH;?>images/bannerbg.jpg) no-repeat bottom center;">
				<img src="<?php echo IMG_PATH;?>images/investor_pic.jpg" alt="">
			</div>
		</div>
	</div>
	<!-- 下部分 -->
	   <?php include template("content", "myleft"); ?>
          
           <div class="news">
            <div class="name">
            	 <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=558057864b4034f2e79dab6289dbef7d&action=lists&num=3&siteid=%24siteid&moreinfo=1&order=id+ASC&catid=%24catid\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('siteid'=>$siteid,'moreinfo'=>'1','order'=>'id ASC','catid'=>$catid,'limit'=>'3',));}?>
	           <h2><?php echo $title;?></h2>
	           发布日期：<?php echo date("Y-m-d",$inputtime);?>
	           </div>
	          <p><?php echo $content;?></p>
	          
	        <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
            </div>
        
<div class="scott"></div>
     </div>
		
	</div>
	
 <?php include template("content", "myfooter"); ?>

