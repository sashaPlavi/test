<?php

class Comments
{

    public function setComments($conn, $title, $mail, $comment)
    {
        $sql = "INSERT INTO comments(title, email, comment, ok )
    VALUES ('$title','$mail', '$comment', 'false');";
        if (mysqli_query($conn, $sql)) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "" . mysqli_error($conn);
        }
        mysqli_commit($conn);
    }
    public function getCom($conn)
    {
        $query = 'SELECT * FROM comments';
        $result = mysqli_query($conn, $query);
        return $com = mysqli_fetch_all($result, MYSQLI_ASSOC);
        mysqli_free_result($result);
        mysqli_commit($conn);
    }
    public function allowCom($conn, $id)
    {
        $sql = "UPDATE comments 
        SET ok = true
          WHERE id = '$id';";
        if (mysqli_query($conn, $sql)) {
            //echo "New record created successfully";
        } else {
            // echo "Error: " . $sql . "" . mysqli_error($conn);
        }
        mysqli_commit($conn);
        header("Refresh: 0; url=edit.php");
    }
}
