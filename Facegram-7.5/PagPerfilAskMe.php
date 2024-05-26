<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AskMe : Inicio</title>
    <header class="askmenegra">
        <img src="askmenegra.png" class="askme1">
    </header>
    <link rel="stylesheet" href="AskMe.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
</head>
<body>
    <nav class="menu">
        <ul>
            <li><a href="PagInicioAskMe.html"> <i class="fa fa-home"></i> Inicio</a></li>
            <li><a href="PagTopAskMe.html"> <i class="fa fa-fire"></i> Top</a></li>
            <li><a href="PagDeportesAskMe.html"> <i class="fa fa-futbol"></i> Deportes</a></li>
            <li><a href="PagVideojuegosAskMe.html"> <i class="fa fa-gamepad"></i> Videojuegos</a></li>
            <li><a class="activo" href="PagPerfilAskMe.php"> <i class="fa fa-user" aria-hidden="true"></i> Perfil</a></li>
        </ul>
    </nav>
    <div class="perfilini">
        <img src="usuario.png" alt="Avatar de usuario" class="avatar">
        <div class="info-usuario">
            <?php echo "<h3>$_COOKIE[CookiePrueba]</h3>" ?>
            <p>Biografía del usuario...</p>
            <button>Editar Perfil</button>
            <button onclick="CrearPubli()">+ Crear un nuevo post</button>
        </div>
    </div>
    <form action="ConexionComentarios.php" method="post">
    <div class="publicaciones">

            <div class="publicacion">
                <div class="fecha-hora">
                    <input type="hidden" name="fecha-hora18" value="11:28 PM, 09/04/2024 ">11:28 PM, 09/04/2024 
                </div>
                <div class="Tema18">
                    <input type="hidden" name="tema18" value="Deportes"> Tema: <i class="fa fa-futbol"></i> Deportes 
                </div>
                <div class="titulo">
                    <input type="hidden" name="titulo18" value="holaaa">holaaa
                </div>
                <div class="contenido">
                    <input type="hidden" name="contenido18" value="dd">dd
                </div>
                <div class="acciones">
                    <button type="submit" name="boton" value="18"><i class="far fa-comment"></i> Comentar</button>
                    <button type="button" onclick="sumarLike(this)"><i class="far fa-thumbs-up"></i> Like</button>
                    <span class="contadorlike">0</span>
                    <button type="button" onclick="sumarDislike(this)"><i class="far fa-thumbs-down"></i> Dislike</button>
                    <span class="contadordislike">0</span>
                </div>
            </div>
            

            <div class="publicacion">
                <div class="fecha-hora">
                    <input type="hidden" name="fecha-hora17" value="11:27 PM, 09/04/2024 ">11:27 PM, 09/04/2024 
                </div>
                <div class="Tema17">
                    <input type="hidden" name="tema17" value="Deportes"> Tema: <i class="fa fa-futbol"></i> Deportes 
                </div>
                <div class="titulo">
                    <input type="hidden" name="titulo17" value="hoolaaaa">hoolaaaa
                </div>
                <div class="contenido">
                    <input type="hidden" name="contenido17" value="dd">dd
                </div>
                <div class="acciones">
                    <button type="button" id="boton17" onclick="AgregarComentario17()" ><i class="far fa-comment"></i> Comentar</button>
                    <button type="button" onclick="sumarLike(this)"><i class="far fa-thumbs-up"></i> Like</button>
                    <span class="contadorlike">0</span>
                    <button type="button" onclick="sumarDislike(this)"><i class="far fa-thumbs-down"></i> Dislike</button>
                    <span class="contadordislike">0</span>
                </div>
            </div>
            
    
            <div class="publicacion">
                <div class="fecha-hora">
                    <input type="hidden" name="fecha-hora16" value="11:20 PM, 09/04/2024 ">11:20 PM, 09/04/2024 
                </div>
                <div class="Tema16">
                    <input type="hidden" name="tema16" value="Videojuegos"> Tema: <i class="fa fa-gamepad"></i> Videojuegos 
                </div>
                <div class="titulo">
                    <input type="hidden" name="titulo16" value="holaaaa">holaaaa
                </div>
                <div class="contenido">
                    <input type="hidden" name="contenido16" value="fff">fff
                </div>
                <div class="acciones">
                    <button type="button" id="boton16" onclick="AgregarComentario16()" ><i class="far fa-comment"></i> Comentar</button>
                    <button type="button" onclick="sumarLike(this)"><i class="far fa-thumbs-up"></i> Like</button>
                    <span class="contadorlike">0</span>
                    <button type="button" onclick="sumarDislike(this)"><i class="far fa-thumbs-down"></i> Dislike</button>
                    <span class="contadordislike">0</span>
                </div>
            </div>
            
            
            
            
    </div>
    </form>

    <script src="AskMe.js"></script>
</body>
</html>