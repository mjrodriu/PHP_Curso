<?php

// PT1 shot1 
// PT2 shot2
// PT3 shot3
// ORE Ofensive Rebound 
// DRE Defensive Rebound
// FLT Falta

$actions = [
    "1:04" => [
        [ "type" => "PT1", "nameTeam" => "Bulls", "namePlayer" => "Jordan"   ],
        [ "type" => "PT1", "nameTeam" => "Bulls", "namePlayer" => "Jordan"   ]
    ],
    "1:14" => [
        [ "type" => "PT2", "nameTeam" => "Bulls", "namePlayer" => "Pippen"   ],
        [ "type" => "FLT", "nameTeam" => "Bulls", "namePlayer" => "Jordan"   ] 
    ],
    "21:04" => [
        [ "type" => "ORE", "nameTeam" => "Lakers", "namePlayer" => "Magic"   ],
        [ "type" => "PT3", "nameTeam" => "Lakers", "namePlayer" => "Magic"   ]
    ],
    "28:04" => [
        [ "type" => "ORE", "nameTeam" => "Lakers", "namePlayer" => "Magic"   ],
        [ "type" => "PT3", "nameTeam" => "Lakers", "namePlayer" => "Magic"   ]
    ],
    "41:04" => [
        [ "type" => "ORE", "nameTeam" => "Bulls", "namePlayer" => "Jordan"   ],
        [ "type" => "PT2", "nameTeam" => "Bulls", "namePlayer" => "Pippen"   ],
        [ "type" => "DRE", "nameTeam" => "Lakers", "namePlayer" => "Magic"   ]
    ]
];

// 1. Quiero saber como han quedado.

$contador1 = 0;
$contador2 = 0;
$punto1 = 1;
$punto2 = 2;
$punto3 = 3;

foreach ($actions as $tiempo => $actiontime) {
     echo "$tiempo\n";

  foreach ($actiontime as $shotType => $puntos) {
       
        echo $shotType . "\n"; 
        echo $puntos["nameTeam"] . " ". $puntos["type"] . "\n"; 
 

        if ($puntos[ "nameTeam" ] === "Bulls") {
            if ($puntos[ "type" ] === "PT1") {
                $contador1 += $punto1;
            }elseif($puntos[ "type" ] === "PT2"){
                $contador1 += $punto2;
            }elseif($puntos[ "type" ] === "PT3"){
                $contador1 += $punto3;
            }
    
        }
        if ($puntos[ "nameTeam" ] === "Lakers") {
            if ($puntos[ "type" ] === "PT1") {
                $contador2 += $punto1;
            }elseif($puntos[ "type" ] === "PT2"){
                $contador2 += $punto2;
            }elseif($puntos[ "type" ] === "PT3"){
                $contador2 += $punto3;
            }
    
        }
  } 
 }

 echo "Pnts Bulls: ". $contador1 ."\n";
 echo "Pnts Lakers: ". $contador2 ."\n";

 if ($contador1 > $contador2) {
    echo "Ganan Bulls!";
} elseif ($contador1 < $contador2) {
    echo "Ganan Lakers!";
} else {
    echo "¡EMPATE!";
}

/*      foreach ($actiontime as $puntoscuartos => $puntitos) {
        echo $puntoscuartos . "\n";
     } */
     /* var_dump( $actiontime ); */
     /* echo "\n";  */
     //echo $action["shot1"][ "name" ] . "\n";
       
 /*     echo "{$puntos[ "type" ]}";
        echo "\n"; 
        echo "{$puntos[ "nameTeam" ]}";
        echo "\n";  */