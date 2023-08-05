<?php 
require 'navbar.php';

?>

<!doctype html>
<html lang="en">
  <head>
    <title>e-commerce</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="admin.css">
    
  </head>
  <body>

  

<?php
// start the session to save the session
session_start();

// If not set (doesn't exist or is empty),it initializes it as an empty array 
if (!isset($_SESSION["cards"])) {
    $_SESSION["cards"] = array();

}

?>

<!-- THE FORM SECTION -->
<div class="container-fluid form_section">
        <form class="input" action="admin.php"  method="post" >
          <label for="product_name">Enter the product name:</label>
          <input type="text" name="product_name" Required><br><br>

          <label for="product_description">Enter the product description:</label>
          <input type="text" name="product_description" Required><br><br>

          <label for="product_image">Enter the product image:</label>
          <input type="file" id="product_image" name="product_image" multiple required><br><br>

          <label for="product_price">Enter the product price:</label>
          <input type="text" name="product_price" Required><br><br>
          <input id="add" type="submit" value="Add-product">
        </form>
      </div>

 



    </form>
</div>

<?php

if (!isset($_SESSION["cards"])) {
    $_SESSION["cards"] = array();
}

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $check = true;
    foreach ($_SESSION["cards"] as $value) {
        if ($_POST['product_name'] === $value[0] && $_POST['product_description'] === $value[1] && $_POST['product_image'] === $value[2] && $_POST['product_price'] === $value[3]) {
            $check = false;
            break; // No need to continue the loop once a match is found
        }
    }

    if ($check) {
        array_push(
            $_SESSION["cards"],
            array(
                htmlspecialchars($_POST['product_name']),
                htmlspecialchars($_POST['product_description']),
                $_POST['product_image'], 
                $_POST['product_price'],
            )
        );
        //  Remove the last element if the number of elements exceeds a certain limit (e.g., 10)
        //  $max_elements = 9;
        //  if (count($_SESSION["cards"]) > $max_elements) {
        //      array_pop($_SESSION["cards"]);
        //  }
    }
}

echo "<table class=\"table table-bordered\">";

foreach ($_SESSION["cards"] as $value) {
    echo "<tr>";
    echo "<td>" . $value[0] . "</td>";
    echo "<td>" . $value[1] . "</td>";
    echo "<td>";
    echo '<img src="images/' . trim($value[2], 'uploads/') . '" alt="Card image cap" width="60px">';
    echo "</td>";
    echo "<td>" . $value[3] . "</td>";
    echo "</tr>";
}
echo "</table>";
// session_unset();
// session_destroy();


?>

<form action="products.php" method="post">
  <input id="view" type="submit" value="view products">
</form>


<?php 
require 'footer.php';

?>


      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>