<?php
// add_to_cart.php

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] === "POST") {
  // Get the selected pizza and its toppings
  $selectedPizza = $_POST["pizza"];
  $selectedToppings = $_POST["toppings"];

  // Process the data and update the cart
  // Add your own logic here based on your shopping cart implementation

  // Redirect to the cart page
  header("Location: cart.php?pizza=$selectedPizza&toppings=" . urlencode(implode(',', $selectedToppings)));
  exit();
}
?>
