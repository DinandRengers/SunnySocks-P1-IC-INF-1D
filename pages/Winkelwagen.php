<?php
    // Initialiseer variabelen
    $price = 12.50; // prijs van het product
    $quantity = isset($_POST['quantity']) ? (int)$_POST['quantity'] : 1; // aantal producten
    $total_price = $price * $quantity; // totale prijs berekenen
    $btw = $price * $quantity  / 121 * 21;
    $total = $price * $quantity + $btw + 1.25;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SunnySocks</title>
    <link rel="stylesheet" href="../css/style.css" type="text/css">
    <link rel="stylesheet" href="../css/winkelwagen.css" type="text/css">
</head>
<body>
    <header>
        <img src="../content/sunny_logos-01.png" alt="Sunny Socks logo">
        <div class="zoeken">
        <form action="search.php" method="POST">
            <label for="Zoeken"></label>
            <input type="text" name="zoeken" id="Zoeken" placeholder="Zoeken">
            <input type="submit" value="versturen">
        </form>
        <img src="../content/zoekLogo.png" alt="Zoeken"> 
        </div>
        <nav class="menu">
            <a class="headerMenu" href="../index.html">Home</a>
            <a class="headerMenu" href="../pages/overons.html">Over ons</a>
            <a class="headerMenu" href="#">Blog</a>
            <a class="headerMenu" href="#">Collectie</a>
            <a class="headerMenu" href="#">Contact</a>
            <a href="#"><img class="fotoHeader" src="../content/Winkelwagen.png" alt="Winkelwagen"></a>
        </nav>
    </header>

    <main class="contentwinkelwagen">
        <section class="winkelwagen">
            <h2>Mijn winkelwagen:</h2>
                <div class="wwproduct1">
                    <img class="cancelbutton" src="../content/cancel_icon.png" alt="cancel_icon">
                    <img class="productimg" src="../content/Sunny_socks_uni_green.jpg" alt="Green Socks">
                    <form method="POST" action="">
                        <input type="hidden" name="id" value="1">
                        <input type="hidden" name="price" value="12.50">
                        <div class="p1info">
                            <p>Sunny Socks</p>
                            <p>Uni-Socks Groen</p>
                            <label for="quantity">Aantal:</label>
                            <input class="Aantal" type="number" name="quantity" value="<?php echo $quantity; ?>" min="1" max="99">
                            <p>Prijs: 12.50</p>
                            <button type="submit">Toepassen</button>
                        </div>
                    </form>
                </div>
                <div class="wwproduct1prijs">
                    <p>Prijs: €<?php echo number_format($total_price, 2, ',', '.'); ?></p>
                </div> 
                <div class="wwproduct2">
                    <img class="productimg" src="../content/Sunny_socks_uni_red.jpg" alt="Red Socks">
                    <p>Naam: Uni-Socks Rood</p>
                <form method="POST" action="wagen.php">
                <input type="hidden" name="id" value="2">
                <input type="hidden" name="name" value="Striped Green Socks">
                <input type="hidden" name="price" value="12.50">
                <label for="quantity">Aantal:</label>
                <input class="Aantal" type="number" name="quantity" value="1" min="1" max="99">
                </div>
                </form>
                </div>
                    <div class="wwproduct2prijs">
                        <p>Prijs: €12,50</p>
                    </div>
                <div class="wwproduct3">
                    <img src="../content/Sunny_socks_uni_yellow.jpg" alt="Yellow Socks">
                    <p>Naam: Uni-Socks Geel</p>
                <form method="POST" action="wagen.php">
                <input type="hidden" name="id" value="2">
                <input type="hidden" name="name" value="Striped Yellow Socks">
                <input type="hidden" name="price" value="12.50">
                <label for="quantity">Aantal:</label>
                <input class="Aantal" type="number" name="quantity" value="1" min="1" max="99">
                </div>
                </form>
                </div>
                    <div class="wwproduct3prijs">
                        <p>Prijs: €12,50</p>
                    </div>
                <div class="wwinfo">
                    <img src="../content/sunny_logos_slogan_blue.png" alt="sunny_logos_slogan_blue">
                </div>
                    <div class="totaalprijs">
                        <p>Prijs: €<?php echo number_format($total_price, 2, ',', '.'); ?></p>
                        <p>BTW: €<?php echo number_format($btw, 2, ',', '.'); ?></p>
                        <p>Service: €1,25</p>
                        <p><br></p>
                        <p>Totaal: €<?php echo number_format($total, 2, ',', '.'); ?></p>
                    </div>
        </section>
        <section class="winkelwagenbanner"></section>
    </main>

    <footer>
        <div class="footerLocaties">
            <img class="footerLogo" src="../content/sunny_logos-01.png" alt="Sunny Socks logo">
            <h2>Onze Locaties</h2>
            <address>
                <p>H.A Kooyerplein 40, 9713GV, Groningen</p>
                <p>Lange Smeestraat 29, 3511PT, Utrecht</p>
                <p>Leliestraat 21, 6211EA, Maastricht</p>
            </address>
        </div>
            
        <div>
            <h2>Info</h2>
            <ul>
                <li><a class="footerInfo" href="#">Algemene Voorwaarden</a></li>
                <li><a class="footerInfo" href="#">Privacy statement</a></li>
                <li><a class="footerInfo" href="#">FAQ</a></li>
                <li><a class="footerInfo" href="#">Contact</a></li>
            </ul>
        </div>

        <div class="footerSocial">
            <h2>Socials</h2>
            <div class="footerSocials">
                <div class="footerFlex">
                    <a href="https://www.facebook.com">
                        <img src="../content/facebook.png" alt="facebook">
                    </a>
                    <a class="footerInfo" href="https://www.facebook.com">Sunny Socks</a>
                </div>
                <div class="footerFlex">
                    <a href="https://www.instagram.com">
                        <img src="../content/instagram.png" alt="instagram">
                    </a>
                    <a class="footerInfo" href="https://www.instagram.com">@SunnySocks</a>
                </div>
                <div class="footerFlex">
                    <a href="https://www.linkedin.com">
                        <img src="../content/linkedin.png" alt="linkedin">
                    </a>
                    <a class="footerInfo" href="https://www.linkedin.com">SunnySocks</a>
                </div>
                <div class="footerFlex">
                    <a href="https://www.x.com">
                        <img src="../content/twitterx.png" alt="twitterx">
                    </a>
                    <a class="footerInfo" href="https://www.x.com">@SunnySocks</a>
                </div>
            </div>
        </div>

        <section class="footerCopyright">
            <p>Copyright © Sunny Socks</p>
        </section>
    </footer>
    
</body>
</html>