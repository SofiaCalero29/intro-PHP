<?php
$limite=11;
$n1= 0;
$n2 =1;
$suma =1;
echo "Fibonnacci \n";
for ($i=0; $i < $limite; $i++) { 
    echo "$suma\n";
    $suma = $n1 + $n2;
    $n1 = $n2;
    $n2 = $suma;
}
?>