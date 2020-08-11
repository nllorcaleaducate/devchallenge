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

// Debe retornar true o false
function searchWord($board, $str) {
}
