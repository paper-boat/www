<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template("content", "myheader"); ?>
     <link rel="stylesheet" href="<?php echo CSS_PATH;?>mycss/list_title.css">
   		
   	<?php include template("content", "mybanner"); ?>
	<!-- 下部分 -->
	<?php include template("content", "myleft"); ?>
		     
		     <div class="cont">
            <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=507c687fabfbb125c377889f2813f938&action=position&posid=30&moreinfo=1&num=2&order=id+ASC&catid=33\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'30','moreinfo'=>'1','order'=>'id ASC','catid'=>'33','limit'=>'2',));}?>
             <?php $n=1;if(is_array($data)) foreach($data AS $v) { ?>
	           <h2><?php echo $v['title'];?></h2>
	          <p><?php echo $v['content'];?></p>
	           <?php $n++;}unset($n); ?>
          <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
            </div>
        
         </div>
		
	</div>
	
 <?php include template("content", "myfooter"); ?>
