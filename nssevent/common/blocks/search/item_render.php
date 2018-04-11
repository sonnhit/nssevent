<?php
  $link = $data->getObjectLink();
  $temp = strstr( $data->object_content, 'src="http:');
  $url = substr( $temp,  5, 49);
?>
<article class="art-new-1">
	<a href="<?php echo $link?>" title=""><img alt="" src="<?php echo $url?>"></a>
	<h2><a href="<?php echo $link?>" title="<?php echo $data->object_title?>"><?php echo $data->object_title?></h2></a>
  <p><?php echo $data->object_excerpt?></p>
  <a class="link-more" href="<?php echo $link?>">xem thêm</a>
</article>
