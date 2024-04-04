<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Sklep</title>
</head>
<body>
    <header class="flex-container topnav">
        <img src="img/LEGO_logo.svg.png" alt="logo" class="logo">
        <form action="search.php" method="get">
            <input type="text" name="search" id="search" placeholder="Wyszukaj Produkt">
            <input type="submit" value="szukaj">
        </form>
        <a href="png-clipart-shopping-cart-shopping-centre-icon-shopping-cart-text-retail-thumbnail.png" id="cart">koszyk</a>
        </header>
        <main class="flex-container-wrap">
            <div class="card">
              <h3>nazwa oferty</h3>
              <p>cena:100zł</p>           
                 </div>

                 <?php 
                 include "display_products.php"
                 
                 ?>
        </main>
</body>
</html>