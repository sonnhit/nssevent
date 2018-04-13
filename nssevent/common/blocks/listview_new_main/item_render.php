<?php
  $link = $data->getObjectLink();
  $temp = strstr( $data->object_content, 'src="http:');
  $url = substr( $temp,  5, 49);
?>
<a href="<?php echo $link?>" title="<?php echo $data->object_title?>">
  <img alt="" src="<?php echo $url?>" width="300px" height="168.75px"/>
  <i class="icon-play"></i>
</a>
<h3>
  <a href="<?php echo $link?>" title="<?php echo $data->object_title?>"><?php echo $data->object_title?></a>
</h3>
