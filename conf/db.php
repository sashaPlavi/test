
<?php


//create conection
$conn = mysqli_connect('localhost', 'root', 'a1234', 'shop_citrus');
//check conection
if (mysqli_connect_errno()) {
    echo 'faield to connect' . mysqli_connect_errno();
}

//insert data
function insert($conn){

    $sql = "INSERT INTO shop_items(id, img, title, description)
VALUES
(1,'http://snaturefruits.com/wp-content/uploads/2016/03/LIMON-snature.jpg', 'lemon', 'super-mysqli-lemon'),
(2,'http://snaturefruits.com/wp-content/uploads/2016/03/LIMON-snature.jpg', 'lemon', 'super-mysqli-lemon'),
(3,'http://snaturefruits.com/wp-content/uploads/2016/03/LIMON-snature.jpg', 'lemon', 'super-mysqli-lemon'),
(4,'http://snaturefruits.com/wp-content/uploads/2016/03/LIMON-snature.jpg', 'lemon', 'super-mysqli-lemon'),
(5,'http://snaturefruits.com/wp-content/uploads/2016/03/LIMON-snature.jpg', 'lemon', 'super-mysqli-lemon'),
(6,'http://snaturefruits.com/wp-content/uploads/2016/03/LIMON-snature.jpg', 'lemon', 'super-mysqli-lemon'),
(7,'http://snaturefruits.com/wp-content/uploads/2016/03/LIMON-snature.jpg', 'lemon', 'super-mysqli-lemon'),
(8,'http://snaturefruits.com/wp-content/uploads/2016/03/LIMON-snature.jpg', 'lemon', 'super-mysqli-lemon'),
(9,'http://snaturefruits.com/wp-content/uploads/2016/03/LIMON-snature.jpg', 'lemon', 'super-mysqli-lemon');";

 
    
    if (mysqli_query($conn, $sql)) {
        echo "New record created successfully";
        return "inserted";
     
    } else {
        echo "Error: " . $sql . "" . mysqli_error($conn);
    }
    mysqli_commit($conn);
}
