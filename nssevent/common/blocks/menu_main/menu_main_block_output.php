<?php $count = 0; ?>

<nav class="main-menu">
  <ul class="clearfix">
              <?php foreach ($menus as $menu) :?>
                  <li>
                    <a href="<?php echo $menu['link'];?>" title="<?php echo $menu['name'];?>" <?php echo isset($_GET['slug'])&&$_GET['slug']==$menu['link']?'class="active"':'';?>>
                         <?php echo $menu['name'];?>
                    </a>
                  </li>
              <?php endforeach;?>
                  <li class="btn-search">
                    <a id="link-search" href="#" title="Search"><img class="wi-icon wi-icon-search" alt="" src="<?php echo $this->layout_asset;?>/images/transparent.png" ></a>
                    <?php $form=$this->beginWidget('CActiveForm', array(
                    	'id'=>'search-frm',
                      'method'=>'get',
                      'action'=>'page?slug=search',
                      'htmlOptions'=>array(
                          'class'=>'frm-search',
                      ),
                    	'enableAjaxValidation'=>false,
                    )); ?>

                      <input class="txt-search" type="text" name="search" id="search-txt">
                    <?php $this->endWidget(); ?>
                  </li>
  </ul>
</nav>
