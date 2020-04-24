<?php


class Shop {

   public function setProd($conn){
    
      $sql = "INSERT INTO shop_items(  img, title, description)
      VALUES
      ('http://snaturefruits.com/wp-content/uploads/2016/03/LIMON-snature.jpg', 'lemon', 'super-mysqli-lemon'),
      ('http://snaturefruits.com/wp-content/uploads/2016/03/LIMON-snature.jpg', 'lemon', 'super-mysqli-lemon'),
      ('http://snaturefruits.com/wp-content/uploads/2016/03/LIMON-snature.jpg', 'lemon', 'super-mysqli-lemon'),
      ('http://snaturefruits.com/wp-content/uploads/2016/03/LIMON-snature.jpg', 'lemon', 'super-mysqli-lemon'),
      ('http://snaturefruits.com/wp-content/uploads/2016/03/LIMON-snature.jpg', 'lemon', 'super-mysqli-lemon'),
      ('http://snaturefruits.com/wp-content/uploads/2016/03/LIMON-snature.jpg', 'lemon', 'super-mysqli-lemon'),
      ('http://snaturefruits.com/wp-content/uploads/2016/03/LIMON-snature.jpg', 'lemon', 'super-mysqli-lemon'),
      ('http://snaturefruits.com/wp-content/uploads/2016/03/LIMON-snature.jpg', 'lemon', 'super-mysqli-lemon'),
      ('http://snaturefruits.com/wp-content/uploads/2016/03/LIMON-snature.jpg', 'lemon', 'super-mysqli-lemon');";
      
       
          
          if (mysqli_query($conn, $sql)) {
              echo "New record created successfully";
              
           
          } else {
              echo "Error: " . $sql . "" . mysqli_error($conn);
          }
          mysqli_commit($conn);
   }

    public function getProd($conn){
        $query = 'SELECT * FROM shop_items';
        $result = mysqli_query($conn, $query);

   return $prods = mysqli_fetch_all($result, MYSQLI_ASSOC);
//var_dump($prod);

   mysqli_free_result($result);

     mysqli_commit($conection);
    }
 }