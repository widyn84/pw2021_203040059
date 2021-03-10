<?php

function varStatic() {
    static $i = 1; //Mendeklarasikan variabel static
    echo $x;
    $x++;
    echo "</br>";
}

varStatic(); //Memanggil function varStatic
varStatic();
varStatic();
?>