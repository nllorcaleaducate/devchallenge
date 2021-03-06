# Leaducate Developer Challenge
Bienvenido al Challenge de Leaducate para Developers! Te pedimos por favor que sigas las instrucciones para completar todos los challenges. Los ejercicios requeridos son:

- account [Ver enunciado](account/)
- wordsearch [Ver enunciado](wordsearch/)
- musicstore [Ver enunciado](musicstore/)

En cada carpeta del repositorio podrás ver el README.me de cada ejercicio en donde se encuentra su enunciado.

## Instrucciones de instalación y método de entrega

1. Clonar repositorio
```
mkdir challenge
cd challenge
git clone https://{tuusuario}@github.com/nllorcaleaducate/devchallenge.git .
```
2. Crear un branch para realizar tu challenge, al nombre del branch ponele tu nombre.
```
git checkout -b {tunombre} master
```
3. En cada carpeta (account, wordsearch o musicstore), tendrás un archivo para implementar la solución solicitada y otro archivo con los tests que debe pasar tu solución.
4. Para ejecutar los test, podes usar los phpunit que ya estan en el repositorio (phpunit-5.7.phar para php5.6/php5.7 y phpunit.phar php7 en adelante) dependiendo la versión de php que tengas instalada. Por ejemplo:
```
./phpunit-5.7.phar account/AccountTest.php
./phpunit-5.7.phar wordsearch/WordSearchTest.php
./phpunit-5.7.phar musicstore/MusicStoreTest.php
```
o
```
./phpunit.phar account/AccountTest.php
./phpunit.phar wordsearch/WordSearchTest.php
./phpunit.phar musicstore/MusicStoreTest.php
```
o si tenes problemas con PHPUnit podés correr los test alternativos
```
php account/AccountTestAlt.php
php wordsearch/WordSearchTestAlt.php
```

5. Cuando finalices los 3 ejercicios, hace commit de tus archivos y pushea tu branch.
```
git add account/Account.php
git add wordsearch/WordSearch.php
git add musicstore/MusicStore.php
git commit -m "Entrega de challenge {tunombre}"
git push origin {tunombre}
``` 
6. Muchas gracias!

