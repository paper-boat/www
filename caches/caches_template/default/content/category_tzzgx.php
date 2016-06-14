<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template("content", "myheader"); ?>
     <link rel="stylesheet" href="<?php echo CSS_PATH;?>mycss/category_tzzgx.css">
      
    <?php include template("content", "mybanner"); ?>
  <!-- 下部分 -->
  <?php include template("content", "myleft"); ?>
         <div class="part ">
                 同仁堂是我国中药行业的老字号，1997年6月，北京同仁堂股份有限公司隆重挂牌，在上海证交所上市。2000年3月，北京同仁堂股份有限公司下沉部分优良资产组建北京同仁堂科技发展股份有限公司，同年10月底在香港联交所创业板挂牌上市。上市之后，同仁堂科技始终保持着良好的业绩表现，并于2010年7月9日正式转入香港联交所主板上市，股票代码01666。
            </div>
            <div class="in_list clearfix">
                   <div class="name03">最新公告</div>
                   <ul>
                    <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=d8e03925191293d65764e86160d52989&action=position&posid=26&moreinfo=1&num=5&order=id+ASC&catid=28\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'26','moreinfo'=>'1','order'=>'id ASC','catid'=>'28','limit'=>'5',));}?>
                  <?php $n=1;if(is_array($data)) foreach($data AS $v) { ?>
                      <li style=" background: url(<?php echo IMG_PATH;?>images/dot5.jpg) no-repeat 0 10px;">
                        <a href="<?php echo $v['url'];?>" target="_blank">
                        <span><?php echo $v['title'];?></span>
                        <span class="down" style=" background: url(<?php echo IMG_PATH;?>images/pdf.jpg) no-repeat center left;">下载</span> 
                        </a>
                      </li>
                     <?php $n++;}unset($n); ?>
                     <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
                   </ul>
                   <a href="<?php echo $CATEGORYS['28']['url'];?>" class="more">更多&gt;&gt;</a> 
            </div>

            <div class="name03 ">股票行情</div>
                <span class="sst" style="cursor: pointer;">实时图</span>
                <span class="sst" style="cursor: pointer;">日K图</span>
                <div class="sst_pic">
                  <img src="<?php echo IMG_PATH;?>images/01666.gif">
                  <br><br>
                </div>
        </div>




         
         </div>
  </div>
  
 <?php include template("content", "myfooter"); ?>
