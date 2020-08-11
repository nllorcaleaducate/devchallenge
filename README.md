# Leaducate Developer Challenge
Bienvenido al Challenge de Leaducate para Developers! Te pedimos por favor que sigas las instrucciones para completar todos los challenges. Los ejercicios requeridos son:

- flatten
- wordsearch
- isograms

En cada carpeta del repositoria podrás ver el README.me de cada ejercicio en donde se encuentra su enunciado.

## Instrucciones de instalación y método de entrega

1. Clonar repositorio
```
git clone https://{tuusuario}@github.com/nllorcaleaducate/devchallenge.git .
```
2. Crear un branch para realizar tu challenge, al nombre del branch ponele tu nombre.
```
git checkout -b {tunombre} master
```
3. En cada carpeta (flatten,wordsearch o isograms), tendrás un archivo para implementar la funcion solicitada y otro archivo con los tests que debe pasar tu función.
4. Para ejecutar los test, podes usar los phpunit que ya estan en el repositorio (phpunit-5.7.phar para php5.6/php5.7 y phpunit.phar php7 en adelante) dependiendo la versión de php que tengas instalada. Por ejemplo:
```
./phpunit-5.7.phar wordsearch/WordSearchTest.php
```
o
```
./phpunit.phar wordsearch/WordSearchTest.php
```
5. Cuando finalices los 3 ejercicios, hace commit de tus archivos y pushea tu branch.
```
git add flatten/Flatten.php
git add wordsearch/WordSearch.php
git add isograms/Isograms.php
git commit -m "Entrega de challenge {tunombre}"
git push origin {tunombre}
```
6. Muchas gracias!

