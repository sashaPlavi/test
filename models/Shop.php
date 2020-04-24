<?php


class Shop {

    public function getProd($conn){
        $query = 'SELECT * FROM shop_items';
        $result = mysqli_query($conn, $query);

   return $prods = mysqli_fetch_all($result, MYSQLI_ASSOC);
//var_dump($prod);

   mysqli_free_result($result);

     mysqli_commit($conection);
    }
 }