<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template("content", "myheader"); ?>
   	  <link rel="stylesheet" href="<?php echo CSS_PATH;?>mycss/category_img2.css">
   	  <script src="<?php echo JS_PATH;?>myjs/jquery.js"></script>
      <script src="<?php echo JS_PATH;?>myjs/zcy_index.js"></script>
   		<?php include template("content", "mybanner"); ?>
	<!-- 下部分 -->
	<div id="form1" name="form1" >
    <div id="container" style="background: url(<?php echo IMG_PATH;?>images/conbg.png) repeat-y;">
      <div class="con_title">
        <span>中成药</span>
      </div>
      <div id="pro_banner">
        <ul id="imagebg" class="imagebg">
            <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=b0028bd9b74c74c220798511f76affd0&action=category&num=12&order=listorder+ASC&catid=%24catid\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('order'=>'listorder ASC','catid'=>$catid,'limit'=>'12',));}?>
            <?php $n=1;if(is_array($data)) foreach($data AS $v) { ?>
            <?php $id=$v[catid]?>
          <li class="bannerbg" >
            <a href="<?php echo $v['url'];?>">
            <div class="bannerbg_main" style="background:url(<?php echo $v['image'];?>) center no-repeat; cursor:pointer;"></div>
              </a>
           
          </li>
          <?php $n++;}unset($n); ?>
          <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
        </ul>
        <div class="scroll">
          <a href="##" id="left_img_btn" class="s_pre" style="background: url(<?php echo IMG_PATH;?>images/left_arrow.jpg) no-repeat left center;"></a>
          <div id="current" class="current" style="left: 70px;">
            
          </div>
          <div class="outScroll_pic">
            <ul id="small_pic" class="scroll_pic cls" style="left: 0px;">
              <li class="currently" style="background: url(<?php echo IMG_PATH;?>images/pbg1.jpg) no-repeat;">
                <img src="<?php echo IMG_PATH;?>images/1308161130095047272.JPG" alt="">
                <p>补益药</p>
              </li>
              <li class="currently" style="background: url(<?php echo IMG_PATH;?>images/pbg1.jpg) no-repeat;">
                <img src="<?php echo IMG_PATH;?>images/1308170606376642860.JPG" alt="">
                <p>止咳平喘</p>
              </li>
              <li class="currently" style="background: url(<?php echo IMG_PATH;?>images/pbg1.jpg) no-repeat;">
                <img src="<?php echo IMG_PATH;?>images/130817060646428015.JPG" alt="">
                <p>胃肠道疾病用药</p>
              </li>
              <li class="currently" style="background: url(<?php echo IMG_PATH;?>images/pbg1.jpg) no-repeat;">
                <img src="<?php echo IMG_PATH;?>images/1308170606578150667.JPG" alt="">
                <p>妇科用药</p>
              </li>
              <li class="currently" style="background: url(<?php echo IMG_PATH;?>images/pbg1.jpg) no-repeat;">
                <img src="<?php echo IMG_PATH;?>images/130817060628349450.JPG" alt="">
                <p>清火药</p>
              </li>
              <li class="currently" style="background: url(<?php echo IMG_PATH;?>images/pbg1.jpg) no-repeat;">
                <img src="<?php echo IMG_PATH;?>images/1308170947438109994.JPG" alt="">
                <p>感冒类药</p>
              </li>
             <li class="currently" style="background: url(<?php echo IMG_PATH;?>images/pbg1.jpg) no-repeat;">
                <img src="<?php echo IMG_PATH;?>images/1308171046193552324.JPG" alt="">
                <p>祛暑药</p>
              </li>
              <li class="currently" style="background: url(<?php echo IMG_PATH;?>images/pbg1.jpg) no-repeat;">
                <img src="<?php echo IMG_PATH;?>images/1308171046066484356.JPG" alt="">
                <p>心脑血管类药</p>
              </li>
              <li class="currently" style="background: url(<?php echo IMG_PATH;?>images/pbg1.jpg) no-repeat;">
                <img src="<?php echo IMG_PATH;?>images/1308170947572812195.JPG" alt="">
                <p>祛风湿药</p>
              </li>
              <li class="currently" style="background: url(<?php echo IMG_PATH;?>images/pbg1.jpg) no-repeat;">
                <img src="<?php echo IMG_PATH;?>images/1308161130591989746.JPG" alt="">
                <p>五官科用药</p>
              </li>
             <li class="currently" style="background: url(<?php echo IMG_PATH;?>images/pbg1.jpg) no-repeat;">
                <img src="<?php echo IMG_PATH;?>images/1308161130367199125.JPG" alt="">
                <p>儿科用药</p>
              </li>
              <li class="currently" style="background: url(<?php echo IMG_PATH;?>images/pbg1.jpg) no-repeat;">
                <img src="<?php echo IMG_PATH;?>images/1308170947355513319.JPG" alt="">
                <p>外科用药</p>
              </li>
            </ul>
          </div>
          <a href="##" id="right_img_btn" class="s_next" style="background: url(<?php echo IMG_PATH;?>images/right_arrow.jpg) no-repeat left center;"></a>
        </div>
      </div>
    </div>
    
  </div>
		   <!--  -->
 <?php include template("content", "myfooter"); ?>
