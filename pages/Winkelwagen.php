<?php
    // PHP functie "aantal producten berekenen".

     // default prijs van het product
    $price = 12.50;

    // Array voor de product quantity's
    $quantity = [
        'quantity1' => isset($_POST['quantity1']) ? (int)$_POST['quantity1'] : 1,
        'quantity2' => isset($_POST['quantity2']) ? (int)$_POST['quantity2'] : 1,
        'quantity3' => isset($_POST['quantity3']) ? (int)$_POST['quantity3'] : 1 
    ];

    // Haalt de data van $quantity uit elkaar en maakt er 3 variabelen van
    $quantity1 = (int)$quantity['quantity1'];
    $quantity2 = (int)$quantity['quantity2'];
    $quantity3 = (int)$quantity['quantity3'];

    // Berekeningen voor ieder productprijs
    $price1 = ($price * $quantity1);
    $price2 = ($price * $quantity2);
    $price3 = ($price * $quantity3);

    // Pakt alle data van de array $quantity en voegt het bij elkaar
    $totale_quantity = array_sum($quantity);
    
    // Berekeningen van de btw/prijzen
    $total_price = $price * $totale_quantity; // totale prijs berekenen (Zonder BTW en Servicekosten)
    $btw = $price * $totale_quantity  / 121 * 21; // BTW berekenen "21%"
    $total = $price * $totale_quantity + $btw + 1.25; // Totale prijs berekenen (Met BTW en Servicekosten)
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
                <form action="../functies/search.php" method="POST">
                    <input type="text" name="zoeken" id="Zoeken" placeholder="Zoeken naar artikelen" autocomplete="off">
                    <input type="image" src="../content/zoekLogo.png" alt="submit">
                </form>
            </div>
            <nav class="menu">
                <ul>
                    <li class="menuMargin"><a class="headerMenu wit" href="../pages/index.php">Home</a></li>
                    <li class="menuMargin"><a class="headerMenu wit" href="../pages/overons.html">Over ons</a></li>
                    <li class="menuMargin"><a class="headerMenu wit" href="../pages/blog.php">Blog</a></li>
                    <li class="menuMargin"><a class="headerMenu wit" href="../pages/collectie.html">Collectie</a></li>
                    <li class="menuMargin"><a class="headerMenu wit" href="../pages/contact.html">Contact</a></li>
                    <li><a href="../pages/Winkelwagen.php"><img class="fotoHeader" src="../content/Winkelwagen.png" alt="Winkelwagen"></a></li>
                </ul>
            </nav>
    </header>
    <main class="contentwinkelwagen">
        <section class="winkelwagen">
        <h2>Mijn winkelwagen:</h2>
            <form class="formwinkelwagen" method="POST" action="Winkelwagen.php">
                <div class="wwproduct1">
                    <img class="cancelbutton" src="../content/cancel_icon.png" alt="cancel_icon">
                    <img class="productimg" src="../content/Sunny_socks_uni_green.jpg" alt="Green Socks">
                        <div class="pinfo">
                            <p>Sunny Socks</p>
                            <p>Uni Sokken: GROEN</p>
                            <label for="quantity">Aantal:</label>
                            <input class="Aantal" type="number" name="quantity1" value="<?php echo $quantity['quantity1']; ?>" min="0" max="99">
                            <p>Prijs:<?php echo ' €', number_format ($price, 2, ',', '.'); ?></p>
                        </div>
                </div>
                <div class="wwproduct1prijs">
                    <p>Prijs: €<?php echo number_format($price1, 2, ',', '.'); ?></p>
                </div> 
                <div class="wwproduct2">
                    <img class="cancelbutton" src="../content/cancel_icon.png" alt="cancel_icon">
                    <img class="productimg" src="../content/Sunny_socks_uni_red.jpg" alt="Red Socks">
                        <div class="pinfo">
                            <p>Sunny Socks</p>
                            <p>Uni Sokken: ROOD</p>
                            <label for="quantity">Aantal:</label>
                            <input class="Aantal" type="number" name="quantity2" value="<?php echo $quantity['quantity2']; ?>" min="0" max="99">
                            <p>Prijs:<?php echo ' €', number_format ($price, 2, ',', '.'); ?></p>
                        </div>
                </div>
                    <div class="wwproduct2prijs">
                        <p>Prijs: €<?php echo number_format($price2, 2, ',', '.'); ?></p>
                    </div>
                <div class="wwproduct3">
                    <img class="cancelbutton" src="../content/cancel_icon.png" alt="cancel_icon">
                    <img class="productimg" src="../content/Sunny_socks_yellow.jpg" alt="Yellow Striped Socks">
                        <div class="pinfo">
                            <p>Sunny Socks</p>
                            <p>Uni-gestreepd: GEEL</p>
                            <label for="quantity">Aantal:</label>
                            <input class="Aantal" type="number" name="quantity3" value="<?php echo $quantity['quantity3']; ?>" min="0" max="99">
                            <p>Prijs:<?php echo ' €', number_format ($price, 2, ',', '.'); ?></p>
                        </div>
                </div>
                    <div class="wwproduct3prijs">
                        <p>Prijs: €<?php echo number_format($price3, 2, ',', '.'); ?></p>
                    </div>
                    <div class="submitbutton">
                        <button type="submit">Toepassen</button>
                    </div>
                    <div class="borderleft"></div>
                <div class="totaalprijs">
                        <ul>
                            <li><p>Prijs: €<?php echo number_format($total_price, 2, ',', '.'); ?></p></li>
                            <li><p>BTW: €<?php echo number_format($btw, 2, ',', '.'); ?></p></li>
                            <li><p>Service: €1,25</p></li>
                            <hr>
                            <div class="wwtotaal">
                            <li><p>Totaal: €<?php echo number_format($total, 2, ',', '.'); ?></p></li>
                            </div>
                        </ul>
                </div>
                <div class="wwinfo">
                    <img src="../content/sunny_logos_slogan_blue.png" alt="sunny_logos_slogan_blue">
                </div>
            </form>
        </section>
        <section class="winkelwagenbanner"></section>
    </main>

    <footer class="wit">
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
                    <li><a class="footerInfo wit" href="#">Algemene Voorwaarden</a></li>
                    <li><a class="footerInfo wit" href="#">Privacy statement</a></li>
                    <li><a class="footerInfo wit" href="#">FAQ</a></li>
                    <li><a class="footerInfo wit" href="#">Contact</a></li>
                </ul>
            </div>

            <div class="footerSocial">
                <h2>Socials</h2>
                <div class="footerSocials">
                    <div class="footerFlex">
                        <a href="https://www.facebook.com">
                            <img src="../content/facebook.png" alt="facebook">
                        </a>
                        <a class="footerInfo wit" href="https://www.facebook.com">Sunny Socks</a>
                    </div>
                    <div class="footerFlex">
                        <a href="https://www.instagram.com">
                            <img src="../content/instagram.png" alt="instagram">
                        </a>
                        <a class="footerInfo wit" href="https://www.instagram.com">@SunnySocks</a>
                    </div>
                    <div class="footerFlex">
                        <a href="https://www.linkedin.com">
                            <img src="../content/linkedin.png" alt="linkedin">
                        </a>
                        <a class="footerInfo wit" href="https://www.linkedin.com">SunnySocks</a>
                    </div>
                    <div class="footerFlex">
                        <a href="https://www.x.com">
                            <img src="../content/twitterx.png" alt="twitterx">
                        </a>
                        <a class="footerInfo wit" href="https://www.x.com">@SunnySocks</a>
                    </div>
                </div>
            </div>

            <section class="footerCopyright">
                <p>Copyright © Sunny Socks</p>
            </section>
        </footer>
</body>
</html>