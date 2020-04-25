
<?php


//create conection
$conn = mysqli_connect('localhost', 'root', 'a1234', 'shop_citrus');
//check conection
if (mysqli_connect_errno()) {
    echo 'faield to connect' . mysqli_connect_errno();
}
