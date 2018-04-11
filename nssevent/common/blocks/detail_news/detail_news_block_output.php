<?php if (isset($post_new)) $link_new = $post_new->getObjectLink()?>
<section class="content" style="padding-top: 20px;">
	<section class="fck">
			 <h1><?php echo $post->object_title?></h1>
			 <div class="tool-bar">
					<span class="date"><?php echo date("m/d/Y H:i", $post->object_date); ?></span>
					<ul class="social-bar">
						<li><a class="wi-icon wi-icon-face" href="#" title="facebook"></a></li>
						<li><a class="wi-icon wi-icon-tw" href="#" title="tw"></a></li>
						<li><a class="wi-icon wi-icon-google" href="#" title="google plus"></a></li>
						<li><a class="wi-icon wi-icon-mail" href="#" title="mail"></a></li>
						<li><a class="wi-icon wi-icon-print" href="#" title="print"></a></li>
					</ul>
				</div>
				<p class="txt-head">
					<span style="color:#e32c22;">TTO</span>
					<a href="<?php if (isset($link_new)) echo $link_new?>" title="<?php if(isset($post_new)) echo $post_new->object_title?>"><?php if(isset($post_new)) echo $post_new->object_title?></a>
				</p>
				<?php echo $post->object_content;?>

				<div class="wrapper-qt">
					<span class="btn-qt"><a href="" title="quan tâm">quan tâm</a><span><span></span><?php echo $post->like?></span></span>
					<ul class="social-bar social-bar-2">
						<li>
							<div class="fb-like" data-href="http://nssevent.vn/page?slug=post&amp;id=<?php echo $post->object_id?>&amp;pslug=<?php echo $post->getObjectLink();?>#" data-layout="button_count" data-action="like" data-size="small" data-show-faces="false" data-share="false"></div>
						</li>
						<li>
							<g:plusone data-href="http://nssevent.vn/page?slug=post&amp;id=<?php echo $post->object_id?>&amp;pslug=<?php echo $post->getObjectLink();?>#"></g:plusone>
					    <script>
					      window.___gcfg = {
					        lang: 'vi'
					      };
					    </script>
						</li>
					</ul>
					<strong><?php echo $post->object_author_name; ?></strong>
				</div>
				<ul class="block-key">
					<li>Từ khóa</li>
					<?php echo $post->tags?>
				</ul>
	</section>
</section>
