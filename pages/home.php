<?php
    $products =[      
        [
            "name" => "Blauw Gestreepte Sokken",
            "link" => "#",
            "img" => "../content\catalogus_sokken_stripes_blue.png",
            "alt" => "blue_striped_socks",
            "color" => "black",
            "price" => "€9,99",
        ],

        [
            "name" => "Groen Gestreepte Sokken",
            "link" => "#",
            "img" => "../content\catalogus_sokken_stripes_green.png",
            "alt" => "green_striped_socks",
            "color" => "white",
            "price" => "€9,99",
        ],

        [
            "name" => "Roze Gestreepte Sokken",
            "link" => "#",
            "img" => "../content\catalogus_sokken_stripes_pink.png",
            "alt" => "pink_striped_socks",
            "color" => "black",
            "price" => "€9,99",
        ],

        [
            "name" => " Rood Gestreepte Sokken",
            "link" => "#",
            "img" => "../content\catalogus_sokken_stripes_red.png",
            "alt" => "Red_striped_socks",
            "color" => "white",
            "price" => "€9,99",
        ],

        [
            "name" => "Geel Gestreepte Sokken",
            "link" => "#",
            "img" => "../content\catalogus_sokken_stripes_yellow.png",
            "alt" => "yellow_striped_socks",
            "color" => "black",
            "price" => "€9,99",
        ],

        [
            "name" => "Blauw Uni Sokken",
            "link" => "#",
            "img" => "../content\catalogus_sokken_uni_blue.png",
            "alt" => "blue_uni_socks",
            "color" => "white",
            "price" => "€9,99",
        ],

        [
            "name" => "Groen Uni Sokken",
            "link" => "#",
            "img" => "../content\catalogus_sokken_uni_green.png",
            "alt" => "green_uni_socks",
            "color" => "black",
            "price" => "€9,99",
        ],

        [
            "name" => "Roze Uni Sokken",
            "link" => "#",
            "img" => "../content\catalogus_sokken_uni_pink.png",
            "alt" => "roze_uni_socks",
            "color" => "white",
            "price" => "€9,99",
        ],

        [
            "name" => "Rood Uni Sokken",
            "link" => "#",
            "img" => "../content\catalogus_sokken_uni_red.png",
            "alt" => "red_uni_socks",
            "color" => "black",
            "price" => "€9,99",
        ],

        [
            "name" => "Geel Uni Sokken",
            "link" => "#",
            "img" => "../content\catalogus_sokken_uni_yellow.png",
            "alt" => "yellow_uni_socks",
            "color" => "white",
            "price" => "€9,99",
        ],

        [
            "name" => "Personaliseer",
            "link" => "#",
            "img" => "../content/dierensokken.png",
            "alt" => "dierensokken",
            "color" => "black",
            "price" => "€9,99",
        ],

        [
            "name" => "Personaliseer",
            "link" => "#",
            "img" => "../content/bloemensokken.png",
            "alt" => "bloemensokken",
            "color" => "white",
            "price" => "€9,99",
        ],

        [
            "name" => "Personaliseer",
            "link" => "#",
            "img" => "../content/yourTextHereSocks.jpg",
            "alt" => "yourTextHereSocks",
            "color" => "black",
            "price" => "€9,99",
        ],

        [
            "name" => "Personaliseer",
            "link" => "#",
            "img" => "../content/patroonsokken.png",
            "alt" => "patroonsokken",
            "color" => "white",
            "price" => "€9,99",
        ]

        ];
        

    function retrieveProductCards ($products)
    {            
        $productCards = [];    

        for ($i = 0; $i < 4; $i++) 
        {
            $randomProduct = $products[array_rand($products)];

            if (in_array($randomProduct, $productCards))
            {
                $i--;
                continue;
            }
            
            $productCards[] = $randomProduct;
        }
            
        return $productCards;

    }


    function displayProductCard ($products)
    {
        echo "<a href='{$products['link']}' class='productCard'>
                        <div class='card {$products['color']}'>
                            <img src='{$products['img']}' alt='{$products['alt']}'>
                            <h3>{$products['name']}</h3>
                            <p>{$products['price']}</p>
                        </div>
                    </a>";
    }


    $productCards = retrieveProductCards($products);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/homepaginastyle.css" type="text/css">
    <link rel="stylesheet" href="../css/style.css" type="text/css">
    <title>Homepagina</title>
</head>
<body> 
    <header>
        <img src="../content/sunny_logos-01.png" alt="Sunny Socks logo">
        <div class="zoeken">
            <p>Zoeken</p>
            <img src="../content/zoekLogo.png" alt="Zoeken">
        </div>
        <div class="menu">
            <a class="headerMenu" href="../index.html">Home</a>
            <a class="headerMenu" href="../pages/overons.html">Over ons</a>
            <a class="headerMenu" href="#">Blog</a>
            <a class="headerMenu" href="#">Collectie</a>
            <a class="headerMenu" href="#">Contact</a>
            <a href="#"><img class="fotoHeader" src="../content/Winkelwagen.png" alt="Winkelwagen"></a>
        </div>
    </header>

    <main>
<!--         banner -->
        <div class="banner-img">
            <div class="banner-text">
                <h1>Sunny Socks</h1>
                <p>"The brightside of socks"</p>
                <a href="#" class="button">Collectie</a>
            </div>
        </div>

<!--          Nu verkrijgbaar -->
        <a href="#" class="productCard white">   
            <div class="center">
                <h1>NU VERKRIJGBAAR, DE NIEUWE UNI KLEUREN</h1>
            </div>
        </a>
            <div class="sock-container">
                    <?php
                             foreach ($productCards as $product) {
                                displayProductCard($product);
                             }
                    ?>
            </div>

<!--         3 merkwaarden -->
        <div class="sunny-container">
            <div class="grid-item">
                <img src="../content/smileLogo.png" alt="smile.png">
            </div>   

            <div class="merkwaarden">
                <h1>De 3 merkwaarden van Sunny</h1>
                <img src="../content/sunLogo.png" alt="sun.png">
            </div>

            <div class="grid-item">
                <img src="../content/kleurrijkLogo.png" alt="kleurrijk.png">
            </div>

            <div class="grid-item positiviteit">
                <h1>Postiviteit</h1>
                <p>
                    Positiviteit maakt deel uit van ons DNA. Sunny kijkt graag naar de zonnige kant. 
                    Elk probleem is een kansom tot een oplossing te komen.
                </p>
            </div>
            <div class="grid-item gunstig"> 
                <h1>Gunstig</h1>
                <p>
                    Wij houden van win-winsituaties. Wanneer we produceren en onze sokken verkopen, is het gunstig voor alle betrokkenen.
                    De verkoper heeft een leuke baan. De grondstoffen worden op een dusdanige manier verkregen dat het de mensen en aarde niet schaadt. De productie gebeurt met de
                    milieuvriendelijk en met een eerlijk loon
                    voor de mensen die in de fabrieken werken. De winkels
                    die onze sokken verkopen, verdienen een eerlijke winst. En als laatste maar
                    niet in de laatste plaats: de klant krijgt sokken van hoge kwaliteit
                    en een eerlijke prijs.
                </p>
            </div>
            <div class="grid-item kleurrijk"> 
                <h1>Kleurrijk</h1>
                <p>
                    Wij voegen graag wat kleur toe aan een van de mooistealledaagse momenten van het leven
                </p>
            </div>
        </div>
    </main>

    <footer>
        <div class="footerLocaties">
            <img class="footerLogo" src="../content/sunny_logos-01.png" alt="Sunny Socks logo">
            <h2>Onze Locaties</h2>
            <p>H.A Kooyerplein 40, 9713GV, Groningen</p>
            <p>Lange Smeestraat 29, 3511PT, Utrecht</p>
            <p>Leliestraat 21, 6211EA, Maastricht</p>
        </div>
            
        <div class="footerInfo">
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
                    <a href="https://www.facebook.com"><img src="../content/facebook.png" alt="facebook"></a>
                    <p>Sunny Socks</p>
                </div>
                <div class="footerFlex">
                    <a href="https://www.instagram.com"><img src="../content/instagram.png" alt="instagram"></a>
                    <p>@SunnySocks</p>
                </div>
                <div class="footerFlex">
                    <a href="https://www.linkedin.com"><img src="../content/linkedin.png" alt="linkedin"></a>
                    <p>SunnySocks</p>
                </div>
                <div class="footerFlex">
                    <a href="https://www.x.com"><img src="../content/twitterx.png" alt="twitterx"></a>
                    <p>@SunnySocks</p>
                </div>
            </div>
        </div>

        <section class="footerCopyright">
            <p>Copyright © Sunny Socks</p>
        </section>
    </footer>
    
</body>
</html>