<?php
	$layout_asset=GxcHelpers::publishAsset(Yii::getPathOfAlias('common.layouts.nssevent.assets'));
?>
<?php $this->renderPartial('common.layouts.nssevent.header',array('page'=>$page,'layout_asset'=>$layout_asset)); ?>
<body class="body-event">
	<div id="fb-root"></div>
	<header class="header">
		<div class="inner">
			<a class="btn-menu" href="javascript:void(0)" title="Chuyên Mục"><img class="wi-icon wi-icon-menu" alt="" src="<?php echo $layout_asset?>/images/transparent.png" >Chuyên Mục</a>
			<a class="logo-2" href="#" title=""><img alt="" src="<?php echo $layout_asset?>/images/logo-tt.png" > </a>
			<a class="logo-2" href="#" title="" style="padding:  10px 0 0 170px;"><img alt="" src="<?php echo $layout_asset?>/images/event/loglo-m.png" > </a>
			<!-- Begin HTML Social -->
			<?php $this->widget('BlockRenderWidget',array('page'=>$page,'region'=>'19','layout_asset'=>$layout_asset)); ?>
			<!-- End HTML Social -->

			<!-- Begin Menu Header Chuyen Muc -->
			<?php $this->widget('BlockRenderWidget',array('page'=>$page,'region'=>'11','layout_asset'=>$layout_asset)); ?>
			<!-- End Menu Header Chuyen Muc -->
		</div>
	</header>
	<div class="wrapper">
		<!-- Begin Render Header Menu Main  -->
		<?php $this->widget('BlockRenderWidget',array('page'=>$page,'region'=>'0','layout_asset'=>$layout_asset)); ?>
		<!-- End Render Header Menu Main  -->
		<section class="main">
			<!-- Begin Render Logo  -->
			<?php $this->widget('BlockRenderWidget',array('page'=>$page,'region'=>'7','layout_asset'=>$layout_asset)); ?>
			<!-- End Render Logo -->
      <section class="content" style="padding-top: 20px;">
        <h1 class="title-ev">Tin tức</h1>

        <!-- Begin Render Art News  -->
        <?php $this->widget('BlockRenderWidget',array('page'=>$page,'region'=>'24','layout_asset'=>$layout_asset)); ?>
        <!-- End Render Art News  -->

				<!-- Begin Render Content  -->
        <?php $this->widget('BlockRenderWidget',array('page'=>$page,'region'=>'1','layout_asset'=>$layout_asset)); ?>
				<!-- End Render Content  -->
      </section>
        <!-- Begin Render Ad  -->
				<?php $this->widget('BlockRenderWidget',array('page'=>$page,'region'=>'23','layout_asset'=>$layout_asset)); ?>
				<!-- End Render Ad  -->


				<div class="highlight-info">
					<div class="block-left">
						<h2><a href="#" title="">Bảo trợ thông tin</a></h2>
						<div class="flexslider-info">
						  <ul class="slides">
								<!-- Begin Block Left -->
							 <?php $this->widget('BlockRenderWidget',array('page'=>$page,'region'=>'9','layout_asset'=>$layout_asset)); ?>
							 <!-- End Block Left -->
							</ul>
						</div>
					</div>
					<div class="block-right">
						<h2><a href="#" title="">Tài trợ vận chuyển</a></h2>
						<a class="thumb" href="#">
							<!-- Begin Block Right -->
						 	<?php $this->widget('BlockRenderWidget',array('page'=>$page,'region'=>'10','layout_asset'=>$layout_asset)); ?>
						 <!-- End Block Right -->
						</a>
					</div>
				</div>
		</section>

		<footer class="footer">
			<ul class="top-footer">
				<!-- Begin Menu Footer -->
				<?php $this->widget('BlockRenderWidget',array('page'=>$page,'region'=>'8','layout_asset'=>$layout_asset)); ?>
				<!-- End Menu Footer -->
				<li class="float-r"><a  class="btn-send" href="javascript:void(0);" onClick="openPopup('feedbackForm')" title="Gửi bài về Toà soạn">Gửi bài về Toà soạn</a></li>
				<li class="float-r"><a  class="btn-set" href="#" title="Đặt báo Online">Đặt báo Online</a></li>
			</ul>
			<ul class="list-link">
				<!-- Begin Menu Chuyen muc Footer -->
				<?php $this->widget('BlockRenderWidget',array('page'=>$page,'region'=>'12','layout_asset'=>$layout_asset)); ?>
				<!-- End Menu Chuyên mục Footer -->
			</ul>
			<div class="bottom-footer">
				<!-- Begin HTML Footer Info-->
				<?php $this->widget('BlockRenderWidget',array('page'=>$page,'region'=>'20','layout_asset'=>$layout_asset)); ?>
				<!-- End HTML Footer Info -->
			</div>
		</footer>
	</div>
	<a class="btn-register1" href="#" title=""></a>
	<script type="text/javascript" src="<?php echo $layout_asset?>/js/jquery-1.11.0.min.js"></script>
	<script type="text/javascript" src="<?php echo $layout_asset?>/js/jquery.flexslider.js"></script>
	<script type="text/javascript" src="<?php echo $layout_asset?>/js/start.js"></script>
</body>
</html>
