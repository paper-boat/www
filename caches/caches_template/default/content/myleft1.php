<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><link rel="stylesheet" href="<?php echo CSS_PATH;?>mycss/left.css">
<script src="<?php echo JS_PATH;?>myjs/jquery.js"></script>
<script src="<?php echo JS_PATH;?>myjs/left.js"></script>
<div id="container" style="background:url(<?php echo IMG_PATH;?>images/conbg.png) repeat-y">
		<div class="sidebar">
			
			<div class="left_title" style="background:url(<?php echo IMG_PATH;?>images/brand_pic2.jpg) no-repeat"><?php echo $CATEGORYS['51']['catname'];?></div> 
       <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=e2174549850dc9dd9f600ad400a7be0a&action=category&catid=51&num=12&order=listorder+ASC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('catid'=>'51','order'=>'listorder ASC','limit'=>'12',));}?>
          <ul class="left b3">
            <?php $n=1;if(is_array($data)) foreach($data AS $v) { ?>
				<li><a href="<?php echo $v['url'];?>"><?php echo $v['catname'];?></a></li>
			<?php $n++;}unset($n); ?>
			
			</ul>
			<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
		</div>
		<div class="right_1">
			<div class="quicklink">
				<?php if($parentid==51) { ?>
				<?php echo catpos($parentid);?><?php echo $catname;?>
				<?php } else { ?>
				<?php echo catpos(51);?><?php echo $catname;?><?php echo $CATEGORYS[$catid]['catname'];?>
				<?php } ?>
			</div>