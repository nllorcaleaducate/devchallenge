# Flatten
Ejempo del funcionamiento de la función que se debe implementar:

```php
require('Flatten.php'); // <-- Implementa la función en Flatten.php

// La función debe "aplanar" un array de cualquier profundidad
$arr = [1,2,3,[4, [5, [6, 7, 8]]]];
$arr = flatten($arr); // $arr = [1,2,3,4,5,6,7,8]
```