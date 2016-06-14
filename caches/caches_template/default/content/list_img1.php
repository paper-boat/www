<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template("content", "myheader"); ?>
     <link rel="stylesheet" href="<?php echo CSS_PATH;?>mycss/inverstor.css">
   	  <link rel="stylesheet" href="<?php echo CSS_PATH;?>mycss/list_img1.css">
   	  <script src="<?php echo JS_PATH;?>myjs/jquery.js"></script>
   	  <script src="<?php echo JS_PATH;?>myjs/big.js"></script>
   		<?php include template("content", "mybanner"); ?>
	<!-- 下部分 -->
	<?php include template("content", "myleft"); ?>
		    
            <div class="cont highslide-gallery">

            	 <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=d77d0458f066de7afd9d547a8f8bfc02&action=lists&num=13&siteid=%24siteid&moreinfo=1&order=id+ASC&catid=%24catid&thumb=1\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('siteid'=>$siteid,'moreinfo'=>'1','order'=>'id ASC','catid'=>$catid,'thumb'=>'1','limit'=>'13',));}?>
                <?php $n=1;if(is_array($data)) foreach($data AS $v) { ?>
				<div class="pic01">
					<a class="highslide" href="##"><img src="<?php echo $v['thumb'];?>" alt="" height="196",width="155"></a>
				</div>
				<?php $n++;}unset($n); ?>
				<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
			</div>
        
         </div>
		
	</div>
	
 <?php include template("content", "myfooter"); ?>

