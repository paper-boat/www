<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template("content", "myheader"); ?>
     <link rel="stylesheet" href="<?php echo CSS_PATH;?>mycss/inverstor.css">
   	  <link rel="stylesheet" href="<?php echo CSS_PATH;?>mycss/list_title.css">
   		<?php include template("content", "mybanner"); ?>
	<!-- 下部分 -->
	<?php include template("content", "myleft"); ?>
		    
            <div class="cont1">
            	 <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=c2c17517f93c699c944a20c3c00d634d&action=lists&num=6&siteid=%24siteid&moreinfo=1&order=id+ASC&catid=%24catid\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('siteid'=>$siteid,'moreinfo'=>'1','order'=>'id ASC','catid'=>$catid,'limit'=>'6',));}?>
                
	          <div class="news">
		        <div>
		        	<?php $n=1;if(is_array($data)) foreach($data AS $v) { ?>
		            <p>
		               <?php echo $v['content'];?>
		            </p>
		            <?php $n++;}unset($n); ?>
		         </div>
		         <p><br></p>
		     </div>
	           
          <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
            </div>
             
         </div>
		
	</div>
	
 <?php include template("content", "myfooter"); ?>

