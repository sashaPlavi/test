<?php
require 'conf/db.php';
require 'conf/conf.php';
require_once 'models/comments.php';

$res = new Comments();

$coms = $res->getCom($conn);

if (filter_has_var(INPUT_POST, 'submit')) {

  $id = htmlspecialchars($_POST['id']);
  if ((!empty($id))) {

    $res->allowCom($conn, $id);

    $msg = '';
  } else {
    $msg = 'empty fild';
    $msgClass = 'alert-danger';
    // echo  $msg;
  }
}


?>

<?php include('inc/header.php'); ?>
<?php include('inc/navbar.php'); ?>


<h1>Edit Page</h1>



<?php foreach ($coms as $com) : ?>
  <?php if ($com['ok'] == false) : ?>


    <form action="<?php echo $_SERVER['PHP_SELF']; ?> " method='post'>
      <div class="bg-secondary m-3">
        <div class="p-3 ">

          <input type="text" name="id" class='form-control' value=<?php echo $com['ID'] ?>>
          <h3 class="text-light"><?php echo $com['email']; ?> </h3>
          <hr>
          <div class="bg-light p-3 ">
            <p class="text-dark">title : <br><?php echo $com['title']; ?> </p>
            <p class="text-dark">comment : <br><?php echo $com['comment']; ?> </p>
          </div>

          <div class="p-2">

            <input type="submit" value="Allow Comment" name='submit' class='btn btn-warning' />
          </div>
        </div>
      </div>
    </form>
  <?php endif; ?>

<?php endforeach; ?>



<?php include('inc/footer.php'); ?>