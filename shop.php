<?php
require 'conf/db.php';
 require 'conf/conf.php';
require_once './models/Shop.php';
  
 $shop = new Shop;
 
$prods = $shop->getProd($conn);



?>
<?php include('inc/header.php'); ?>
<?php include('inc/navbar.php'); ?>
 
<div class=container>
 
<div class="grid-container">

   
    <?php foreach ($prods as $prod) : ?>
   
        <div class="bg-secondary m-3">
            <div class="p-3">
                <img class='img-thumbnail w-25 p-3' src='<?php echo $prod['img']; ?>' />  

                <h3 class="text-light"><?php echo $prod['title']; ?> </h3>
                <hr>
                <div class="bg-light p-3 ">
                <p class="text-dark">Description : <br><?php echo $prod['description']; ?> </p>
                </div>
               
            </div>
        </div>
       
    <?php endforeach; ?>
</div>
</div>
    <?php include('inc/form.php'); ?>
    <?php include('inc/footer.php'); ?>

    </html>
