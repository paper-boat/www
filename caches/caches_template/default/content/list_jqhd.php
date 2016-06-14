<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template("content", "myheader"); ?>
     <link rel="stylesheet" href="<?php echo CSS_PATH;?>mycss/inverstor.css">
   	  <link rel="stylesheet" href="<?php echo CSS_PATH;?>mycss/list_jqhd.css">
   	  <script src="<?php echo JS_PATH;?>myjs/jquery.js"></script>
   		<?php include template("content", "mybanner"); ?>
	<!-- 下部分 -->
	<?php include template("content", "myleft"); ?>
		    <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=f70c468f1f20329e5e391b34548b3f44&action=lists&num=6&siteid=%24siteid&moreinfo=1&order=id+ASC&catid=%24catid&thumb=1\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('siteid'=>$siteid,'moreinfo'=>'1','order'=>'id ASC','catid'=>$catid,'thumb'=>'1','limit'=>'6',));}?>
                <?php $n=1;if(is_array($data)) foreach($data AS $v) { ?>
			<div  class="part02">
                 <div class="pic">
                 	<a href="<?php echo $v['url'];?>"><img src="<?php echo $v['thumb'];?>" height="90" width="160"></a>
                 </div>
                 <div class="tit">
                 	<a href="<?php echo $v['url'];?>"><h3><?php echo $v['title'];?></h3></a> 
                 </div>
                 <div class="tit2"><?php echo str_cut(strip_tags($v[content]),300,'...');?><br>
                 <a href="<?php echo $v['url'];?>" class="more01">查看详情&gt;&gt;</a>
                 </div>     
           </div>
          <?php $n++;}unset($n); ?>
          <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
		<div class="scott"></div>
     </div>
		
	</div>
	
 <?php include template("content", "myfooter"); ?>

