<?php
$weapons = ['fists', 'whip', 'gun'];

$opponentWeapon = $weapons[rand(0,2)]; // Cela permet de choisir une arme de manière aléatoire.

echo "L'arme de l'ennemi est : " . $opponentWeapon . "<br>" . PHP_EOL;

if ($opponentWeapon = $weapons[1]){

    $indyWeapon = $weapons[0];
    
}
   elseif ($opponentWeapon = $weapons[0]){

    $indyWeapon = $weapons[2];
    
   }
   else {

    $indyWeapon = $weapons[1];
    
   }
// TODO

      
echo "L'arme d'Indiana Jones est : " . $indyWeapon;
$indyWeapon = '???';


?>