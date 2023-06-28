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
  <link rel="stylesheet" href="styles/drinks_shop_style.css">
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
      <button style="background-color: #B32134; color: white; padding: 10px 20px; border: none; cursor: pointer; border-radius: 20%; font-size: 18px; width: 100px;">Pizza</button>
    </a>
    <div style="width: 50px;"></div> <!-- Empty space with a width of 50px -->
    <a href="drinks_shop.php" style="text-decoration: none;">
      <button style="background-color: #4B4A48; color: white; padding: 10px 20px; border: none; cursor: pointer; border-radius: 20%; font-size: 18px; width: 100px;">Drinks</button>
    </a>
  </div>

  <div class="container" style="margin-top: 50px; margin-bottom: 50px;">
    <div class="row justify-content-center">
      <!-- Gallery item 1 -->
      <div class="col-6 col-md-4 col-lg-4 mb-4">
        <div class="card">
          <img src="assets/drinks/cola.jpg" class="card-img-top" style="width: 100%; height: 200px; border-radius: 4px;" data-toggle="modal" data-target="#colaModal">
          <div class="card-body">
            <h5 class="card-title">Coca Cola</h5>
            <p class="card-text">330ML</p>
          </div>
        </div>
      </div>
      <!-- End Gallery item 1 -->

      <!-- Gallery item 2 -->
      <div class="col-6 col-md-4 col-lg-4 mb-4">
        <div class="card">
          <img src="assets/drinks/fanta.jpg" class="card-img-top" style="width: 100%; height: 200px; border-radius: 4px;" data-toggle="modal" data-target="#fantaModal">
          <div class="card-body">
            <h5 class="card-title">Fanta</h5>
            <p class="card-text">330ML</p>
          </div>
        </div>
      </div>
      <!-- End Gallery item 2 -->
    </div>

    <div class="row justify-content-center">
      <!-- Gallery item 3 -->
      <div class="col-6 col-md-4 col-lg-4 mb-4">
        <div class="card">
          <img src="assets/drinks/sprite.jpg" alt="" class="card-img-top" style="width: 100%; height: 200px; border-radius: 4px;" data-toggle="modal" data-target="#spriteModal">
          <div class="card-body">
            <h5 class="card-title">Sprite</h5>
            <p class="card-text">330ML</p>
          </div>
        </div>
      </div>
      <!-- End Gallery item 3 -->

      <!-- Gallery item 4 -->
      <div class="col-6 col-md-4 col-lg-4 mb-4">
        <div class="card">
          <img src="assets/drinks/arizona.jpg" alt="" class="card-img-top" style="width: 100%; height: 200px; border-radius: 4px;" data-toggle="modal" data-target="#arizonaModal">
          <div class="card-body">
            <h5 class="card-title">Arizona Iced Tea</h5>
            <p class="card-text">500ML</p>
          </div>
        </div>
      </div>
      <!-- End Gallery item 4 -->
    </div>

    <div class="row justify-content-center">
      <!-- Gallery item 5 -->
      <div class="col-6 col-md-4 col-lg-4 mb-4">
        <div class="card">
          <img src="assets/drinks/monster.jpg" alt="" class="card-img-top" style="width: 100%; height: 200px; border-radius: 4px;" data-toggle="modal" data-target="#monsterModal">
          <div class="card-body">
            <h5 class="card-title">Monster Energy</h5>
            <p class="card-text">500ML</p>
          </div>
        </div>
      </div>
      <!-- End Gallery item 5 -->

      <!-- Gallery item 6 -->
      <div class="col-6 col-md-4 col-lg-4 mb-4">
        <div class="card">
          <img src="assets/drinks/monster_ultra.jpg" alt="" class="card-img-top" style="width: 100%; height: 200px; border-radius: 4px;" data-toggle="modal" data-target="#monster_ultraModal">
          <div class="card-body">
            <h5 class="card-title">Monster Energy Ultra</h5>
            <p class="card-text">500ML</p>
          </div>
        </div>
      </div>
      <!-- End Gallery item 6 -->
    </div>
  </div>

<!-- Modal for Cola -->
<div class="modal fade" id="colaModal" tabindex="-1" role="dialog" aria-labelledby="colaModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-body p-0">
        <img src="assets/drinks/cola.jpg" class="modal-image">
        <span class="modal-close" data-dismiss="modal" aria-label="Close">&times;</span>
          <div class="p-3">
            <h5 class="modal-title" id="colalLabel">Coca Cola</h5>
            <p>330ML €2,50</p>
            <form action="cart.php" method="POST">
                <div class="cart_add">
                    <button type="submit" class="btn" id="add-to-cart"><u>Add to Cart</u></button>
                </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
<!-- End Modal for Cola -->


<!-- Modal for Fanta -->
<div class="modal fade" id="fantaModal" tabindex="-1" role="dialog" aria-labelledby="fantaModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-body p-0">
        <img src="assets/drinks/fanta.jpg" class="modal-image">
        <span class="modal-close" data-dismiss="modal" aria-label="Close">&times;</span>
          <div class="p-3">
            <h5 class="modal-title" id="fantaModalLabel">Fanta</h5>
          <p>330ML €2,50</p>
          <form action="cart.php" method="POST">
                <div class="cart_add">
                    <button type="submit" class="btn" id="add-to-cart"><u>Add to Cart</u></button>
                </div>
            </form>
          </div>
        </div>
      </div>
    </div>
</div>

<!-- Modal for sprite -->
<div class="modal fade" id="spriteModal" tabindex="-1" role="dialog" aria-labelledby="spriteModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-body p-0">
        <img src="assets/drinks/sprite.jpg" class="modal-image">
        <span class="modal-close" data-dismiss="modal" aria-label="Close">&times;</span>
          <div class="p-3">
            <h5 class="modal-title" id="spriteModalLabel">Sprite</h5>
          <p>330ML €2,50</p>
          <form action="cart.php" method="POST">
                <div class="cart_add">
                    <button type="submit" class="btn" id="add-to-cart"><u>Add to Cart</u></button>
                </div>
            </form>
          </div>
        </div>
      </div>
    </div>
</div>
<!-- End Modal for sprite -->

<!-- Modal for Arizona -->
<div class="modal fade" id="arizonaModal" tabindex="-1" role="dialog" aria-labelledby="arizonaModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-body p-0">
        <img src="assets/drinks/arizona.jpg" class="modal-image">
        <span class="modal-close" data-dismiss="modal" aria-label="Close">&times;</span>
          <div class="p-3">
            <h5 class="modal-title" id="arizonaModalLabel">Arizona Ice Tea</h5>
          <p>500ML €2,99</p>
          <form action="cart.php" method="POST">
                <div class="cart_add">
                    <button type="submit" class="btn" id="add-to-cart"><u>Add to Cart</u></button>
                </div>
            </form>
          </div>
        </div>
      </div>
    </div>
</div>
<!-- End Modal for arizona -->

<!-- Modal for Monster Energy -->
<div class="modal fade" id="monsterModal" tabindex="-1" role="dialog" aria-labelledby="monsterModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-body p-0">
          <span class="modal-close" data-dismiss="modal" aria-label="Close">&times;</span>
          <img src="assets/drinks/monster.jpg" class="modal-image">
          <div class="p-3">
            <h5 class="modal-title" id="monsterModalLabel">Monster Energy</h5>
          <p>500ML €3,49</p>
          <form action="cart.php" method="POST">
                <div class="cart_add">
                    <button type="submit" class="btn" id="add-to-cart"><u>Add to Cart</u></button>
                </div>
            </form>
          </div>
        </div>
      </div>
    </div>
</div>
<!-- End Modal for Monster Energy -->

<!-- Modal for Monster ultra -->
<div class="modal fade" id="monster_ultraModal" tabindex="-1" role="dialog" aria-labelledby="monster_ultraModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-body p-0">
          <span class="modal-close" data-dismiss="modal" aria-label="Close">&times;</span>
          <img src="assets/drinks/monster_ultra.jpg" class="modal-image">
          <div class="p-3">
            <h5 class="modal-title" id="monster_ultraModalLabel">Monster Energy Ultra</h5>
          <p>500ML €3,49</p>
          <form action="cart.php" method="POST">
                <div class="cart_add">
                    <button type="submit" class="btn" id="add-to-cart"><u>Add to Cart</u></button>
                </div>
            </form>
          </div>
        </div>
      </div>
    </div>
</div>
<!-- End Modal for Monster ultra -->

  <script src="add_to_cart.js"></script>
</body>

<footer style="text-align: left; padding: 10px; background-color: #ffffff; border: 3px solid #4B4A48; margin-top:50px;">
    <img src="assets/logo.png" alt="Logo" width="120" height="28" style="margin-right: 10px;">
  </footer>

</html>
