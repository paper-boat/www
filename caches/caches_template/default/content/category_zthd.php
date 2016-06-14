<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template("content", "myheader"); ?>
     <link rel="stylesheet" href="<?php echo CSS_PATH;?>mycss/category_zthd.css">
   		
   	<?php include template("content", "mybanner"); ?>
	<!-- 下部分 -->
	<?php include template("content", "myleft"); ?>
		     <div class="ac_con"> 
                <div class="ac_intro clearfix"> 
                   <div class="name04"><?php echo $CATEGORYS['38']['catname'];?></div>
                   <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=6f0ca55bd72ba656ab4cb25c5c5ac266&action=position&posid=27&moreinfo=1&num=2&order=id+ASC&catid=38\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'27','moreinfo'=>'1','order'=>'id ASC','catid'=>'38','limit'=>'2',));}?>
                  <?php $n=1;if(is_array($data)) foreach($data AS $v) { ?>
                    <div style="float:right;margin-left:10px;"> 
                    	<img src="<?php echo $v['thumb'];?>" height="154" width="258">
                    </div>
                    <a href="##"> 
                    	<span><?php echo $v['title'];?></span>
                    </a>  
                      <?php echo str_cut(strip_tags($v[content]),520,'...');?>
                </div>
                <?php $n++;}unset($n); ?>
                <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
                <div class="in_list2 clearfix">
                   <div class="name03"></div>
                   <ul>
                   	 <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=e58b36c92a3112f44447caaad8ffb7a7&action=position&posid=28&moreinfo=1&num=3&order=id+ASC&catid=38\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'28','moreinfo'=>'1','order'=>'id ASC','catid'=>'38','limit'=>'3',));}?>
                  <?php $n=1;if(is_array($data)) foreach($data AS $v) { ?>
                      <li style="background: url(<?php echo IMG_PATH;?>images/dot7.jpg) no-repeat 0 10px;">
                      	<a href="<?php echo $v['url'];?>">
                      	<span><?php echo $v['title'];?></span>
                      	<span class="down"><?php echo date("Y.m.d",$v[inputtime]);?></span> 
                        </a>
                      </li>
                      <?php $n++;}unset($n); ?>
                      <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
                    </ul>
                    <a href="<?php echo $CATEGORYS['38']['url'];?>" class="more">更多&gt;&gt;</a> </div> 
                    </div>

                 <div class="name04 clearfix"><?php echo $CATEGORYS['42']['catname'];?></div>
                   <div class="in_list2">
                   <div class="name03"></div>
                   <ul>
                   	 <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=90bb685cc56c7910011e837acebbc465&action=position&posid=29&moreinfo=1&num=3&order=id+ASC&catid=42\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'29','moreinfo'=>'1','order'=>'id ASC','catid'=>'42','limit'=>'3',));}?>
                     <?php $n=1;if(is_array($data)) foreach($data AS $v) { ?>
                      <li style="background: url(<?php echo IMG_PATH;?>images/dot7.jpg) no-repeat 0 10px;">
                      	<a href="<?php echo $v['url'];?>">
                      	<span><?php echo $v['title'];?></span>
                      	<span class="down"><?php echo date("Y.m.d",$v[inputtime]);?></span> 
                        </a>
                      </li>
                     <?php $n++;}unset($n); ?>
                     <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
                    </ul>
                    <a href="a<?php echo $CATEGORYS['42']['url'];?>" class="more">更多&gt;&gt;</a> 
                </div>     



         </div>
		<div class="scott"></div>
	</div>
	
 <?php include template("content", "myfooter"); ?>
