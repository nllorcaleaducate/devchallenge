# WordSearch
Ejempo del funcionamiento de la función que se debe implementar:

```php
require('WordSearch.php'); // <-- Implementa la función en WordSearch.php

$board = [
    ['a', 'b', 'c', 'd'],
    ['n', 'k', 'l', 'm'],
    ['o', 'f', 'z', 's']
];

// Una palabra se puede construir con letras de una celda secuencialmente adyacente,
// donde las celdas 'adyacentes' son las vecinas horizontal o verticalmente.
// Algunos tips para simplificar la solución:
// - Cuando una letra esta en un limite disminuye su número de vecinos, por ejemplo "d" tiene solo a "c" y "m" de vecinos.
// - Las letras del board no se pueden repetir, por ejemplo no puede haber una "a" en dos lugares del tablero.  
searchWord($board, 'abcd'); // true
searchWord($board, 'abcl'); // true
searchWord($board, 'szfkb'); // true

searchWord($board, 'abcz'); // false
searchWord($board, 'dmso'); // false
```
