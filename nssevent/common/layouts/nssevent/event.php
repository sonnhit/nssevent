<?php
	$layout_asset=GxcHelpers::publishAsset(Yii::getPathOfAlias('common.layouts.nssevent.assets'));
?>
<?php $this->renderPartial('common.layouts.nssevent.header',array('page'=>$page,'layout_asset'=>$layout_asset)); ?>
<body class="body-event">
	<div id="fb-root"></div>
	<script>(function(d, s, id) {
		var js, fjs = d.getElementsByTagName(s)[0];
		if (d.getElementById(id)) return;
		js = d.createElement(s); js.id = id;
		js.src = 'https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.12&appId=1877562819126065&autoLogAppEvents=1';
		fjs.parentNode.insertBefore(js, fjs);
	}(document, 'script', 'facebook-jssdk'));</script>
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

				<div class="highlight-ev">
					<!-- Begin Render Art Main  -->
					<?php $this->widget('BlockRenderWidget',array('page'=>$page,'region'=>'5','layout_asset'=>$layout_asset)); ?>
					<!-- End Render Art Main  -->

					<!-- Begin Render Art Sub  -->
					<?php $this->widget('BlockRenderWidget',array('page'=>$page,'region'=>'6','layout_asset'=>$layout_asset)); ?>
					<!-- End Render Art Sub  -->
				</div>
				<div class="highlight-news">
					<div class="block-a">
						<!-- Begin Render New Main  -->
						<?php $this->widget('BlockRenderWidget',array('page'=>$page,'region'=>'15','layout_asset'=>$layout_asset)); ?>
						<!-- End Render New Main  -->

							<!-- Begin Render New Sub  -->
							<?php $this->widget('BlockRenderWidget',array('page'=>$page,'region'=>'16','layout_asset'=>$layout_asset)); ?>
							<!-- End Render New Sub  -->

					</div>
					<div class="block-a">
						<!-- Begin Render Notify Main  -->
						<?php $this->widget('BlockRenderWidget',array('page'=>$page,'region'=>'17','layout_asset'=>$layout_asset)); ?>
						<!-- End Render Notify Main  -->

							<!-- Begin Render Notify Sub  -->
							<?php $this->widget('BlockRenderWidget',array('page'=>$page,'region'=>'18','layout_asset'=>$layout_asset)); ?>
							<!-- End Render Notify Sub  -->

					</div>
					<div class="block-a">
						<!-- Begin Render Slider Event -->
						<?php $this->widget('BlockRenderWidget',array('page'=>$page,'region'=>'14','layout_asset'=>$layout_asset)); ?>
						<!-- End Render Slider Event -->

						<!-- Begin Ad -->
						<?php $this->widget('BlockRenderWidget',array('page'=>$page,'region'=>'23','layout_asset'=>$layout_asset)); ?>
						<!-- End Ad -->
					</div>

				</div>
				<!-- Begin Render List school  -->
				<?php $this->widget('BlockRenderWidget',array('page'=>$page,'region'=>'21','layout_asset'=>$layout_asset)); ?>
				<!-- End Render List school  -->

				<!-- Begin Render Plugin FB  -->
				<?php $this->widget('BlockRenderWidget',array('page'=>$page,'region'=>'22','layout_asset'=>$layout_asset)); ?>
				<!-- End Render Plugin FB  -->

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
	<?php $this->renderPartial('common.layouts.nssevent.footer',array('page'=>$page,'layout_asset'=>$layout_asset)); ?>
