<?php

$zoekterm = filter_input(INPUT_POST, "zoeken");

// zoek termen hier in de array

$collectie = array("collectie");
$overOns = array("over ons", "geschiedenis");
$blog = array("blog");
$contact = array("contact");
$winkelwagen = array("winkelwagen");
$startpagina = array("startpagina", "home");

// zoekfunctie die kijkt in de array

if(in_array($zoekterm, $collectie))
{
    header("Location: pages/collectie.html");
}
elseif(in_array($zoekterm, $overOns))
{
    header("Location: pages/overons.html");
}
elseif(in_array($zoekterm, $blog))
{
    header("Location: pages/blog.html");
}
elseif(in_array($zoekterm, $contact))
{
    header("Location: pages/contact.html");
}
elseif(in_array($zoekterm, $winkelwagen))
{
    header("Location: pages/winkelwagen.html");
}
elseif(in_array($zoekterm, $startpagina))
{
    header("Location: index.html");
}
else
{
    header("Location: index.html");
}

?>