# Resumen con ejemplos [SASSDOC](http://sassdoc.com/)
### Realizado tomando como base el siguiente [manual](https://webkode.es/wp-content/uploads/docs/css/7_Manual_de_sass.pdf)


- **Comentarios**: Para que salga en el CSS /*Comentario*/, de una linea y no sale en CSS //. Si se va a usar [SASSDOC](http://sassdoc.com/) para generar documentación automáticamente se debe usar /// o //// para que los comentarios aparezcan en esa documentación generada por SASSDOC. Dentro de los comentarios de SassDoc podemos añadir anotaciones que nos van a permitir dotar de significado a ciertos elementos de la documentación, agrupar elementos o simplemente darles un formato diferente (entre muchas otras cosas). Estas anotaciones comienzan por el carácter @ y su lista completa es la [siguiente](http://sassdoc.com/annotations/).
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
- **Funciones**: Existen muchas funciones predefinidas además de poder definir las que queramos mediante la directiva @function. El contenido de una función puede estar formado por varias líneas, pero siempre debe acabar con una directiva de tipo @return para devolver el resultado de su ejecución.
  ~~~
    $grid-width: 40px;
    $gutter-width: 10px;

    @function grid-width($n) {
        @return $n * $grid-width + ($n - 1) * $gutter-width;
    }

    #sidebar { width: grid-width(5); }

    El código Sass anterior se compila de la siguiente manera:

    #sidebar {
        width: 240px;
    }


  ~~~
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
  * *@if*: 
  ~~~
  @if $colorFondo == rojo {
    background-color: #f00;
  } @else if $colorFondo == verde {
    background-color: #0f0;
  } @else if $colorFondo == azul {
    background-color: #00f;
  } @else {
    background-color: #000;
  }
  ~~~
  * *@for*: 
  ~~~
    @for $i from 1 through 3 {
    .item-#{$i} { width: 2em * $i; }
    }
  ~~~
  * *@each*: 
  ~~~
    @each $animal in puma, sea-slug, egret, salamander {
    .#{$animal}-icon {
    background-image: url('/images/#{$animal}.png');
    }
    }
  ~~~
  * *@each con asignación múltiple*: 
  ~~~
    @each $animal, $color, $cursor in (puma, black, default),
    (sea-slug, blue, pointer),
    (egret, white, move) {
    .#{$animal}-icon {
        background-image: url('/images/#{$animal}.png');
        border: 2px solid $color;
        cursor: $cursor;
        }
    }

    Como los mapas se consideran listas formadas por pares clave: 
    valor, también en este caso se puede utilizar la asignación múltiple. 
    
    @each $header, $size in (h1: 2em, h2: 1.5em, h3: 1.2em) {
        #{$header} {
            font-size: $size;
        }
    }
  ~~~
  * *@while*: 
  ~~~
    $i: 6;
    @while $i > 0 {
    .item-#{$i} { width: 2em * $i; }
    $i: $i - 2;
    }
  ~~~
- **mixin**: permiten definir estilos reutilizables en toda la hoja de estilos, admiten el uso de argumentos. Estos pueden estar formados por cualquier expresión y estarán disponibles en el interior del mixin en forma devariables, como si fueran funciones. Los mixins se incluyen en las hojas de estilos mediante la directiva @include. Pueden incluir en su interior otros mixins
  * *Ejemplo de mixin con argumento*:
  ~~~
    @mixin sexy-border($color, $width) {
      border: {
        color: $color;
        width: $width;
        style: dashed;
      }
    }  
  ~~~
- **Formato de salida**: Sass permite elegir entre cuatro formatos diferentes mediante la opción de configuración :style o mediante la opción --style de la consola de comandos. Son:
      * *:nested*: Este es el estilo por defecto de Sass, que indenta y anida todos los selectores y estilos para reflejar fielmente la estructura del archivo Sass original.
  ~~~
    #main {
        color: #fff;
        background-color: #000; }
        #main p {
            width: 10em; }
  ~~~
      * *:expanded*: Este estilo es más parecido al que utilizaría un diseñador/a al crear manualmente la hoja de estilos CSS. Cada propiedad y cada regla se muestran en una nueva línea, pero las reglas no se indentan de ninguna manera especial.
  ~~~
    #main {
        color: #fff;
        background-color: #000;
    }
    #main p {
        width: 10em; 
    }
  ~~~
  * *:compact*: Este estilo ocupa menos líneas que los estilos nested o expanded y prioriza los selectores por encima de las propiedades. De hecho, cada regla CSS solamente ocupa una línea, donde se definen todas las propiedades.
  ~~~
    #main { color: #fff; background-color: #000; }
    #main p { width: 10em; }
  ~~~
  * *:compressed*: Este estilo es el más conciso de todos porque no añade ningún espacio en blanco, salvo el que sea estrictamente necesario para separar los selectores. 
  ~~~
    #main{color:#fff;background-color:#000}#main p{width:10em}.huge{fontsize:10em;font-weight:bold;text-decoration:underline}
  ~~~
