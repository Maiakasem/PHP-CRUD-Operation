<?php

// $dbhost = 'localhost';
// $dbuser = 'root';
// $dbpass = '';
// $dbname = 'crudoperation';
// $link = mysqli_connect( $dbhost, $dbuser, $dbpass, $dbname);

// if (!$link) {
//  echo "Error: Unable to connect to MySQL." . PHP_EOL;
//  exit;
// }
include 'connect.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>crud operation</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
    <div class="container">
     <button class="btn btn-primary my-5"> <a href="index.php"  class="text-light">Add user</a></button>
    </div>
    <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Gender</th>
      <th scope="col">Mail Status</th>
      <th scope="col">Operation</th>
    </tr>
  </thead>
  <tbody>
 <?php
   
    $sql="SELECT * FROM crud";
    $result = mysqli_query($link, $sql);
    if($result) {
        $row=mysqli_fetch_assoc($result);
        // echo"name:". $row["username"] ;
    }
     while($row=mysqli_fetch_assoc($result)) {
        $id=$row['Id'];
        $name=$row['username'];
        $email=$row['Email'];
        $gender=$row['Gender'];
        $recieve=$row['Mail_state'];
        echo '<tr>
        <th scope= row>'.$id.'</th>
            <td> '.$name.' </td>
            <td>'.$email.'</td>
            <td>'.$gender.'</td>
            <td>'.$recieve.'</td>
            <td>
                <button class="btn btn-success"><a href="show.php? showid='.$id.'" class="text-light"> Show   </a></button>
                <button class="btn btn-primary"><a href="update.php? updateid='.$id.'" class="text-light"> update </a></button>
                <button class="btn btn-danger"><a href="delete.php? deleteid='.$id.'" class="text-light"> Delete </a></button>
            </td>

      </tr>';
     }

?>
  
  </tbody>
</table>
    
</body>
</html>