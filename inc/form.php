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
                 name="message" 
                 class="form-control" >
                <?php echo isset($_POST['message']) ? $message : '' ?> 
              </textarea>
             
        </div>
            <input type="submit" value="submit" name='submit' class='btn btn-warning' />
        </form>
</div>