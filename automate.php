<?php

echo "Veuillez saisir un nombre";
$handle = fopen ("php://stdin","r");
$nb = fgets($handle);

if(!is_numeric(trim($nb))){
    echo "Not numeric!\n";
    exit;
}
else{
    $tabRandom = array();
    $ok ="false";

    for ($i=0; $i < 20; $i++) { 
        
        $tabRandom[] = rand(0,100);
    }

    foreach ($tabRandom as $key => $oneRandom ) {
        for ($j = 0; $j < 20; $j++) {
            // On s'assure que qu'on est pas sur le dernier élément du tableau
            if ($j != 19 && $key != 19) {
                // on a pas à faire au meme chiffre et on ne re-calcule pas une opération déjà effectué
                if ($key != $j+1  && $key < $j+1) {
                    if ($nb == $oneRandom + $tabRandom[$j+1]) {
                        $ok = "true";
                        break 2;
                    }
                }
            }
        }
    }

    echo "RESULTAT =". $ok;
}
echo "\n";
echo "Merci \n";