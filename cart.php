<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cart</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
    integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
  <link rel="stylesheet" href="styles/pizza_shop_style.css">
</head>
<body>
  <div class="container">
    <h1>Cart</h1>
    <?php
    if (isset($_GET['pizza']) && isset($_GET['toppings'])) {
      $selectedPizza = $_GET['pizza'];
      $selectedToppings = explode(',', $_GET['toppings']);
      
      echo "<h3>Selected Pizza: $selectedPizza</h3>";
      echo "<h4>Selected Toppings:</h4>";
      echo "<ul>";
      foreach ($selectedToppings as $topping) {
        echo "<li>$topping</li>";
      }
      echo "</ul>";
    } else {
      echo "<p>No pizza selected.</p>";
    }
    ?>
    <a href="pizza_shop.php">Back to Pizza Shop</a>
  </div>
</body>
</html>
