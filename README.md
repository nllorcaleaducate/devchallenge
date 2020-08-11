# Leaducate Developer Challenge
Bienvenido al Challenge de Leaducate para Developers! Te pedimos por favor que sigas las instrucciones para completar todos los challenges. Los ejercicios requeridos son:

- flatten
- wordsearch
- isograms

En cada carpeta del repositoria podrás ver el README.me de cada ejercicio en donde se encuentra su enunciado.

## Instrucciones de instalación y método de entrega

1. Clonar repositorio
```
git clone https://{yourusername}@github.com/nllorcaleaducate/devchallenge.git .
```
2. Crear un branch para realizar tu challenge, al nombre del branch ponele tu nombre.
```
git checkout -b {yourname} master
```
3. En cada carpeta (flatten,wordsearch o isograms), tendrás un archivo para implementar la funcion solicitada y otro archivo con los tests que debe pasar tu función.
4. Para ejecutar los test, podes usar los phpunit que ya estan en el repositorio (phpunit-5.7.phar para php5.6 y phpunit.phar php7 en adelante) dependiendo la versión de php que tengas instalada. Por ejemplo:
```
./phpunit-5.7.phar wordsearch/WordSearchTest.php
```
