
          <ul class="list-cata">
            <?php foreach ($menus as $menu) :?>
                <li>
                  <a href="<?php echo $menu['link'];?>" title="<?php echo $menu['name'];?>">
                      <?php echo $menu['name'];?>
                  </a>
                  <ul class="sub-cata">
                      <?php foreach ($menus_sub as $key=>$value) {
                        foreach ($value as $key ) {
                          if ($key["parent"] == $menu['id']) { ?>
                            <li>
                              <a href="<?php echo $key['link'];?>" title="<?php echo $key['name'];?>">
                                  <?php echo $key['name'];?>
                              </a>
                            </li>
                        <?php }
                        }
                      }
                      ?>
                  </ul>
                </li>
            <?php endforeach;?>
          </ul>
