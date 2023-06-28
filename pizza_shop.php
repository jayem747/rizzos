<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Rizzo's</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
    integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@1.15.0/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="styles/pizza_shop_style.css">
</head>

<body style="text-align: center;">

  <nav class="navbar navbar-expand-md navbar-light sticky-top navbar-light bg-light " style="border:3px solid #4B4A48">
    <div class="navbar-collapse collapse w-100 order-1 order-md-0 dual-collapse2">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="index.php"><img src="assets/logo.png" width="120" height="28"></a>
        </li>
      </ul>
    </div>

    <div class="navbar-collapse collapse w-100 order-3 dual-collapse2">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link" href="#"><img src="assets/shopping.png" width="35" height="auto"></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#"><img src="assets/user.png" width="26" height="auto"></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="index.php"><img src="assets/home.png" width="32" height="auto"></a>
        </li>
      </ul>
    </div>
  </nav>

  <div style="height: 50px;"></div> <!-- Empty space with a height of 50px -->
  <div style="display: flex; justify-content: center;">
    <a href="pizza_shop.php" style="text-decoration: none;">
      <button style="background-color: #4B4A48; color: white; padding: 10px 20px; border: none; cursor: pointer; border-radius: 20%; font-size: 18px; width: 100px;">Pizza</button>
    </a>
    <div style="width: 50px;"></div> <!-- Empty space with a width of 50px -->
    <a href="drinks_shop.php" style="text-decoration: none;">
      <button style="background-color: #B32134; color: white; padding: 10px 20px; border: none; cursor: pointer; border-radius: 20%; font-size: 18px; width: 100px;">Drinks</button>
    </a>
  </div>

  <div class="container" style="margin-top: 50px; margin-bottom: 50px;">
    <div class="row justify-content-center">
      <!-- Gallery item 1 -->
      <div class="col-6 col-md-4 col-lg-4 mb-4">
        <div class="card">
          <img src="assets/pizzas/margherita.jpg" class="card-img-top" style="width: 100%; height: auto; border-radius: 4px;" data-toggle="modal" data-target="#margheritaModal">
          <div class="card-body">
            <h5 class="card-title">Pizza Margherita</h5>
            <p class="card-text">A classic pizza topped with tomato sauce, fresh mozzarella cheese, and basil leaves.<br>(vegetarian)</p>
          </div>
        </div>
      </div>
      <!-- End Gallery item 1 -->

      <!-- Gallery item 2 -->
      <div class="col-6 col-md-4 col-lg-4 mb-4">
        <div class="card">
          <img src="assets/pizzas/pepperoni.jpg" class="card-img-top" style="width: 100%; height: auto; border-radius: 4px;" data-toggle="modal" data-target="#pepperoniModal">
          <div class="card-body">
            <h5 class="card-title">Pizza Pepperoni</h5>
            <p class="card-text">A flavorful pizza loaded with zesty tomato sauce, melted cheese, and savory pepperoni slices.</p>
          </div>
        </div>
      </div>
      <!-- End Gallery item 2 -->
    </div>

    <div class="row justify-content-center">
      <!-- Gallery item 3 -->
      <div class="col-6 col-md-4 col-lg-4 mb-4">
        <div class="card">
          <img src="assets/pizzas/vegetarian.jpg" alt="" class="card-img-top" style="width: 100%; height: auto; border-radius: 4px;" data-toggle="modal" data-target="#vegetarianModal">
          <div class="card-body">
            <h5 class="card-title">Pizza vegetarian</h5>
            <p class="card-text">A delicious pizza packed with an assortment of colorful vegetables, including bell peppers, onions, mushrooms, and olives.</p>
          </div>
        </div>
      </div>
      <!-- End Gallery item 3 -->

      <!-- Gallery item 4 -->
      <div class="col-6 col-md-4 col-lg-4 mb-4">
        <div class="card">
          <img src="assets/pizzas/hawaii.jpg" alt="" class="card-img-top" style="width: 100%; height: auto; border-radius: 4px;" data-toggle="modal" data-target="#hawaiiModal">
          <div class="card-body">
            <h5 class="card-title">Pizza hawaii</h5>
            <p class="card-text">An unconventional combination of sweet pineapple, tangy ham, and melted cheese on a pizza crust, offering a unique taste experience</p>
          </div>
        </div>
      </div>
      <!-- End Gallery item 4 -->
    </div>

    <div class="row justify-content-center">
      <!-- Gallery item 5 -->
      <div class="col-6 col-md-4 col-lg-4 mb-4">
        <div class="card">
          <img src="assets/pizzas/meat_lovers.jpg" alt="" class="card-img-top" style="width: 100%; height: auto; border-radius: 4px;" data-toggle="modal" data-target="#meatLoversModal">
          <div class="card-body">
            <h5 class="card-title">Pizza meat lover's</h5>
            <p class="card-text">A carnivore's delight featuring a variety of mouthwatering meats such as pepperoni, sausage, bacon, and ground beef, smothered in cheese.</p>
          </div>
        </div>
      </div>
      <!-- End Gallery item 5 -->

      <!-- Gallery item 6 -->
      <div class="col-6 col-md-4 col-lg-4 mb-4">
        <div class="card">
          <img src="assets/pizzas/mushrooms.jpg" alt="" class="card-img-top" style="width: 100%; height: auto; border-radius: 4px;" data-toggle="modal" data-target="#mushroomsModal">
          <div class="card-body">
            <h5 class="card-title">Pizza Mushrooms</h5>
            <p class="card-text">A delightful pizza adorned with earthy and savory mushrooms, complemented by a blend of cheese and herbs.<br>(vegetarian)</p>
          </div>
        </div>
      </div>
      <!-- End Gallery item 6 -->
    </div>
  </div>

<!-- Modal for Pizza Margherita -->
<div class="modal fade" id="margheritaModal" tabindex="-1" role="dialog" aria-labelledby="margheritaModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-body p-0">
        <img src="assets/pizzas/margherita.jpg" class="modal-image">
        <span class="modal-close" data-dismiss="modal" aria-label="Close">&times;</span>
          <div class="p-3">
            <h5 class="modal-title" id="margheritaModalLabel">Pizza Margherita</h5>
            <p>A classic pizza topped with tomato sauce, fresh mozzarella cheese, and basil leaves. (vegetarian)</p>
<form action="cart.php" method="POST">
  <div>
    <div class="topping-option">
      <label class="topping-name">
        <input type="checkbox" id="topping1" name="toppings[]" value="Pepperoni">
        Pepperoni
      </label>
      <span class="topping-price">€1.00</span>
    </div>
    <div class="topping-option">
      <label class="topping-name">
        <input type="checkbox" id="topping2" name="toppings[]" value="Mushrooms">
        Mushrooms
      </label>
      <span class="topping-price">€1.00</span>
    </div>
    <div class="topping-option">
      <label class="topping-name">
        <input type="checkbox" id="topping3" name="toppings[]" value="Onions">
        Onions
      </label>
      <span class="topping-price">€1.00</span>
    </div>
    <div class="topping-option">
      <label class="topping-name">
        <input type="checkbox" id="topping4" name="toppings[]" value="Olives">
        Olives
      </label>
      <span class="topping-price">€1.00</span>
    </div>
  </div>
<div class="cart_add">
    <button type="submit" class="btn" id="add-to-cart"><u>Add to Cart</u></button>
  </div>
</form>

          </div>
        </div>
      </div>
    </div>
  </div>
<!-- End Modal for Pizza Margherita -->


  <!-- Modal for Pizza Pepperoni -->
  <div class="modal fade" id="pepperoniModal" tabindex="-1" role="dialog" aria-labelledby="pepperoniModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-body p-0">
        <img src="assets/pizzas/pepperoni.jpg" class="modal-image">
        <span class="modal-close" data-dismiss="modal" aria-label="Close">&times;</span>
          <div class="p-3">
            <h5 class="modal-title" id="pepperoniModalLabel">Pizza Pepperoni</h5>
          <p>A flavorful pizza loaded with zesty tomato sauce, melted cheese, and savory pepperoni slices.</p>
          <form action="cart.php" method="POST">
  <div>
    <div class="topping-option">
      <label class="topping-name">
        <input type="checkbox" id="topping1" name="toppings[]" value="Pepperoni">
        Pepperoni
      </label>
      <span class="topping-price">€1.00</span>
    </div>
    <div class="topping-option">
      <label class="topping-name">
        <input type="checkbox" id="topping2" name="toppings[]" value="Mushrooms">
        Mushrooms
      </label>
      <span class="topping-price">€1.00</span>
    </div>
    <div class="topping-option">
      <label class="topping-name">
        <input type="checkbox" id="topping3" name="toppings[]" value="Onions">
        Onions
      </label>
      <span class="topping-price">€1.00</span>
    </div>
    <div class="topping-option">
      <label class="topping-name">
        <input type="checkbox" id="topping4" name="toppings[]" value="Olives">
        Olives
      </label>
      <span class="topping-price">€1.00</span>
    </div>
  </div>
<div class="cart_add">
    <button type="submit" class="btn" id="add-to-cart"><u>Add to Cart</u></button>
  </div>
</form>

          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal for Pizza Vegetarian -->
  <div class="modal fade" id="vegetarianModal" tabindex="-1" role="dialog" aria-labelledby="vegetarianModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-body p-0">
        <img src="assets/pizzas/vegetarian.jpg" class="modal-image">
        <span class="modal-close" data-dismiss="modal" aria-label="Close">&times;</span>
          <div class="p-3">
            <h5 class="modal-title" id="vegetarianModalLabel">Pizza Vegetarian</h5>
          <p>A delicious pizza packed with an assortment of colorful vegetables, including bell peppers, onions, mushrooms, and olives.</p>
          <form action="cart.php" method="POST">
  <div>
    <div class="topping-option">
      <label class="topping-name">
        <input type="checkbox" id="topping1" name="toppings[]" value="Pepperoni">
        Pepperoni
      </label>
      <span class="topping-price">€1.00</span>
    </div>
    <div class="topping-option">
      <label class="topping-name">
        <input type="checkbox" id="topping2" name="toppings[]" value="Mushrooms">
        Mushrooms
      </label>
      <span class="topping-price">€1.00</span>
    </div>
    <div class="topping-option">
      <label class="topping-name">
        <input type="checkbox" id="topping3" name="toppings[]" value="Onions">
        Onions
      </label>
      <span class="topping-price">€1.00</span>
    </div>
    <div class="topping-option">
      <label class="topping-name">
        <input type="checkbox" id="topping4" name="toppings[]" value="Olives">
        Olives
      </label>
      <span class="topping-price">€1.00</span>
    </div>
  </div>
<div class="cart_add">
    <button type="submit" class="btn" id="add-to-cart"><u>Add to Cart</u></button>
  </div>
</form>

          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- End Modal for Pizza Vegetarian -->

  <!-- Modal for Pizza Hawaii -->
  <div class="modal fade" id="hawaiiModal" tabindex="-1" role="dialog" aria-labelledby="hawaiiModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-body p-0">
        <img src="assets/pizzas/hawaii.jpg" class="modal-image">
        <span class="modal-close" data-dismiss="modal" aria-label="Close">&times;</span>
          <div class="p-3">
            <h5 class="modal-title" id="hawaiiModalLabel">Pizza Hawaii</h5>
          <p>An unconventional combination of sweet pineapple, tangy ham, and melted cheese on a pizza crust, offering a unique taste experience.</p>
          <form action="cart.php" method="POST">
  <div>
    <div class="topping-option">
      <label class="topping-name">
        <input type="checkbox" id="topping1" name="toppings[]" value="Pepperoni">
        Pepperoni
      </label>
      <span class="topping-price">€1.00</span>
    </div>
    <div class="topping-option">
      <label class="topping-name">
        <input type="checkbox" id="topping2" name="toppings[]" value="Mushrooms">
        Mushrooms
      </label>
      <span class="topping-price">€1.00</span>
    </div>
    <div class="topping-option">
      <label class="topping-name">
        <input type="checkbox" id="topping3" name="toppings[]" value="Onions">
        Onions
      </label>
      <span class="topping-price">€1.00</span>
    </div>
    <div class="topping-option">
      <label class="topping-name">
        <input type="checkbox" id="topping4" name="toppings[]" value="Olives">
        Olives
      </label>
      <span class="topping-price">€1.00</span>
    </div>
  </div>
<div class="cart_add">
    <button type="submit" class="btn" id="add-to-cart"><u>Add to Cart</u></button>
  </div>
</form>

          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- End Modal for Pizza Hawaii -->

  <!-- Modal for Pizza Meat Lover's -->
  <div class="modal fade" id="meatLoversModal" tabindex="-1" role="dialog" aria-labelledby="meatLoversModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-body p-0">
          <span class="modal-close" data-dismiss="modal" aria-label="Close">&times;</span>
          <img src="assets/pizzas/meat_lovers.jpg" class="modal-image">
          <div class="p-3">
            <h5 class="modal-title" id="meatLoversModalLabel">Pizza Meat Lover's</h5>
          <p>A carnivore's delight featuring a variety of mouthwatering meats such as pepperoni, sausage, bacon, and ground beef, smothered in cheese.</p>
          <form action="cart.php" method="POST">
  <div>
    <div class="topping-option">
      <label class="topping-name">
        <input type="checkbox" id="topping1" name="toppings[]" value="Pepperoni">
        Pepperoni
      </label>
      <span class="topping-price">€1.00</span>
    </div>
    <div class="topping-option">
      <label class="topping-name">
        <input type="checkbox" id="topping2" name="toppings[]" value="Mushrooms">
        Mushrooms
      </label>
      <span class="topping-price">€1.00</span>
    </div>
    <div class="topping-option">
      <label class="topping-name">
        <input type="checkbox" id="topping3" name="toppings[]" value="Onions">
        Onions
      </label>
      <span class="topping-price">€1.00</span>
    </div>
    <div class="topping-option">
      <label class="topping-name">
        <input type="checkbox" id="topping4" name="toppings[]" value="Olives">
        Olives
      </label>
      <span class="topping-price">€1.00</span>
    </div>
  </div>
<div class="cart_add">
    <button type="submit" class="btn" id="add-to-cart"><u>Add to Cart</u></button>
  </div>
</form>

          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- End Modal for Pizza Meat Lover's -->

  <!-- Modal for Pizza Mushrooms -->
  <div class="modal fade" id="mushroomsModal" tabindex="-1" role="dialog" aria-labelledby="mushroomsModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-body p-0">
          <span class="modal-close" data-dismiss="modal" aria-label="Close">&times;</span>
          <img src="assets/pizzas/mushrooms.jpg" class="modal-image">
          <div class="p-3">
            <h5 class="modal-title" id="mushroomsModalLabel">Pizza Mushrooms</h5>
          <p>A delightful pizza adorned with earthy and savory mushrooms, complemented by a blend of cheese and herbs. (vegetarian)</p>
          <form action="cart.php" method="POST">
  <div>
    <div class="topping-option">
      <label class="topping-name">
        <input type="checkbox" id="topping1" name="toppings[]" value="Pepperoni">
        Pepperoni
      </label>
      <span class="topping-price">€1.00</span>
    </div>
    <div class="topping-option">
      <label class="topping-name">
        <input type="checkbox" id="topping2" name="toppings[]" value="Mushrooms">
        Mushrooms
      </label>
      <span class="topping-price">€1.00</span>
    </div>
    <div class="topping-option">
      <label class="topping-name">
        <input type="checkbox" id="topping3" name="toppings[]" value="Onions">
        Onions
      </label>
      <span class="topping-price">€1.00</span>
    </div>
    <div class="topping-option">
      <label class="topping-name">
        <input type="checkbox" id="topping4" name="toppings[]" value="Olives">
        Olives
      </label>
      <span class="topping-price">€1.00</span>
    </div>
  </div>
<div class="cart_add">
    <button type="submit" class="btn" id="add-to-cart"><u>Add to Cart</u></button>
  </div>
</form>

          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- End Modal for Pizza Mushrooms -->

  <script src="add_to_cart.js"></script>
</body>

<footer style="text-align: left; padding: 10px; background-color: #ffffff; border: 3px solid #4B4A48; margin-top:50px;">
    <img src="assets/logo.png" alt="Logo" width="120" height="28" style="margin-right: 10px;">
  </footer>

</html>
