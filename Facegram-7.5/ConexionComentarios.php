<?php
//Indice que controla el número de publicación
$i=$_POST["boton"];

//Variables para obtener los datos recogidos de la publicacion
$ruta_archivo = "PagComentario$i.html";
$fecha_hora=$_POST["fecha-hora$i"];
$tema= $_POST["tema$i"];
$titulo= $_POST["titulo$i"];
$contenido= $_POST["contenido$i"];

/*--Condicional para verificar si el archivo existe */
if (!file_exists($ruta_archivo)) 
{
    // Abre el archivo en modo escritura (si no existe, se creará)
    $archivo = fopen($ruta_archivo, 'w');
    if($tema=="Deportes")
    {
        $contenido_nuevoarch = "
<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>Comentarios</title>
    <header class=\"askmenegra\">
        <img src=\"askmenegra.png\" class=\"askme1\">
    </header>
    <link rel=\"stylesheet\" href=\"AskMe.css\">
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css\">
</head>
<body>
    <nav class=\"menu\">
        <ul>
            <li><a href=\"PagInicioAskMe.html\"> <i class=\"fa fa-home\"></i> Inicio</a></li>
            <li><a href=\"PagTopAskMe.html\"> <i class=\"fa fa-fire\"></i> Top</a></li>
            <li><a href=\"PagDeportesAskMe.html\"> <i class=\"fa fa-futbol\"></i> Deportes</a></li>
            <li><a href=\"PagVideojuegosAskMe.html\"> <i class=\"fa fa-gamepad\"></i> Videojuegos</a></li>
            <li><a href=\"PagPerfilAskMe.php\"> <i class=\"fa fa-user\"></i> Perfil</a></li>
        </ul>
    </nav>
<div class=\"publicacionescoments\">
    <div class=\"publicacioncoments\">
        <h1>Publicacion</h1>
        <div class=\"fecha-hora\"> $fecha_hora  </div>
        <div class=\"Tema\"> Tema:  <i class=\"fa fa-futbol\"></i> $tema </div>
        <div class=\"titulo\"> $titulo </div>
        <div class=\"contenido\">
             $contenido
        </div>
        <div class=\"acciones\">
            <button class=\"comentar\"><i class=\"far fa-comment\"></i> Comentar</button>
            <button onclick=\"sumarLike(this)\"><i class=\"far fa-thumbs-up\"></i> Like</button>
            <span class=\"contadorlike\">0</span>
            <button onclick=\"sumarDislike(this)\"><i class=\"far fa-thumbs-down\"></i> Dislike</button>
            <span class=\"contadordislike\">0</span>
        </div>
    </div>
</div>


<div class=\"lista-comentarios\">
    <h1>Comentarios</h1>
    <div class=\"comentariosesqueleto\">
    </div>
</div>
<form action=\"AgregarComentarios.php\" method=\"post\">
    <div class=\"comentarios\">
        <h1>Agregar Comentario</h1>
        <div class=\"seccion-comentarios\">
            <div class=\"agregar-comentario\">
                <textarea  name=\"seccion-agregar-comentario\" class=\"seccion-agregar-comentario\" placeholder=\"Escribe tu comentario aquí...\"></textarea>
                <button name=\"Iteracion\" value=\"$i\">Agregar Comentario</button>
            </div>
        </div>
    </div>
</form>
<script src=\"AskMe.js\"></script>
</body>
</html>"
;
    //Codigo para agregar la funcion de js en el boton
    // Nombre del archivo 
    $archivo2 = "PagDeportesAskMe.html";  
    // Leer el contenido actual del archivo 
    $contenido = file_get_contents($archivo2); 
    // Realizar la modificación necesaria, por ejemplo, eliminar una línea específica 
    $nuevo_contenido = str_replace("<button type=\"submit\" name=\"boton\" value=\"$i\">", "<button type=\"button\" id=\"boton$i\" onclick=\"AgregarComentario$i()\" >", $contenido); 
    // Escribir el contenido actualizado en el archivo 
    file_put_contents($archivo2, $nuevo_contenido);
    }
    else if($tema=="Top")
    {
        $contenido_nuevoarch = "
<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>Comentarios</title>
    <header class=\"askmenegra\">
        <img src=\"askmenegra.png\" class=\"askme1\">
    </header>
    <link rel=\"stylesheet\" href=\"AskMe.css\">
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css\">
</head>
<body>
    <nav class=\"menu\">
        <ul>
            <li><a href=\"PagInicioAskMe.html\"> <i class=\"fa fa-home\"></i> Inicio</a></li>
            <li><a href=\"PagTopAskMe.html\"> <i class=\"fa fa-fire\"></i> Top</a></li>
            <li><a href=\"PagDeportesAskMe.html\"> <i class=\"fa fa-futbol\"></i> Deportes</a></li>
            <li><a href=\"PagVideojuegosAskMe.html\"> <i class=\"fa fa-gamepad\"></i> Videojuegos</a></li>
            <li><a href=\"PagPerfilAskMe.php\"> <i class=\"fa fa-user\"></i> Perfil</a></li>
        </ul>
    </nav>
<div class=\"publicacionescoments\">
    <div class=\"publicacioncoments\">
        <h1>Publicacion</h1>
        <div class=\"fecha-hora\"> $fecha_hora  </div>
        <div class=\"Tema\"> Tema:  <i class=\"fa fa-fire\"></i> $tema </div>
        <div class=\"titulo\"> $titulo </div>
        <div class=\"contenido\">
            $contenido
        </div>
        <div class=\"acciones\">
            <button onclick=\"sumarLike(this)\"><i class=\"far fa-thumbs-up\"></i> Like</button>
            <span class=\"contadorlike\">0</span>
            <button onclick=\"sumarDislike(this)\"><i class=\"far fa-thumbs-down\"></i> Dislike</button>
            <span class=\"contadordislike\">0</span>
        </div>
    </div>
</div>


<div class=\"lista-comentarios\">
    <h1>Comentarios</h1>
    <div class=\"comentariosesqueleto\">
    </div>
</div>
<form action=\"AgregarComentarios.php\" method=\"post\">
    <div class=\"comentarios\">
        <h1>Agregar Comentario</h1>
        <div class=\"seccion-comentarios\">
            <div class=\"agregar-comentario\">
                <textarea  name=\"seccion-agregar-comentario\" class=\"seccion-agregar-comentario\" placeholder=\"Escribe tu comentario aquí...\"></textarea>
                <button name=\"Iteracion\" value=\"$i\">Agregar Comentario</button>
            </div>
        </div>
    </div>
</form>
<script src=\"AskMe.js\"></script>
</body>
</html>"
            ;
//Codigo para agregar la funcion de js en el boton
// Nombre del archivo 
$archivo3 = "PagTopAskMe.html";  
// Leer el contenido actual del archivo 
$contenido = file_get_contents($archivo3); 
// Realizar la modificación necesaria, por ejemplo, eliminar una línea específica 
$nuevo_contenido = str_replace("<button type=\"submit\" name=\"boton\" value=\"$i\">", "<button type=\"button\" id=\"boton$i\" onclick=\"AgregarComentario$i()\" >", $contenido); 
// Escribir el contenido actualizado en el archivo 
file_put_contents($archivo3, $nuevo_contenido);
    }

    else if($tema=="Videojuegos")
    {
        $contenido_nuevoarch = "
<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>Comentarios</title>
    <header class=\"askmenegra\">
        <img src=\"askmenegra.png\" class=\"askme1\">
    </header>
    <link rel=\"stylesheet\" href=\"AskMe.css\">
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css\">
</head>
<body>
    <nav class=\"menu\">
        <ul>
            <li><a href=\"PagInicioAskMe.html\"> <i class=\"fa fa-home\"></i> Inicio</a></li>
            <li><a href=\"PagTopAskMe.html\"> <i class=\"fa fa-fire\"></i> Top</a></li>
            <li><a href=\"PagDeportesAskMe.html\"> <i class=\"fa fa-futbol\"></i> Deportes</a></li>
            <li><a href=\"PagVideojuegosAskMe.html\"> <i class=\"fa fa-gamepad\"></i> Videojuegos</a></li>
            <li><a href=\"PagPerfilAskMe.php\"> <i class=\"fa fa-user\"></i> Perfil</a></li>
        </ul>
    </nav>
<div class=\"publicacionescoments\">
    <div class=\"publicacioncoments\">
        <h1>Publicacion</h1>
        <div class=\"fecha-hora\"> $fecha_hora  </div>
        <div class=\"Tema\"> Tema:  <i class=\"fa fa-gamepad\"></i> $tema </div>
        <div class=\"titulo\"> $titulo </div>
        <div class=\"contenido\">
             $contenido
        </div>
        <div class=\"acciones\">
            <button onclick=\"sumarLike(this)\"><i class=\"far fa-thumbs-up\"></i> Like</button>
            <span class=\"contadorlike\">0</span>
            <button onclick=\"sumarDislike(this)\"><i class=\"far fa-thumbs-down\"></i> Dislike</button>
            <span class=\"contadordislike\">0</span>
        </div>
    </div>
</div>


<div class=\"lista-comentarios\">
    <h1>Comentarios</h1>
    <div class=\"comentariosesqueleto\">
    </div>
</div>
<form action=\"AgregarComentarios.php\" method=\"post\">
    <div class=\"comentarios\">
        <h1>Agregar Comentario</h1>
        <div class=\"seccion-comentarios\">
            <div class=\"agregar-comentario\">
                <textarea name=\"seccion-agregar-comentario\" class=\"seccion-agregar-comentario\" placeholder=\"Escribe tu comentario aquí...\"></textarea>
                <button name=\"Iteracion\" value=\"$i\">Agregar Comentario</button>
            </div>
        </div>
    </div>
</form>
<script src=\"AskMe.js\"></script>
</body>
</html>";
//Codigo para agregar la funcion de js en el boton
// Nombre del archivo 
$archivo4 = "PagVideojuegosAskMe.html";  
// Leer el contenido actual del archivo 
$contenido = file_get_contents($archivo4); 
// Realizar la modificación necesaria, por ejemplo, eliminar una línea específica 
$nuevo_contenido = str_replace("<button type=\"submit\" name=\"boton\" value=\"$i\">", "<button type=\"button\" id=\"boton$i\" onclick=\"AgregarComentario$i()\" >", $contenido); 
// Escribir el contenido actualizado en el archivo 
file_put_contents($archivo4, $nuevo_contenido);
    }

    else if($tema=="Perfil")
    {
        $contenido_nuevoarch = "
<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>Comentarios</title>
    <header class=\"askmenegra\">
        <img src=\"askmenegra.png\" class=\"askme1\">
    </header>
    <link rel=\"stylesheet\" href=\"AskMe.css\">
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css\">
</head>
<body>
    <nav class=\"menu\">
        <ul>
            <li><a href=\"PagInicioAskMe.html\"> <i class=\"fa fa-home\"></i> Inicio</a></li>
            <li><a href=\"PagTopAskMe.html\"> <i class=\"fa fa-fire\"></i> Top</a></li>
            <li><a href=\"PagDeportesAskMe.html\"> <i class=\"fa fa-futbol\"></i> Deportes</a></li>
            <li><a href=\"PagVideojuegosAskMe.html\"> <i class=\"fa fa-gamepad\"></i> Videojuegos</a></li>
            <li><a href=\"PagPerfilAskMe.php\"> <i class=\"fa fa-user\"></i> Perfil</a></li>
        </ul>
    </nav>
<div class=\"publicacionescoments\">
    <div class=\"publicacioncoments\">
        <h1>Publicacion</h1>
        <div class=\"fecha-hora\"> $fecha_hora  </div>
        <div class=\"Tema\">  <i class=\"fa fa-user\"></i> $_COOKIE[CookiePrueba] </div>
        <div class=\"titulo\"> $titulo </div>
        <div class=\"contenido\">
             $contenido
        </div>
        <div class=\"acciones\">
            <button onclick=\"sumarLike(this)\"><i class=\"far fa-thumbs-up\"></i> Like</button>
            <span class=\"contadorlike\">0</span>
            <button onclick=\"sumarDislike(this)\"><i class=\"far fa-thumbs-down\"></i> Dislike</button>
            <span class=\"contadordislike\">0</span>
        </div>
    </div>
</div>


<div class=\"lista-comentarios\">
    <h1>Comentarios</h1>
    <div class=\"comentariosesqueleto\">
    </div>
</div>
<form action=\"AgregarComentarios.php\" method=\"post\">
    <div class=\"comentarios\">
        <h1>Agregar Comentario</h1>
        <div class=\"seccion-comentarios\">
            <div class=\"agregar-comentario\">
                <textarea  name=\"seccion-agregar-comentario\" class=\"seccion-agregar-comentario\" placeholder=\"Escribe tu comentario aquí...\"></textarea>
                <button name=\"Iteracion\" value=\"$i\">Agregar Comentario</button>
            </div>
        </div>
    </div>
</form>
<script src=\"AskMe.js\"></script>
</body>
</html>"
;
        }
    } 
// Escribir el contenido en el archivo
fwrite($archivo, $contenido_nuevoarch);
// Cerrar el archivo
fclose($archivo);
header("Location:http://localhost/AskMe/PagComentario$i.html");

//Codigo para agregar la funcion de js en el boton
// Nombre del archivo 
$archivo5 = "PagPerfilAskMe.php";  
// Leer el contenido actual del archivo 
$contenido = file_get_contents($archivo5); 
// Realizar la modificación necesaria, por ejemplo, eliminar una línea específica 
$nuevo_contenido = str_replace("<button type=\"submit\" name=\"boton\" value=\"$i\">", "<button type=\"button\" id=\"boton$i\" onclick=\"AgregarComentario$i()\" >", $contenido); 
// Escribir el contenido actualizado en el archivo 
file_put_contents($archivo5, $nuevo_contenido);

//Codigo para agregar la funcion de js en el boton
// Nombre del archivo 
$archivo6 = "PagInicioAskMe.html";  
// Leer el contenido actual del archivo 
$contenido = file_get_contents($archivo6); 
// Realizar la modificación necesaria, por ejemplo, eliminar una línea específica 
$nuevo_contenido = str_replace("<button type=\"submit\" name=\"boton\" value=\"$i\">", "<button type=\"button\" id=\"boton$i\" onclick=\"AgregarComentario$i()\" >", $contenido); 
// Escribir el contenido actualizado en el archivo 
file_put_contents($archivo6, $nuevo_contenido);

//Codigo para acceder al codigo de js
$archivojs = fopen("AskMe.js", "a+");
$contenido_nuevoarch_js = "
function AgregarComentario$i() {
    window.location.href = \"PagComentario$i.html\";
}";
fwrite($archivojs, $contenido_nuevoarch_js);
fclose($archivojs);
?>