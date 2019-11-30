# Resumen con ejemplos SASS

- Comentarios: Para que salga en el CSS /*Comentario*/, de una linea y no sale en CSS //.
- Reglas anidadas: A los selectores anidados se les prefija automáticamente todos los selectores de los niveles superiores.
- Referenciando a los selectores padre: El carácter especial & siempre se reemplaza por el selector padre.
- Propiedades anidadas: define varias propiedades cuyos nombres aparecen estar agrupados de
forma lógica. Así por ejemplo con font: {family, size y weight}, las propiedades font-family, font-size y font-weight.
- Variables: $nombre_variable. 
  * Existen 6 tipos de datos (Números, Cadenas de texto, Colores, booleanos, null, Listas de valores, Pares formados por una clave y un valor separados por : (ejemplo
(key1: value1, key2: value2)))