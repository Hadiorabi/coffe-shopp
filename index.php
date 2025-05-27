
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="Cache-Control" content="no-store, no-cache, must-revalidate">
<meta http-equiv="Pragma" content="no-cache">
<meta http-equiv="Expires" content="0">
    <!-- Allows you to use Font Awesome icons in your project without downloading files. -->
    <script
      src="https://kit.fontawesome.com/92d70a2fd8.js"
      crossorigin="anonymous"
    ></script>
    <link rel="stylesheet" href="bootstrap.css" />
    <link rel="stylesheet" href="main.css" />
    <title>Document</title>
  </head>
  <body>
    <div class="header">
      <p class="logo">
        <img
          width="100px"
          src="images/Screenshot 2025-05-08 171744.png"
          alt=""
        /> <h1 class="dd">Vibra coffe shopp</h1>
      </p>
      <div class="cart">
        <i class="fa-solid fa-cart-shopping"></i>
        <p id="count">0</p>
      </div>
    </div>
    <br>
    <div class="container">
      <!-- ROOT the container where all the coffee products will appear. -->
      <div id="root"></div>
      <div class="sidebar">
        <div class="head"><p>My Cart</p></div>
        <div id="cartItem">Your cart is empty</div>
        <div class="foot">
          <h3>Total</h3>
          <h2  id="total">$ 0.00</h2>
        </div>
      </div>
    </div>
   <div class="card"><form action="login.php" method="post">
     <div class="mb-3">
  <label for="username" class="form-label"></label>
  <input type="text" class="form-control" name="username" placeholder="username"  id="username">
</div>
<div class="mb-3">
  <label for="password" class="form-label"></label>
  <input type="tete" class="form-control" name="passwor" placeholder="password" id="password">
</div>
<button type="submit" class="btn btn-danger">log in</button>
   </form></div>

 <!-- //username hadi and password o (to check if log in is active or no) -->
    <script src="main.js"></script>
  </body>
</html>
