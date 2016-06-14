<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><link rel="stylesheet" href="<?php echo CSS_PATH;?>mycss/left.css">
<script src="<?php echo JS_PATH;?>myjs/jquery.js"></script>
<script src="<?php echo JS_PATH;?>myjs/left.js"></script>
<div id="container" style="background:url(<?php echo IMG_PATH;?>images/conbg.png) repeat-y">
		<div class="sidebar">
			
			<div class="left_title" <?php if($top_parentid=="31") { ?>style="background:url(<?php echo IMG_PATH;?>images/about_pic2.jpg) no-repeat"
<?php } elseif ($top_parentid=="10") { ?>style="background:url(<?php echo IMG_PATH;?>images/ir_pic2.jpg) no-repeat"
<?php } elseif ($top_parentid=="11") { ?>style="background:url(<?php echo IMG_PATH;?>images/brand_pic2.jpg) no-repeat"
<?php } elseif ($top_parentid=="12") { ?>style="background:url(<?php echo IMG_PATH;?>images/news_pic2.jpg) no-repeat"
<?php } elseif ($top_parentid=="32") { ?>style="background:url(<?php echo IMG_PATH;?>images/ac_pic2.jpg) no-repeat"<?php } ?>>
<?php echo $CATEGORYS[$top_parentid]['catname'];?></div> 

  <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=0cd6a674634f9be1f9c0a2395d8075df&action=category&catid=%24top_parentid&num=20&order=listorder+ASC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('catid'=>$top_parentid,'order'=>'listorder ASC','limit'=>'20',));}?>
<ul <?php if($top_parentid=="31") { ?> class="left b1"
<?php } elseif ($top_parentid=="10") { ?>class="left b2"
<?php } elseif ($top_parentid=="11") { ?>class="left b3"
<?php } elseif ($top_parentid=="12") { ?>class="left b4"
<?php } elseif ($top_parentid=="32") { ?>class="left b5"<?php } ?>>
		  
            <?php $n=1;if(is_array($data)) foreach($data AS $v) { ?>
				<li><a href="<?php echo $v['url'];?>"><?php echo $v['catname'];?></a></li>
			<?php $n++;}unset($n); ?>
			
			</ul>
			<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
		</div>
		<div class="right_1 long">
		     <div class="title">
		     	<span <?php if($top_parentid=="31") { ?> class="c1"
                      <?php } elseif ($top_parentid=="10") { ?>class="c2"
                      <?php } elseif ($top_parentid=="11") { ?>class="c3"
                      <?php } elseif ($top_parentid=="12") { ?>class="c4"
                      <?php } elseif ($top_parentid=="32") { ?>class="c5"<?php } ?>>
                     <?php echo $CATEGORYS[$catid]['catname'];?></span>
		     	<div class="link">
		     		<a href="<?php echo siteurl($siteid);?>">首页</a><span id="sp">></span> 
		     		 <a href="<?php echo $v['url'];?>"><?php echo $CATEGORYS[$top_parentid]['catname'];?></a>
		     		<?php if($catid!=$top_parentid) { ?>
		     		<span id="sp">></span> 
		     		<a href="{$CATEGORY[$top_parentids][url]"><?php echo $CATEGORYS[$catid]['catname'];?> </a>
		     		<?php } ?>
		     	</div>

		     	
		     </div>






		    