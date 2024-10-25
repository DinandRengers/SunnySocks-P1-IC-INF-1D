<?php

$zoekterm = strtolower(filter_input(INPUT_POST, "zoeken"));

$rood = array("rood", "strepen", "classic stripes", "stripes", "rode sok", "rode sokken", "strepen rood");
$groen = array("groen", "uni color", "classic uni color", "uni", "groene sok", "groene sokken", "sok groen");

if(in_array($zoekterm, $rood))
{
    header("Location: ../pages/product_pagina_strepren_rood.html");
}
elseif(in_array($zoekterm, $groen))
{
    header("Location: ../pages/product_pagina_groen.html");
}
else
{
    header("Location: ../pages/home.php");
}

?>