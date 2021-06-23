<?php
/*
TIP: La funcion getPosInBoard retorna la posición de una letra en el tablero
La podés usar en la implementacion de searchWord. Recorda que una matriz en PHP se accede como $board[$fila][$columna]

Ej.
$board = [
    ['a', 'b', 'c', 'd'],
    ['n', 'k', 'l', 'm'],
    ['o', 'f', 'z', 's']
];

getPosInBoard('l',$board) retornará [1,2] >> O sea, fila 1, columna 2
*/

function getPosInBoard($letter,$board) {
    for ($i=0; $i < count($board) ; $i++) {
        for ($j=0; $j < count($board[$i]) ; $j++) {
            if($letter == $board[$i][$j]) {
                return array($i,$j);
            }
        }
    }
    return NULL;
}

function searchWord($board, $str): bool
{
    $posB = getPosInBoard($str[0], $board);

    if($posB == NULL){
        return false;
    }

    for ($i=1; $i<strlen($str); $i++) {
        $pos = getPosInBoard($str[$i], $board);

        if ($pos === NULL) {
            return false;
        }

        if(! ady($posB, $pos)) {
            return false;
        }

        $posB = $pos;
    }

    return true;
}

function ady($a, $b): bool
{
    if(abs($a[0]-$b[0]) == 1 && abs($a[1]-$b[1]) == 0) return true;

    if(abs($a[0]-$b[0]) == 0 && abs($a[1]-$b[1]) == 1) return true;

    return false;
}
