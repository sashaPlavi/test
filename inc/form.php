<?php
require 'models/Comments.php';
require 'conf/db.php';

$comments = new Comments;
$msg='';
if(filter_has_var(INPUT_POST,'submit')){
   
    $email = htmlspecialchars($_POST['email'] );
    $comment = htmlspecialchars($_POST['comment']);

    if( !empty($email) && !empty($comment)){
   
        $comments->setComments($conn, $email,$comment );

    

       

    }else{
        $msg= 'empty fild';
        $msgClass='alert-danger';
       // echo  $msg;
    }
};

?>
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