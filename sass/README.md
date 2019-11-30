# Resumen con ejemplos SASS

- **Comentarios**: Para que salga en el CSS /*Comentario*/, de una linea y no sale en CSS //.
- **Reglas anidadas**: A los selectores anidados se les prefija automáticamente todos los selectores de los niveles superiores.
- Referenciando a los selectores padre: El carácter especial **&** siempre se reemplaza por el selector padre.
- **Propiedades anidadas**: define varias propiedades cuyos nombres aparecen estar agrupados de
forma lógica. Así por ejemplo con font: {family, size y weight}, defines las propiedades font-family, font-size y font-weight.
- **Variables**: $nombre_variable. Existen 6 tipos de datos: 
  * *Variables con valores por defecto: poner un !default para que no pueda ser modificada.*
  * *Números*: ejemplos 1.2, 13, 10px.
  * *Cadenas de texto*:  dos tipos de cadenas de texto: las que tienen comillas (dobles o simples) como por ejemplo "Lucida Grande" o 'http://sass-lang.com'; y las que no tienen comillas, como por ejemplo sans-serif o bold.
  * *Colores*:
  * *Booleanos*: true y false.
  * Nulo: *null*.
  * *Listas de valores*: son  una colección de valores separados por comas o espacios en blanco. Se utilizan en las propiedades CSS como margin: 10px 15px 0 0. Su utilidad se aplica mediantes funciones (nth(), join(), append(), etc)
  * *Mapas*: Pares formados por una clave y un valor separados por ejemplo - $map: (clave1: valor1, clave2: valor2, clave3: valor3);)
- **Operadores**: Todos los tipos de datos soportan el operador de igualdad (== y !=) para comprobar si dos valores son iguales o distintos. 
  * *Aritméticos básicos*: suma +, resta -,
multiplicación *, división / y módulo %.
  * *Operadores para cadenas de texto*: + concatenar. Dentro #{ } para realizar operaciones e incluirlas en la cadena. Esta característica se llama "interpolación de cadenas de texto".
  * *Operadores para colores*: se pueden realizar operaciones artiméticas y en ese caso se aplica por cada componente del color.
  * Operadores para booleanos:  *and, or y not*.
  * *Operadores para listas*: No hay, se manipulan mediante las funciones.
- **Funciones**: Existen muchas funciones predefinidas.
- **Interpolación**: llamadas y uso del valor de las variables #{$variable} en los nombres de los selectores, en las propiedades, en los valores de las propiedades.
- **@import**:  importar archivos SCSS y Sass. Si no se indica la extensión busca un archivo con ese nombre y con las extensiones .scss o .sass. Ejemplo @import "foo.scss"; importa el archivo foo.scss. Permite importar varios archivos separados por ",". Normalmente las reglas @import se colocan en el primer nivel jerárquico de la
hoja de estilos:
  * *partials*: Si quieres importar un archivo SCSS o Sass pero no quieres que se compile como archivo CSS, utiliza un guión bajo como primer carácter del nombre del archivo.  Así por ejemplo, si creas un archivo llamado _colors.scss, entonces no se generará un archivo _colors.css. Sin embargo, podrás utilizarlo en tus hojas de estilos con la regla @import "colors";, que importará el archivo _colors.scss.
  * *Anidando relgas @import*: Se pueden anidar.
- **@media**: Las reglas @media en Sass funcionan prácticamente igual que en CSS, con una salvedad: se pueden anidar dentro de las reglas CSS. Si incluyes una regla @media dentro de una regla CSS, se aplicará a todos los selectores que se encuentren
desde esa regla hasta el primer nivel de la hoja de estilos. 
- **@extend**: Permite que un selector herede/extienda todos los estilos de otro selector. .seriousError { @extend .error;  border-width: 3px;} . Se pueden usar varias veces dentro del mismo selector
- **@at-root**: hace que se generen en la raíz de la hoja de estilos en vez de anidarse en sus selectores.
- **@debug**: muestra por la consola el valor de la expresión que contiene.
- **@warn**: muestra el valor de una expresión en forma de mensaje de error
- **Directivas de control y expresiones**: 
  * *if()*: 
  @if $colorFondo == rojo {
    background-color: #f00;
  } @else if $colorFondo == verde {
    background-color: #0f0;
  } @else if $colorFondo == azul {
    background-color: #00f;
  } @else {
    background-color: #000;
  }
