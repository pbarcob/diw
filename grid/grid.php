<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Grid</title>
<link rel="stylesheet" href="grid.css"></head>
<body>
    <header>
        <img id="cara" src="cara.png" alt="">
        <h1>
            Servidor web Diseño de Interfaces (DAW2) - IES ALIXAR
        </h1>
        <img id="logo" src="ies_alixar_logo.png" alt="ies_alixar_logo.png">
    </header>
    <nav>

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
    </nav>
    <section>
        section
    </section>
    <aside>
    <h3>Archivos del directorio : </h3>
    <h4><?php echo getcwd();?></h4>
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
    <footer>
        footer
    </footer>
</body>
</html>