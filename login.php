<?php 
require 'navbar.php';

?>


<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="login.css">
    <link rel="stylesheet" href="admin.css">
  </head>
  <body>
    <!-- LOG IN FORM -->
  <div class="center">
  <h1>Log in</h1>
  <form action="#" method="POST">
    <div class="inputbox">
      <input type="text" required="required" name="username">
      <span>User Name</span>
    </div>
    <div class="inputbox">
      <input type="password" required="required" name="password">
      <span>Password</span>
    </div>
    <div class="inputbox">
      <input type="submit" value="submit">
    </div>
  </form>
</div>

<?php 


if(isset($_POST['username']) && isset($_POST['password'])){
    $user= "raghad";
    $pass="123456";

    $username =$_POST['username'];
    $password=$_POST['password'];
    if(($username==$user) && ($password==$pass)){
    header("Location: admin.php");
    exit;
    }


else {
    echo "Sorry the username not found ";
}
}
?>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>