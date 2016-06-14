<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template("content", "myheader"); ?>
     <link rel="stylesheet" href="<?php echo CSS_PATH;?>mycss/inverstor.css">
   	  <link rel="stylesheet" href="<?php echo CSS_PATH;?>mycss/list_new.css">
   	  <script src="<?php echo JS_PATH;?>myjs/jquery.js"></script>
   		<?php include template("content", "mybanner"); ?>
	<!-- 下部分 -->
	<?php include template("content", "myleft"); ?>
		    <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=34acc1f09a5ed6a207e4ee1b6ded873e&action=lists&num=6&siteid=%24siteid&moreinfo=1&order=id+ASC&catid=%24catid&page=%24page\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$pagesize = 6;$page = intval($page) ? intval($page) : 1;if($page<=0){$page=1;}$offset = ($page - 1) * $pagesize;$content_total = $content_tag->count(array('siteid'=>$siteid,'moreinfo'=>'1','order'=>'id ASC','catid'=>$catid,'limit'=>$offset.",".$pagesize,'action'=>'lists',));$pages = pages($content_total, $page, $pagesize, $urlrule);$data = $content_tag->lists(array('siteid'=>$siteid,'moreinfo'=>'1','order'=>'id ASC','catid'=>$catid,'limit'=>$offset.",".$pagesize,'action'=>'lists',));}?>
                <?php $n=1;if(is_array($data)) foreach($data AS $v) { ?>
			<div class="part line">	 
				<div class="list_name">
					<a href="">
						<h3><?php echo $v['title'];?></h3>
					</a>
					<span><?php echo date("Y-m-d",$v[inputtime]);?></span>
				</div>
				<?php if($v[thumb]) { ?>
				<div  class="pic" style="background: url(<?php echo IMG_PATH;?>images/news_pic5_bg.jpg)">
					<a href="">
						<img src="<?php echo $v['thumb'];?>" alt="" height="75" width="109">
					</a>
				</div>
				<div class="tit2"><?php echo str_cut(strip_tags($v[content]),400,'...');?></br>
				<a href="<?php echo $v['url'];?>" class="more">阅读全文>></a>
				</div>
				<?php } else { ?>
				<div class="tit3"><?php echo str_cut(strip_tags($v[content]),400,'...');?></br>
				<a href="<?php echo $v['url'];?>" class="more">阅读全文>></a>
				</div>
				<?php } ?>	
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
	
 <?php include template("content", "myfooter"); ?>

