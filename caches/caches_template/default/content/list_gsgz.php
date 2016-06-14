<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template("content", "myheader"); ?>
     <link rel="stylesheet" href="<?php echo CSS_PATH;?>mycss/inverstor.css">
   	  <link rel="stylesheet" href="<?php echo CSS_PATH;?>mycss/list_gsgz.css">
   	  <script src="<?php echo JS_PATH;?>myjs/jquery.js"></script>
   		<?php include template("content", "mybanner"); ?>
	<!-- 下部分 -->
	<?php include template("content", "myleft"); ?>
		    <div class="in_list2">
                   <div class="name03"></div>
                   <ul>
                   	 <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=05d09aa3521d461c506573eaef866e0a&action=lists&num=9&siteid=%24siteid&moreinfo=1&order=id+ASC&catid=%24catid\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('siteid'=>$siteid,'moreinfo'=>'1','order'=>'id ASC','catid'=>$catid,'limit'=>'9',));}?>
                     <?php $n=1;if(is_array($data)) foreach($data AS $v) { ?>
                       <li <?php if($catid=="26") { ?>style=" background: url(<?php echo IMG_PATH;?>images/dot5.jpg) no-repeat 0 10px;"
                      <?php } elseif ($catid=="40") { ?>
                      style="background: url(<?php echo IMG_PATH;?>images/dot7.jpg) no-repeat 0 10px;"
                      <?php } ?>>
                      	<a href="<?php echo $v['url'];?>" >
                      	<span><?php echo str_cut($v[title],120,'...');?></span>
                      	<span class="down"><?php echo date("Y-m-d",$inputtime);?></span> 
                        </a>
                      </li>
                      <?php $n++;}unset($n); ?>
                      <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
                   </ul>
            </div>
		</div>
		<div class="scott"></div>
         </div>
     </div>
		
	</div>
	
 <?php include template("content", "myfooter"); ?>

