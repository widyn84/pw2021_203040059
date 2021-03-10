<?php

$GLOBALS['varGlobal'] = 18; //variabel Global

function testvar()
{
    $varLokal = 1;
    echo "<p> test variabel didalam function.</p>";
    // mengakses variabel global dalam function
    echo "Variabel Global: " .$GLOBALS['varGlobal'];
    echo "<br>";
    echo "variabel lokal : $varLokal";
    echo "<br>"
}

testvar();

echo "<p>test variabel didalam function.<p>";
echo "Variabel global $varGlobal" ;
echo "<br>";
// mengakses variabel Lokal dalam function
echo "variabel lokal : $varLokal";
echo "<br>";
?>