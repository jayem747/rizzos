<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>hentaiHaven</title>
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">


</head>
<body style="text-align: center;">
    
<nav class="navbar navbar-expand-md navbar-light sticky-top navbar-light bg-light" style="border: 3px solid #4B4A48">
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
                <a class="nav-link" href="#" data-toggle="modal" data-target="#userModal"><img src="assets/user.png" width="26" height="auto"></a>
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
      <button style="background-color: #B32134; color: white; padding: 10px 20px; border: none; cursor: pointer; border-radius: 20%; font-size: 18px; width: 100px;">Drinks</button>
    </a>
  </div>

<a href="pizza_shop.php" style="display: block; margin: 50px auto;">
    <img src="assets/aanbiedingen/aanbieding1.jpg" style="margin: 0 auto;" />
  </a>
  <a href="pizza_shop.php" style="display: block; margin-bottom: 50px;">
    <img src="assets/aanbiedingen/aanbieding2.jpg" style="margin: 0 auto;" />
  </a>
  <a href="drinks_shop.php" style="display: block;">
    <img src="assets/aanbiedingen/aanbieding3.jpg" style="margin: 0 auto;" />
  </a>

<!-- Modal for sign in / sign up -->
<div class="modal fade" id="userModal" tabindex="-1" role="dialog" aria-labelledby="userModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header border-0">
						<h5>Sign In</h5>
						<h5>Sign Up</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <!-- Login and Registration forms -->
                <div class="row">
                    <div class="col-md-6"> 
                        <form method="POST" action="login_sign_up.php">
                            <input type="text" name="username" placeholder="Username" required>
                            <input type="password" name="password" placeholder="Password" required>
                            <button type="submit" name="login">Login</button>
                            <input type="hidden" name="redirect" value="index.php"> <!-- Add a hidden input to specify the redirect location -->
                        </form>
                    </div>
                    <div class="col-md-6">
                        <form method="POST" action="login_sign_up.php">
                            <input type="text" name="username" placeholder="Username" required>
                            <input type="password" name="password" placeholder="Password" required>
                            <button type="submit" name="register">Register</button>
                            <input type="hidden" name="redirect" value="index.php"> <!-- Add a hidden input to specify the redirect location -->
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Modal for sign in / sign up -->





<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>

  <footer style="text-align: left; padding: 10px; background-color: #ffffff; border: 3px solid #4B4A48; margin-top:50px;">
    <img src="assets/logo.png" alt="Logo" width="120" height="28" style="margin-right: 10px;">
  </footer>

</html>
