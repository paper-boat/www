<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template("content", "myheader"); ?>
     <link rel="stylesheet" href="<?php echo CSS_PATH;?>mycss/index.css">
     <script src="<?php echo JS_PATH;?>myjs/jquery.js"></script>
     <script src="<?php echo JS_PATH;?>myjs/index.js"></script>
        <div class="effect" style="background: url(<?php echo IMG_PATH;?>images/bannerbg.jpg) no-repeat bottom center;">
          
          <ul class="slides">
            <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=fce0eac2f2c4838eaef81f3bd9021def&action=lists&catid=43&oeder=listorder+ASC&num=4&thumb=1&moreinfo=1\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>'43','oeder'=>'listorder ASC','thumb'=>'1','moreinfo'=>'1','limit'=>'4',));}?>
            <?php $n=1;if(is_array($data)) foreach($data AS $v) { ?>
            <li class="active"><a href="##"><img src="<?php echo $v['thumb'];?>" alt=""></a></li>
            <?php $n++;}unset($n); ?>
            <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
          </ul>
         
          
          <ul class="pager">
          <li style="background:url(<?php echo IMG_PATH;?>images/dot1.jpg) no-repeat"><a href="##"></a></li>
           <li style="background:url(<?php echo IMG_PATH;?>images/dot1.jpg) no-repeat"><a href="##"></a></li>
            <li style="background:url(<?php echo IMG_PATH;?>images/dot1.jpg) no-repeat"><a href="##"></a></li>
           <li style="background:url(<?php echo IMG_PATH;?>images/dot1.jpg) no-repeat"><a href="##"></a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <!-- bottom -->
  <form action="" id="form1">
    <div id="container" style="background:url(<?php echo IMG_PATH;?>images/conbg.png) repeat-y">
          <div class="index_left">
            <div class="left_intro">
              <div class="title">
                <span><?php echo $CATEGORYS['10']['catname'];?></span>
                <div class="link"><a href="<?php echo $CATEGORYS['14']['url'];?>">更多>></a></div>
              </div>
              <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=bdbf4bbced69bb8b4302c66bbb790dbb&action=position&posid=19&moreinfo=1&num=2&order=id+ASC&catid=14\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'19','moreinfo'=>'1','order'=>'id ASC','catid'=>'14','limit'=>'2',));}?>
              <?php $n=1;if(is_array($data)) foreach($data AS $v) { ?>
              <dl>
                  <dt style="background:url(<?php echo IMG_PATH;?>images/picbg.jpg) no-repeat left">
                    <a href="<?php echo $v['url'];?>"><img src="<?php echo $v['thumb'];?>" height="60" width="120"></a>
                  </dt>
                  <dd>
                    <a href="<?php echo $v['url'];?>"style="background: url(<?php echo IMG_PATH;?>images/dot3.jpg) no-repeat"><?php echo $v['title'];?></a>
                    <span><?php echo str_cut(strip_tags($v[content]),300,'');?>
                    </span>
                  </dd>
                </dl>
                <?php $n++;}unset($n); ?>
                <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
            </div>
            <div class="left_intro01">
               <div class="title"><span><?php echo $CATEGORYS['38']['catname'];?></span>
                  <div class="link"><a href="<?php echo $CATEGORYS['38']['url'];?>">更多 &gt;&gt;</a></div>
               </div>
               <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=af1000e1ece2850ffeeb81204596c77f&action=position&posid=21&moreinfo=1&num=1&order=id+ASC&catid=38\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'21','moreinfo'=>'1','order'=>'id ASC','catid'=>'38','limit'=>'1',));}?>
              <?php $n=1;if(is_array($data)) foreach($data AS $v) { ?>
               <dl>
                  <dt style="background:url(<?php echo IMG_PATH;?>images/picbg1.jpg) no-repeat left">
                    <a href="<?php echo $v['url'];?>"><img src="<?php echo $v['thumb'];?>" height="60" width="140"></a>
                  </dt>
                  <dd>
                    <a href="<?php echo $v['url'];?>" style="background: url(<?php echo IMG_PATH;?>images/dot4.jpg) no-repeat"><?php echo $v['title'];?></a> 
                    <span> <?php echo str_cut(strip_tags($v[content]),150,'...');?>
                    </span>
                  </dd>
               </dl>
               <?php $n++;}unset($n); ?>
               <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
            </div>
          </div>
          <div class="right_intro">
            <div class="title"><span>品牌产品</span>
            <div class="link"><a href="brand.aspx">更多 &gt;&gt;</a></div>
            </div>
            <dl>
            <dt style="background: url(<?php echo IMG_PATH;?>images/picbg2.jpg) no-repeat left">
              <a href="##"><img src="<?php echo IMG_PATH;?>images/ppcp.JPG" height="60" width="108"></a></dt>
            <dd><a href="pro_detail.aspx?bid=10&amp;id=418">西黄丸（天然方）</a> 
              <div style="width:177px; height:60px; overflow:hidden;">核准日期：2007年03月27日修改日期：2010年07月14日西黄丸说明书请仔...</div></dd>
            </dl>
            <dl class="other">
            <dt style="background: url(<?php echo IMG_PATH;?>images/picbg2.jpg) no-repeat left">
              <a href="##"><img src="<?php echo IMG_PATH;?>images/ppcp1.JPG" height="60" width="108"></a></dt>
            <dd><a href="pro_detail.aspx?bid=10&amp;id=417">北京同仁堂阿胶酥糖 </a> <div style="width:177px; height:60px; overflow:hidden;">【产品名称】北京同仁堂冰爽宝（清凉西瓜味）【规格】120g/罐【配料表】白砂糖、...</div></dd>
            </dl>
            <dl>
            <dt style="background: url(<?php echo IMG_PATH;?>images/picbg2.jpg) no-repeat left">
              <a href="##"><img src="<?php echo IMG_PATH;?>images/ppcp2.JPG" height="60" width="108"></a></dt>
            <dd style="border-bottom:0">
              <a href="pro_detail.aspx?bid=10&amp;id=416">北京同仁堂冰爽宝（清凉西瓜味）</a> <div style="width:177px; height:60px; overflow:hidden;">【产品名称】北京同仁堂冰爽宝（清凉西瓜味）【规格】40g【配料表】白砂糖、高麦芽...</div></dd>
            </dl>
         </div>
      </div>
<?php include template("content", "myfooter"); ?>