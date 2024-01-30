<?php
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';
$dbname = 'crudoperation';
$link = mysqli_connect( $dbhost, $dbuser, $dbpass, $dbname);

if (!$link) {
 echo "Error: Unable to connect to MySQL." . PHP_EOL;
 exit;
}


if (isset($_POST["submit"])) {

    $name=$_POST['name'];
    $email=$_POST['email'];
    $recieve=$_POST['recieve'];
    $gender=$_POST['gender'];

    $sql="INSERT INTO crud(username,Email,Gender,Mail_state)
    values('$name','$email','$gender','$recieve')";
    $result=mysqli_query($link,$sql);
    if($result){
        header('location:display.php');
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
                 autocomplete="off">
                
            </div>
            <div class="form-group">
                <label for="email">Email address:</label>
                <input type="email"
                 class="form-control" 
                 id="exampleInputEmail1"
                aria-describedby="emailHelp"
                placeholder="Enter your Email"
                name="email"
                autocomplete="off">
                
            </div>
            <div class="form-group">
                <label for="gender">Gender:</label>
                <input type="radio"  name="gender" value="male">
                <label for="male">Male</label>
                <input type="radio"  name="gender" value="female">
                <label for="female">Female</label>
            </div>
            <div class="form-group form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1" name="recieve">
                <label class="form-check-label" for="exampleCheck1">Receive Emails from us.</label>
            </div>
            <button type="submit"
             class="btn btn-primary"
             name="submit">Submit</button>
        </form>
    </div>

 
  </body>
</html>