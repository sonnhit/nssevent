<?php
  $link = $data->getObjectLink();
  $temp = strstr( $data->object_content, 'src="http:');
  $url = substr( $temp,  5, 49);
?>

<article class="art-new" style="margin-left: 20px">
		<a href="<?php echo $link?>" title="<?php echo $data->object_title?>"><img height="168.75px" alt="" src="<?php echo $url?>"></a>
		<h2><a href="<?php echo $link?>" title="<?php echo $data->object_title?>"><?php echo $data->object_title?></a></h2>
</article>
