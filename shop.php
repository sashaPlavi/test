<?php
require 'conf/db.php';
 require 'conf/conf.php';
require_once './models/shop.php';
require_once './models/comments.php';
  
$shop = new Shop();
$prods = $shop->getProd($conn);
$res = new Comments();
$coms = $res ->getCom($conn);
$msg='';
 

if(filter_has_var(INPUT_POST,'submit')){
   
    $title = htmlspecialchars($_POST['title'] );
    $email = htmlspecialchars($_POST['email'] );
    $comment = htmlspecialchars($_POST['comment']);

    if(!empty($title) && !empty($email) && !empty($comment)){
   
        $res->setComments($conn,$title, $email,$comment );
   }else{
        $msg= 'empty fild';
        $msgClass='alert-danger';
       // echo  $msg;
    }
};

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



<div>
<h1>comments</h1>
 


 <?php foreach ($coms as $com) : ?>
 <?php if($com['ok'] == true) :?>


     <form action="<?php echo $_SERVER['PHP_SELF']; ?> " method='post'>
     <div class="bg-secondary m-3">
     <div class="p-3 ">
     
     <input type="text" name="id" class='form-control ' value=<?php echo $com['ID'] ?>>
     <h3 class="text-light"><?php echo $com['email']; ?> </h3>
     <hr>
     <div class="bg-light p-3 ">
           <p class="text-dark">comment : <br><?php echo $com['comment']; ?> </p>
           </div>
          
          
            </div>
   </div>
   </form>
   <?php endif; ?>
  
<?php endforeach; ?>
 
</div>
    

<div class="container">
        <?php if( $msg !== ''): ?>
          <div class="alert <?php echo $msgClass; ?>">
          <?php echo $msg ?>
          </div>
          <?php endif ?>

</div>
<div class="container mb-3">
<form action="<?php echo $_SERVER['PHP_SELF']; ?> " method='post'>
       <h3>Please insert your Email and Comment</h3>
            <div class=form-group>
                <label>Title</label><br />
                <input type="text" name="title" class='form-control'
                 value="<?php echo isset($_POST['title']) ? $title : '' ?>" /> 
                <label>Email</label><br />
                <input type="text" name="email" class='form-control'
                 value="<?php echo isset($_POST['email']) ? $email : '' ?>" /> 
            </div>
            <div class="form-group">
                <label>Comment</label><br />
                <textarea type="text"
                 name="comment" 
                 class="form-control" >
                <?php echo isset($_POST['comment']) ? $comment : '' ?> 
              </textarea>
             
        </div>
            <input type="submit" value="submit" name='submit' class='btn btn-warning' />
        </form>
</div>
    <?php include('inc/footer.php'); ?>

    </html>
