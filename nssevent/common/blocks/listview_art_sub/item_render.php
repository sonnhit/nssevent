<?php
  $link = $data->getObjectLink();
  $temp = strstr( $data->object_content, 'src="http:');
  $url = substr( $temp,  5, 49);
?>
<article class="art-1 art-2">
  <i class="icon-play"></i>
  <a href="<?php echo $link?>" title=""><img alt="" src="<?php echo $url?>"/></a>
  <h2><a href="<?php echo $link?>" title="<?php echo $link?>"><?php echo $data->object_title?></a></h2>
</article>
