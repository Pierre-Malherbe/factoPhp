<?php
function Factoriel($n) {
 return $n > 1 ? $n * Factoriel($n-1):1;
}
 
echo "Liste des 16 premiers factoriels entiers:<BR>";
for($I=0;$I<=10000;$I++) {
 echo $I."! est ".Factoriel($I)."<BR>";
}
?>