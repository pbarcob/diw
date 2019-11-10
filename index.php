<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>DIW - IES Alixar</title>
    <link rel="stylesheet" href="index_new.css">
    <link href="https://fonts.googleapis.com/css?family=Press+Start+2P&display=swap" rel="stylesheet">
</head>
<body>
    <header>
        <img id="cara" src="cara.png" alt="">
        <h1>
            Servidor web Diseño de Interfaces (DAW2) <br><br> IES ALIXAR
        </h2>
        <img id="logo" src="ies_alixar_logo2.png" alt="ies_alixar_logo2.png">
    </header>
    <nav>
        <p>Directorios:</p>
                <?php
                $directorio = opendir("."); //ruta actual
                echo "<ul id='directorios'>";
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
                        echo sprintf('%1.2f' , $bytes / pow($base,$class)) . ' ' . $si_prefix[$class] . ' libres.';
                        ?>
                </p>
    </nav>
    <aside>
        <p>Archivos</p>
                <?php
                $directorio = opendir("."); //ruta actual
                echo "<ul id='archivos'>";
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
    <section>
        <h2>Listado de temas</h2>  
        <div id="temas">
        <article class="tema">
            <h3><img src="carpeta.jpg" alt="carpeta">Tema 1</h3>
        </article>
        <article class="tema">
            <h3><img src="carpeta.jpg" alt="carpeta">Tema 2</h3>
        </article>
        <article class="tema">
            <h3><img src="carpeta.jpg" alt="carpeta">Tema 3</h3>
        </article>
        <article class="tema">
            <h3><img src="carpeta.jpg" alt="carpeta">Tema 4</h3>
        </article>
        <article class="tema">
            <h3><img src="carpeta.jpg" alt="carpeta">Tema 5</h3>
        </article>
        <article class="tema">
            <h3><img src="carpeta.jpg" alt="carpeta">Tema 6</h3>
        </article>
        <article class="tema">
            <h3><img src="carpeta.jpg" alt="carpeta">Tema 7</h3>
        </article>
        <article class="tema">
            <h3><img src="carpeta.jpg" alt="carpeta">Tema 8</h3>
        </article>
        <article class="tema">
            <h3><img src="carpeta.jpg" alt="carpeta">Tema 9</h3>
        </article>
        <article class="tema">
            <h3><img src="carpeta.jpg" alt="carpeta">Tema 10</h3>
        </article>
        </div>      
    </section>
    <footer>
        footer
    </footer>
</body>
</html>