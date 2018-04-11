<?php $count = 0; ?>

<?php foreach ($menus as $menu) :?>
    <li>
      <a href="<?php echo $menu['link'];?>" title="<?php echo $menu['name'];?>" <?php echo isset($_GET['slug'])&&$_GET['slug']==$menu['link']?'class="active"':'';?>>
           <?php echo $menu['name'];?>
      </a>
    </li>
<?php endforeach;?>
