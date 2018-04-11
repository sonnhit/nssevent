<div class="highlight-school">
<h2><a href="#" title="">Đơn vị đăng ký tham gia</a></h2>
<div class="flexslider-school">
  <ul class="slides">
    <li>
      <div class="list-school">
    <?php $count = 0; ?>
      <?php
        $count = count($menus);
        $li = 30;
        $div = 10;
        for ($i = 0 ; $i< $count ; $i++){
          if ($li == 0 ) { $li = 30; ?>
            </li>
            <li>
        <?php } if ($div == 0) { $div = 10; ?>
              <div class="list-school">
        <?php }?>
          <a href="<?php echo $menus[$i]['link'];?>"><span><?php echo $i+1?></span><?php echo $menus[$i]['name'];?></a>
        <?php
          $li--;$div--;
          if ($div == 0){ ?>
            </div>
          <?php }
          if ($li == 0) { ?>
          </li>
        <?php } } ?>

      </ul>
    </div>
    </div>
