<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template("content", "myheader"); ?>
     <link rel="stylesheet" href="<?php echo CSS_PATH;?>mycss/category_ppcp.css">
   		
   	<?php include template("content", "mybanner"); ?>
	<!-- 下部分 -->
	<?php include template("content", "myleft"); ?>
		     
        <div class="pro clearfix">
				<p>北京同仁堂科技发展股份有限公司的产品涉及20多个剂型，200多个品种，包含药品、食品保健品等，并有丰富的已开发新产品和在开发新产品的储备。麦尔海化妆品由北京同仁堂麦尔海生物技术有限公司生产，它是北京同仁堂集团下属的三级公司，在同仁堂博大精深的企业文化指引下，经营业绩连年实现跳跃式增长，使同仁堂麦尔海公司已经成为已成为护肤品市场民族品牌的生力军。北京同仁堂南三环中路药店及同仁堂第二中医医院集名药、名医为一体，相互扶持，相互依托，共同提高，走出了一条适合自身发展的道路，为广大顾客提供满意的医疗服务。</p>
				<div class="pro_pic">
					<a href=""><img src="<?php echo IMG_PATH;?>images/p1.jpg" alt="" height="132" width="176"></a>
				</div>
				<div class="pro_pic">
					<a href=""><img src="<?php echo IMG_PATH;?>images/p2.jpg" alt="" height="132" width="176"></a>
				</div>
				<div class="pro_pic1">
					<a href=""><img src="<?php echo IMG_PATH;?>images/p3.jpg" alt="" height="132" width="176"></a>
				</div>
			</div>

	
				<div class="part01 clearfix">
					<div class="name02"><?php echo $CATEGORYS['23']['catname'];?></div>
					<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=d9afd2bd1f9261c28d5b5bac4f16ffc1&action=position&posid=22&moreinfo=1&num=2&order=id+ASC&catid=23\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'22','moreinfo'=>'1','order'=>'id ASC','catid'=>'23','limit'=>'2',));}?>
                    <?php $n=1;if(is_array($data)) foreach($data AS $v) { ?>
					<dl>
						<dt style="background: url(<?php echo IMG_PATH;?>images/pbg.jpg) no-repeat;">
							<a href="<?php echo $CATEGORYS['23']['url'];?>"><img src="<?php echo $v['thumb'];?>" alt="" height="46" width="72"></a>
						</dt>
						<dd>
							<a href="<?php echo $CATEGORYS['23']['url'];?>"><h3><?php echo $v['title'];?></h3></a>
							<?php echo str_cut(strip_tags($v[content]),230,'...');?>
							<br>
							<a href="<?php echo $CATEGORYS['23']['url'];?>" class="more">更多>></a>
						</dd>
					</dl>
                    <?php $n++;}unset($n); ?>
                    <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
				</div>
				<div class="name02">名牌系列</div>
				<div class="related">
					<a href="" class="LeftBotton" style=" background: url(<?php echo IMG_PATH;?>images/left_arrow.jpg) no-repeat center"></a>
					<div id="ISL_Cont">
						<div class="scoll_m_con">
							<div id="List1">
								<p>
									<a href=""><img src="<?php echo IMG_PATH;?>images/130820093332554105.JPG" alt="" height="75" width="75">十大名药</a>
								</p>
								<p>
									<a href=""><img src="<?php echo IMG_PATH;?>images/1308200937475628675.JPG" alt="" height="75" width="75">六味系列</a>
								</p>
								<p>
									<a href=""><img src="<?php echo IMG_PATH;?>images/1308200939477957549.JPG" alt="" height="75" width="75">阿胶系列</a>
								</p>
							</div>
						</div>
					</div>
					<a href="" class="RightBotton" style="background: url(<?php echo IMG_PATH;?>images/right_arrow.jpg) no-repeat center;"></a>
				</div>
			</div>


		</br>

		</div>



         </div>
		
	</div>
	
 <?php include template("content", "myfooter"); ?>