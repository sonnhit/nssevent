<?php $count = 0; ?>
<?php //if($this->beginCache('menu-render-header'.$this->menu_id, array('duration'=>7200))) { ?>
            <?php foreach ($menus as $menu) :?>
              <li>
                <dt>
                  <a href="<?php echo $menu['link'];?>" title="<?php echo $menu['name'];?>"><?php echo $menu['name'];?></a>
                </dt>
                <?php foreach ($menus_sub as $key=>$value) {
                  foreach ($value as $key ) {
                    if ($key["parent"] == $menu['id']) { ?>
                      <dd>
                        <a href="<?php echo $key['link'];?>" title="<?php echo $key['name'];?>">
                            <?php echo $key['name'];?>
                        </a>
                      </dd>
                  <?php }
                  }
                }
                ?>
              </li>
            <?php endforeach;?>

<?php //$this->endCache(); } ?>
