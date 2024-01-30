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
$id=$_GET['updateid'];
$sql="select * from crud where id=$id";
$result = mysqli_query($link, $sql);
$row=mysqli_fetch_assoc($result);
$name=$row['username'];
$email=$row['Email'];
$gender=$row['Gender'];
$recieve=$row['Mail_state'];

if (isset($_POST["submit"])) {
   
    $name=$_POST['name'];
    $email=$_POST['email'];
    $gender=$_POST['gender'];
    $recieve=$_POST['recieve'];
    
    
    $sql="update crud set Id=$id,username='$name',Email='$email',Gender='$gender',Mail_state='$recieve' where Id=$id";
    $result=mysqli_query($link,$sql);
    if($result){
        header("location:display.php");
    }
    else{
        die(mysqli_error($link));
    };
    

}
?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>PHP crud operation.</title>
  </head>
  <body>
    <div class="container my-5">
        <form method="post">
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text"
                 class="form-control" 
                 id="exampleInputEmail1" 
                 aria-describedby="emailHelp"
                 placeholder="Enter your name"
                 name="name"
                 autocomplete="off"
                 value=<?php echo $name;?>>
                
            </div>
            <div class="form-group">
                <label for="email">Email address:</label>
                <input type="email"
                 class="form-control" 
                 id="exampleInputEmail1"
                aria-describedby="emailHelp"
                placeholder="Enter your Email"
                name="email"
                autocomplete="off"
                value=<?php echo $email;?>>
                
            </div>
            <div class="form-group">
            <label for="name">Gender:</label>
                <input type="text"
                 class="form-control" 
                 id="exampleInputEmail1" 
                 aria-describedby="emailHelp"
    
                 name="gender"
                 autocomplete="off"
                 value=<?php echo $gender;?>>
            </div>
            <div class="form-group ">
                <label for="name">Mail_state:</label>
                <input type="text"
                 class="form-control" 
                 id="exampleInputEmail1" 
                 aria-describedby="emailHelp"
    
                 name="recieve"
                 autocomplete="off"
                 value=<?php echo $recieve;?>>
            </div>
            <button type="submit"
             class="btn btn-primary"
             name="submit">Update</button>
        </form>
    </div>

 
  </body>
</html>