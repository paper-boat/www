<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template("content", "myheader"); ?>
     <link rel="stylesheet" href="<?php echo CSS_PATH;?>mycss/list_ylfw.css">
   		
   	<?php include template("content", "mybanner"); ?>
	<!-- 下部分 -->
	<?php include template("content", "myleft"); ?>
		   <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=3cd5895a6e238098b0e38eb24e7bd9ad&action=lists&num=4&siteid=%24siteid&moreinfo=1&order=id+ASC&catid=%24catid\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('siteid'=>$siteid,'moreinfo'=>'1','order'=>'id ASC','catid'=>$catid,'limit'=>'4',));}?>
                <?php $n=1;if(is_array($data)) foreach($data AS $v) { ?>
                <?php if($v[thumb]) { ?>
              <div id="Repeater1_ctl00_depth1" class="part line clearfix">
				<div class="pic" style=" background: url(<?php echo IMG_PATH;?>images/news_pic5_bg.jpg);">
					<a href="<?php echo $v['url'];?>"><img src="<?php echo $v['thumb'];?>" height="75" width="109" alt=""></a>
				</div>
				<div class="tit aa">
					<h3>
						<a href="<?php echo $v['url'];?>"><?php echo $v['title'];?></a>
					</h3>
					<span><?php echo date("Y-m-d",$v[inputtime]);?></span>
				</div>
				<div class="tit2 bb">
		         <?php echo str_cut(strip_tags($v[content]),350,'...');?>
				</div>
			</div>
			<?php } else { ?>
			<div id="Repeater1_ctl02_depth2" class="part line clearfix">
				<div class="tit aa1">
					<h3><a href="<?php echo $v['url'];?>"><?php echo $v['title'];?></a></h3>
					<span><?php echo date("Y-m-d",$v[inputtime]);?></span>
				</div>
				<div class="tit2 bb1">		               
                   <?php echo str_cut(strip_tags($v[content]),350,'...');?>          
				</div>
			</div>
			<?php } ?>
            <?php $n++;}unset($n); ?>
            <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
			</div>


		</br>


         </div>
		
	</div>
	
 <?php include template("content", "myfooter"); ?>
