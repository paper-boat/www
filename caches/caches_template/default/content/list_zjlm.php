<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template("content", "myheader"); ?>
     <link rel="stylesheet" href="<?php echo CSS_PATH;?>mycss/inverstor.css">
   	  <link rel="stylesheet" href="<?php echo CSS_PATH;?>mycss/list_zjlm.css">
   	  <script src="<?php echo JS_PATH;?>myjs/jquery.js"></script>
   		<?php include template("content", "mybanner"); ?>
	<!-- 下部分 -->
	<?php include template("content", "myleft"); ?>
		   <div class="ac_con"> 
         <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=42dcc0abddba783f514dc555b65aef95&action=lists&num=1&siteid=%24siteid&moreinfo=1&order=id+ASC&catid=%24catid&thumb=1\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('siteid'=>$siteid,'moreinfo'=>'1','order'=>'id ASC','catid'=>$catid,'thumb'=>'1','limit'=>'1',));}?>
                <?php $n=1;if(is_array($data)) foreach($data AS $v) { ?>
                <div class="part03 clearfix">
          <div class="pic" style=" background:url(<?php echo IMG_PATH;?>images/picbg3.jpg) no-repeat;"><a href=""><img src="<?php echo $v['thumb'];?>" height="75" width="75"></a></div>
          <div class="tit"><a href="">
        <h3><?php echo $v['title'];?></h3>
        </a> </div>
                     <div class="tit2"><?php echo $v['content'];?></div>
    </div>
           <?php $n++;}unset($n); ?>
           <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>

                <div class="in_list2 clearfix">
                   <div class="name03"></div>
                   <ul>
                     <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=d657d6da54116fe37b54f8f0c7bae4e5&action=lists&num=3&siteid=%24siteid&order=id+ASC+LIMIT+1%2C3--&catid=%24catid\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('siteid'=>$siteid,'order'=>'id ASC LIMIT 1,3--','catid'=>$catid,'limit'=>'3',));}?>
                      <?php $n=1;if(is_array($data)) foreach($data AS $v) { ?>
                      <li style=" background: url(<?php echo IMG_PATH;?>images/dot7.jpg) no-repeat 0 10px;">
                        <a href="<?php echo $v['url'];?>">
                        <span><?php echo $v['title'];?></span>
                        <span class="down"><?php echo date("Y.m.d",$v[inputtime]);?></span> 
                        </a>
                      </li>
                     <?php $n++;}unset($n); ?>
                     <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
                    </ul>
                    <a href="<?php echo $CATEGORYS['44']['url'];?>" class="more">更多&gt;&gt;</a> </div>
                    <div class="scott"></div>  
                    </div>   

    </div>
    
		
	</div>
	
 <?php include template("content", "myfooter"); ?>

