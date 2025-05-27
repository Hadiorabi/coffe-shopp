<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="Cache-Control" content="no-store, no-cache, must-revalidate">
  <meta http-equiv="Pragma" content="no-cache">
  <meta http-equiv="Expires" content="0">

  <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css"
  />

  <link rel="stylesheet" href="bootstrap.css" />
  <link rel="stylesheet" href="main.css" />

  <title>Vibra Coffee Shop</title>
</head>
<body>

  <div class="header">
    <p class="logo">
      <img width="100px" src="images/Screenshot 2025-05-08 171744.png" alt="Logo" />
      <h1 class="dd">Vibra Coffee Shop</h1>
    </p>
    <div class="cart">
      <i class="fa-solid fa-cart-shopping"></i>
      <p id="count">0</p>
    </div>
  </div>

  <br>

  <div class="container">
    <div id="root"></div>
    <div class="sidebar">
      <div class="head"><p>My Cart</p></div>
      <div id="cartItem">Your cart is empty</div>
      <div class="foot">
        <h3>Total</h3>
        <h2 id="total">$ 0.00</h2>
      </div>
    </div>
  </div>

  
  <div class="card">
    <form action="login.php" method="post">
      <div class="mb-3">
        <input type="text" class="form-control" name="username" placeholder="username" id="username">
      </div>
      <div class="mb-3">
        <input type="password" class="form-control" name="password" placeholder="password" id="password">
      </div>
      <button type="submit" class="btn btn-danger">Log in</button>
    </form>
  </div>

 
  <script src="main.js"></script>

</body>
</html>
