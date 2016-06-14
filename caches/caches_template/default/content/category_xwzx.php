<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template("content", "myheader"); ?>
     <link rel="stylesheet" href="<?php echo CSS_PATH;?>mycss/category_xwzx.css">
   		
   	<?php include template("content", "mybanner"); ?>
	<!-- 下部分 -->
	<?php include template("content", "myleft"); ?>
		     
   <div class="part clearfix">
			<div class="name01">热点新闻</div>
		<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=363206b986c0ce75f63bb138f56aa09d&action=position&posid=23&moreinfo=1&num=2&order=id+ASC&catid=14\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'23','moreinfo'=>'1','order'=>'id ASC','catid'=>'14','limit'=>'2',));}?>
              <?php $n=1;if(is_array($data)) foreach($data AS $v) { ?>
			<div class="pic" style="background: url(<?php echo IMG_PATH;?>images/news_pic5_bg.jpg);">
				<a href="<?php echo $v['url'];?>">
					<img src="<?php echo $v['thumb'];?>" alt="" height="75" width="109">
				</a>
			</div>
			<div class="tit">
				<a href="">
					<h3><?php echo $v['title'];?></h3>
					<span><?php echo $v['inputtime'];?></span>
				</a>
			</div>
			<div class="tit2">
				<?php echo str_cut(strip_tags($v[content]),300,'');?>
			</br>
			<a href="" class="more">阅读全文>></a>
			</div>
		</div>
         <?php $n++;}unset($n); ?>
			<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
		<div class="news_list clearfix">
			<div class="name01"><?php echo $CATEGORYS['14']['catname'];?></div>
			<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=4b89e51dbde3d39be299953b69b6fc5f&action=position&posid=24&moreinfo=3&num=3&order=id+ASC&catid=14\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'24','moreinfo'=>'3','order'=>'id ASC','catid'=>'14','limit'=>'3',));}?>
              <?php $n=1;if(is_array($data)) foreach($data AS $v) { ?>
			<dl>
				<dd style=" background: url(<?php echo IMG_PATH;?>images/news_jt.jpg) no-repeat 0 10px;">
					<a href="<?php echo $v['url'];?>"><?php echo $v['title'];?></a>
				</dd>
				<dt><?php echo $v['inputtime'];?></dt>
			</dl>
			<?php $n++;}unset($n); ?>
			<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
			<a href="<?php echo $CATEGORYS['14']['url'];?>" class="more">更多>></a>
		</div>

		<div class="news_list clearfix">
			<div class="name01"><?php echo $CATEGORYS['15']['catname'];?></div>
			<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=c106d59aa81fbf4be9acd3d2cec16382&action=position&posid=25&moreinfo=3&num=3&order=id+ASC&catid=15\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'25','moreinfo'=>'3','order'=>'id ASC','catid'=>'15','limit'=>'3',));}?>
              <?php $n=1;if(is_array($data)) foreach($data AS $v) { ?>
			<dl>
				<dd style=" background: url(<?php echo IMG_PATH;?>images/news_jt.jpg) no-repeat 0 10px;">
					<a href="<?php echo $v['url'];?>"><?php echo $v['title'];?></a>
				</dd>
				<dt><?php echo $v['inputtime'];?></dt>
			</dl>
			<?php $n++;}unset($n); ?>
			<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
			<a href="<?php echo $CATEGORYS['15']['url'];?>" class="more">更多>></a>
		</div>

		<div class="news_list clearfix">
			<div class="name01"><?php echo $CATEGORYS['16']['catname'];?></div>
			<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=c106d59aa81fbf4be9acd3d2cec16382&action=position&posid=25&moreinfo=3&num=3&order=id+ASC&catid=15\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'25','moreinfo'=>'3','order'=>'id ASC','catid'=>'15','limit'=>'3',));}?>
              <?php $n=1;if(is_array($data)) foreach($data AS $v) { ?>
			<dl>
				<dd style=" background: url(<?php echo IMG_PATH;?>images/news_jt.jpg) no-repeat 0 10px;">
					<a href="<?php echo $v['url'];?>"><?php echo $v['title'];?></a>
				</dd>
				<dt><?php echo $v['inputtime'];?></dt>
			</dl>
			<?php $n++;}unset($n); ?>
			<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
			<a href="<?php echo $CATEGORYS['16']['url'];?>" class="more">更多>></a>
		</div>


         </div>
		
	</div>
	
 <?php include template("content", "myfooter"); ?>
