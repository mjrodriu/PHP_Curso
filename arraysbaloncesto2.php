<?php

//CONTINUACIÓN DEL EJERCICIO 1 QUE ESTA VEZ RECORRE LOS ARRAYS Y VISUALIZA LOS PUNTOS QUE HAN OBTENIDO LOS EQUIPOS 
//EN CADA PERIODO DE TIEMPO Y QUE PUNTOS LLEVA CADA UNO EN ESTOS.

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

// 2. Quiero saber como han quedado en cada cuarto.

$contador1 = 0;
$contador2 = 0;
$punto1 = 1;
$punto2 = 2;
$punto3 = 3;

$cuarto = 1;
foreach ($actions as $tiempo => $actiontime) {

    echo "Cuarto $tiempo\n";

    $contadorCuarto1 = 0;
    $contadorCuarto2 = 0;

    foreach ($actiontime as $puntos) {
        if ($puntos["nameTeam"] === "Bulls") {
            if ($puntos["type"] === "PT1") {
                $contadorCuarto1 += $punto1;
            } elseif ($puntos["type"] === "PT2") {
                $contadorCuarto1 += $punto2;
            } elseif ($puntos["type"] === "PT3") {
                $contadorCuarto1 += $punto3;
            }
        }

        if ($puntos["nameTeam"] === "Lakers") {
            if ($puntos["type"] === "PT1") {
                $contadorCuarto2 += $punto1;
            } elseif ($puntos["type"] === "PT2") {
                $contadorCuarto2 += $punto2;
            } elseif ($puntos["type"] === "PT3") {
                $contadorCuarto2 += $punto3;
            }
        }
    }

    $contador1 += $contadorCuarto1;
    $contador2 += $contadorCuarto2;

    echo "Bulls: $contador1\n";
    echo "Lakers: $contador2\n";
    echo "\n";
}

echo "Puntos totales Bulls: $contador1\n";
echo "Puntos totales Lakers: $contador2\n";

if ($contador1 > $contador2) {
    echo "Ganan Bulls!";
} elseif ($contador1 < $contador2) {
    echo "Ganan Lakers!";
} else {
    echo "¡EMPATE!";
}







