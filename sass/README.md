# Resumen con ejemplos SASS

- Comentarios: Para que salga en el CSS /*Comentario*/, de una linea y no sale en CSS //.
- Reglas anidadas: A los selectores anidados se les prefija automáticamente todos los selectores de los niveles superiores.
- Referenciando a los selectores padre: El carácter especial & siempre se reemplaza por el selector padre.
- Propiedades anidadas: define varias propiedades cuyos nombres aparecen estar agrupados de
forma lógica. Así por ejemplo con font: {family, size y weight}, defines las propiedades font-family, font-size y font-weight.
- Variables: $nombre_variable. Existen 6 tipos de datos: 
  * Números: ejemplos 1.2, 13, 10px.
  * Cadenas de texto:  dos tipos de cadenas de texto: las que tienen comillas (dobles o simples) como por ejemplo "Lucida Grande" o 'http://sass-lang.com'; y las que no tienen comillas, como por ejemplo sans-serif o bold.
  * Colores:
  * Booleanos: true y false.
  * Nulo: null.
  * Listas de valores: son  una colección de valores separados por comas o espacios en blanco. Se utilizan en las propiedades CSS como margin: 10px 15px 0 0. Su utilidad se aplica mediantes funciones (nth(), join(), append(), etc)
  * Mapas: Pares formados por una clave y un valor separados por ejemplo - $map: (clave1: valor1, clave2: valor2, clave3: valor3);)
- Operadores