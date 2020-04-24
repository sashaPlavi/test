<?php
require 'conf/db.php';
 require 'conf/conf.php';
require_once './models/Shop.php';
  
 $shop = new Shop;
 $shop-> setProd($conn);
 



?>
<?php include('inc/header.php'); ?>
<?php include('inc/navbar.php'); ?>
 <h1>Welcome</h1>

 <a href="<?php echo ROOT_URL; ?>shop.php">check out our shop </a> 
    <?php include('inc/footer.php'); ?>

    </html>
