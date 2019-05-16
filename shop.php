<html lang="en" dir="ltr">
  <!--Head-->
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device=width">
    <title>Steven H. Grey | Official</title>

    <link rel="icon" type="img/png" href="img/MyLogo.png"/>

    <link rel="stylesheet" href="./css/style.css">

    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">

    <link rel="stylesheet" href="./css/animate.css">

    <link href="css/hover.css" rel="stylesheet" media="all">


    <link rel="stylesheet" href="./css/bttn.css">

    <!--PHP-->

    <?php include_once 'Connector.php';
    $SqlCDs = "SELECT * FROM products WHERE AVAILABLE!=0";
    $AvailableCDs= $db -> query($SqlCDs);?>

    <!--javascript(wow)-->
    <script src="js/wow.min.js"></script>
      <script>
        new WOW().init();
      </script>

      <script src="Cart.js" async></script>


  </head>

  <body>
    <!--header-->
    <header>
      <div class="container fadeInDown animated">
        <div id="StevenHGrey1">
          <h1>Steven H. Grey</h1>
        </div>
        <nav>
          <ul>
            <li><a href="index.php">Home</a></li>
            <li class="current"><a href="shop.php">Shop</a></li>
            <li><a href="about.html">About</a></li>
            <li><a href="cart.html">Cart</a></li>
            <li><a href="contact.html">Contact</a></li>
          </ul>
        </nav>
      </div>
    </header>

    <section id="products">
      <div class="container">
        <?php while ($product=mysqli_fetch_assoc($AvailableCDs)) :?>
        <div class="CDforsale">
          <a class="price">$<?=print_r($product['PRICE'], TRUE); ?></a>
          <a class="PrName"><?=print_r($product['PRODUCT_NAME'], TRUE); ?></a>
          <a class="Available">In-Stock: <?=print_r($product['AVAILABLE'], TRUE); ?></a>
          <img class="item-image" src="<?=print_r($product['img'], TRUE);?>" alt="<?=print_r($product['PRODUCT_NAME'], TRUE); ?>">
          <button class="button1 bttn-unite bttn-md" type="button">Add to cart</button>
        </div>
        <?php endwhile;?>
      </div>
    </section>

    <section class="container content-section">
      <h2 class="section-header">CART</h2>
      <div class="cart-row">
        <span class="cart-item cart-header cart-column">ITEM</span>
        <span class="cart-price cart-header cart-column">PRICE</span>
        <span class="cart-quantity cart-header cart-column">QUANTITY</span>
      </div>
      <div class="cart-items">
      </div>
      <div class="cart-total">
        <strong class="cart-total-title">Total</strong>
        <span class="cart-total-price">$0</span>
      </div>
      <button class="btn btn-primary btn-purchase" type="button">PURCHASE</button>
    </section>
    <footer>
      <h1>Steven H. Grey, Copyright &copy; 2019</h1>
      <a href="https://www.facebook.com/StevenHGrey/" target="_blank">Facebook</a>
      <a href="https://www.instagram.com/stevenhgrey404/" target="_blank">Instagram</a>
      <a href="https://www.youtube.com/channel/UCxNX7I_l_1GUABElzjPVKqg" target="_blank">Youtube</a>
    </footer>
  </body>
</html>
