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
    <link rel="stylesheet" href="products.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>
  /* Set a fixed height for the card image */
  .card-img-top {
    height: 300px; /* Adjust the height as needed */
    object-fit: cover; /* Ensure the image scales without distortion */
    
  }
  .card{
    margin: 40px;
  }
  
</style>
  </head>
  <body>
    

<!-- php cards -->

<div class="body_img">
  <img src="images/body1.PNG" alt="">

</div>

<!-- intoduction section -->
<div class="intro_container">
  <div class="image">
    <img src="images/1.jpg" alt="">

  </div>
  <div class="introduction">
    <p>GET A CUSTOM SCULPTURE OF YOURSELF & YOUR LOVED ONE(S).
</p>
  </div>
</div>

<?php


session_start();


echo '<div class="row">'; // Add row class to wrap cards

foreach ($_SESSION["cards"] as $value) {
  echo '<div class="col-3">'; // Use col-4 to divide the row into 3 columns
  echo '<div class="card" style="width: 17rem;">';
  echo '<img class="card-img-top" src="images/' . trim($value[2], 'uploads/') . '" alt="Card image cap">';
  echo '<div class="card-body">';
  echo '<h5 class="card-title">' . $value[0] . '</h5>';
  echo '<p class="card-text">' . $value[1] . '</p>';
  echo '<p class="card-text">' . $value[3] . '</p>';
  echo '</div>';
  echo '</div>';
  echo '</div>';
}

echo '</div>'; // Close the row div


// session_unset();
// session_destroy();
echo '<a href="admin.php" style="margin-left: 50px"><button>go back</button></a>';
?>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>








<?php 
require 'footer.php';

?>