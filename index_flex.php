<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="index.css">
<!-- <link rel="stylesheet" href="index_animaciones.css"> -->
</head>
  <body>
 <header>
         <h1><a href="http://iesalixar.ddns.net:9100">Servidor web Dise&ntilde;o de Interfaces (DAW2) - IES ALIXAR</a>
        </h1>
        <h2>==> XXX Directorio de Pedro ==> <?php echo getcwd();?></h2>
        <div id="hora">
                Hora servidor: <?php
                echo date('h:m:s');                
                ?>
                <br>
                Hora navegador: 
                <script type="text/javascript">
                        var d = new Date();
                        document.write(d.getHours(),':'+d.getMinutes(),':'+d.getSeconds());
                </script>

        </div>
</header>
 <section id='main'>
        <article>
                <h2>Directorios del sitio</h2>
                <?php
                $directorio = opendir("."); //ruta actual
                echo "<ul>";
                while ($archivo = readdir($directorio)) //obtenemos un archivo y luego otro sucesivamente
                {
                        if (is_dir($archivo))//verificamos si es o no un directorio
                        {
                                echo "<li class='directorio'><a href='".$archivo . "'>[".$archivo . "]</a></li>"; //de ser un directorio lo envolvemos entre corchetes
                        }
                }
                echo "</ul>";

                ?>
                <p>
                        <?php
                        $bytes = disk_free_space(".");
                        $si_prefix = array( 'B', 'KB', 'MB', 'GB', 'TB', 'EB', 'ZB', 'YB' );
                        $base = 1024;
                        $class = min((int)log($bytes , $base) , count($si_prefix) - 1);
                        echo 'Espacio libre en HD: '.sprintf('%1.2f' , $bytes / pow($base,$class)) . ' ' . $si_prefix[$class] . '.';
                        ?>
                </p>
        </article>
        <nav>
                <h3>Enlaces:</h3>
                <ul>
                    <li>
                        <a href="https://iesalixar.ddns.net:8006/">Servidor 
        PROXMOX</a>
                    </li>
                    <li>
                        <a href="http://aulavirtual.iesalixar.org" target=_blank>Aula Virtual</a>                                       
                </li> 
                <li><a href="../alumnoftp">Directorio de Alumnos</a></li>
                </ul>
        </nav>    
        <aside>
                <h3>Archivos del directorio</h3>
                <?php
                $directorio = opendir("."); //ruta actual
                echo "<ul>";
                while ($archivo = readdir($directorio)) //obtenemos un archivo y luego otro sucesivamente
                {
                        if (is_dir($archivo))//verificamos si es o no un directorio
                        {
                        }
                        else
                        {
                                echo "<li class='archivo'><a href='".$archivo . "'>".$archivo . "</a></li>";
                        }
                }
                echo "</ul>";

                ?>
        </aside>
 </section>
 <footer>footer</footer>
  </body>
</html>