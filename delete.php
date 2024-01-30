<?php
include 'connect.php';
    if(isset($_GET['deleteid'])){
        $id=$_GET['deleteid'];

        $sql="delete from crud where Id=$id";
        $result=mysqli_query($link,$sql);
        if($result){
            // echo "Deleted successfully";
            header("location:display.php");
    }else{
        die(mysqli_error($link));
    };
};
?>