<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sunny Socks</title>
    <link rel="stylesheet" href="../css/style.css" type="text/css">
    <link rel="stylesheet" href="../css/blogstyle.css" type="text/css">
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
                    <li class="menuMargin"><a class="headerMenu wit" href="../pages/home.php">Home</a></li>
                    <li class="menuMargin"><a class="headerMenu wit" href="../pages/overons.html">Over ons</a></li>
                    <li class="menuMargin"><a class="headerMenu wit active" href="../pages/blog.php">Blog</a></li>
                    <li class="menuMargin"><a class="headerMenu wit" href="../pages/collectie.html">Collectie</a></li>
                    <li class="menuMargin"><a class="headerMenu wit" href="../pages/contact.html">Contact</a></li>
                    <li><a href="../pages/Winkelwagen.php"><img class="fotoHeader" src="../content/Winkelwagen.png" alt="Winkelwagen"></a></li>
                </ul>
            </nav>
    </header>
            <main>
                <section class="sokken">
                    <img class="sokkenAfbeelding" src="../content/header-blog-sokken.png" alt="foto van sokken">  
                </section>
            <section class="grid">
                <aside class="populair">

                    <?php
                    	$colors=array('#E5FFE6', '#E5ECFF', '#FFE5E5', '#FEFFE5');
                        
                        $listItems = [
                            'Van Katoen Tot Teen: Het Verhaal Achter Onze Eco-Vriendelijke Sokken' => '../pages/van-katoen-tot-teen-het-verhaal-achter-onze-eco-vriendelijke-sokken.html',
                            'De Kracht van Gerecyclede Vezels: Duurzaamheid in Elke Stap' => '../pages/de-kracht-van-gerecyclede-vezels-duurzaamheid-in-elke-stap.html',
                            'De Unieke Ontwerpen van Sunny Socks: Waar Creativiteit en Comfort Samenkomen' => '../pages/de-unieke-ontwerpen-van-sunny-socks-waar-creativiteit-en-comfort-samenkomen.html',
                            'Van Sport tot Chic: Zo Style Je Sunny Socks voor Elke Gelegenheid' => '../pages/van-sport-tot-chic-zo-style-je-sunny-socks-voor-elke-gelegenheid.html'
                        ];
                    ?>
                    <h3>Populair:</h3>
                    <ul>
                        <?php
                            foreach ($listItems as $item => $url)
                            {
                                $color = $colors[array_rand($colors)];
                                echo "<a href='$url'><li style='background-color: $color;'><b>$item</b></li></a>";
                            }
                        ?>
                    </ul>
                </aside>
                <section class="artikelen">
                    <div class="blogPreview">
                        <a  href="../pages/5-redenen-waarom-duurzame-sokken-de-toekomst-zijn.html">
                            <img src="../content/blog-afbeelding-1.jpg" alt="preview blog 1">
                            <p><b>5 Redenen Waarom Duurzame Sokken de Toekomst Zijn</b></p>
                        </a>
                    </div>
                    <div class="blogPreview">
                        <a  href="../pages/hoe-sunny-socks-jouw-outfit-duurzamer-maakt.html">
                            <img src="../content/blog-afbeelding-2.webp" alt="preview blog 2">
                            <p><b>Hoe Sunny Socks Jouw Outfit Duurzamer Maakt</b></p>
                        </a>
                    </div>
                    <div class="blogPreview">
                        <a  href="../pages/waarom-comfortabele-sokken-je-productiviteit-verhogen.html">
                            <img src="../content/blog-afbeelding-3.jpg" alt="preview blog 3">
                            <p><b>Waarom Comfortabele Sokken Je Productiviteit Verhogen</b></p>
                        </a>
                    </div>
                    <div class="blogPreview">
                        <a  href="../pages/waarom-goede-sokken-het-verschil-maken-in-jouw-dag.html">
                            <img src="../content/blog-afbeelding-4.webp" alt="preview blog 4">
                            <p><b>Waarom Goede Sokken het Verschil Maken in Jouw Dag</b></p>
                        </a>
                    </div>
                    <div class="blogPreview">
                        <a  href="../pages/sunny-socks-comfort-en-stijl-voor-elke-gelegenheid.html">
                            <img src="../content/blog-afbeelding-5.png" alt="preview blog 5">
                            <p><b>Sunny Socks: Comfort en Stijl voor Elke Gelegenheid</b></p>
                        </a>
                    </div>
                    <div class="blogPreview">
                        <a  href="../pages/hoe-onze-sokken-bijdragen-aan-een-groener-leven.html">
                            <img src="../content/blog-afbeelding-11.png" alt="preview blog 6">
                            <p><b>Hoe Onze Sokken Bijdragen aan een Groener Leven</b></p>
                        </a>
                    </div>
                    <div class="blogPreview">
                        <a  href="../pages/wat-maakt-sunny-socks-zo-anders.html">
                            <img src="../content/blog-afbeelding-10.jpg" alt="preview blog 7">
                            <p><b>Wat Maakt Sunny Socks Zo Anders?</b></p>
                        </a>
                    </div>
                    <div class="blogPreview">
                        <a  href="../pages/sokken-die-meegaan-tips-voor-langdurig-comfort-en-kwaliteit.html">
                            <img src="../content/blog-afbeelding-8.jpg" alt="preview blog 8">
                            <p><b>Sokken die Meegaan: Tips voor Langdurig Comfort en Kwaliteit</b></p>
                        </a>
                    </div>
                    <div class="blogPreview">
                        <a  href="../pages/kleur-je-dag-de-perfecte-sunny-socks-voor-elk-seizoen.html">
                            <img src="../content/blog-afbeelding-9.webp" alt="preview blog 9">
                            <p><b>Kleur je Dag: De Perfecte Sunny Socks voor Elk Seizoen</b></p>
                        </a>
                    </div>
            </section>
        </section>
            <section class="pagination">
                    <a href="blog.php" class="active">1</a>
                    <a href="blog2.html">2</a>
                </section>
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