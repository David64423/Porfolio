<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <?php
            require "database/queries.php";

            $nombres= devolverNombres();
            $contenido= devolverContenido();
    ?>
    
    <main id="cuerpoCompleto">

            <header id="header">

                    <div class="contenedoresElementosMenu" id="contenedorElementoMenu1">

                                <p id="miPorfolioMenuNombre"> <?php echo $nombres['nomb_menu']; ?> </p>

                    </div>




                    <div class="contenedoresElementosMenu" id="contenedorElementoMenu2">

                                    <a class="menuItem" href=""><p>About Me</p></a>
                                    <a class="menuItem" href=""><p>GitHub</p></a>
                                    <a class="menuItem" href=""><p>Linkedin</p></a>            
                    </div>


            </header>


            <div id="cuerpoPrincipal">

                        <div id="cuerpoPrincipalIzquierda" class="divisionesCuerpo">
                            <main id="contenedorCuerpoPrincipalIzquierda">
                                    <header id="cuerpoPrincipalIzquierdaHeader" class="divisionesIzquierda">
                                        <a id="linkProyectos"href="">Mira mis proyectos aqui</a>
                                        <!--<a title="linkedin" class="logosContacto" href=""><img class="logosContacto"src="img/linkedin.png" alt="linkedin.png"> </a>-->
                                    </header>
                                    <main id="cuerpoPrincipalIzquierdaMain" class="divisionesIzquierda"> <h2 id="nombreAutor">
                                        <?php echo $nombres['nomb_autor']?> </h2></main>
                                    <footer id="cuerpoPrincipalIzquierdaFooter" class="divisionesIzquierda">
                                       <p id="descripcionDeMi"><?php  echo $contenido['cont_texto']?></p>
                                    </footer>
                            </main>

                        </div>



                        <div id="cuerpoPrincipalDerecha" class="divisionesCuerpo">

                                <main id="mainDeLaDerecha">

                                </main>

                                   
                        </div>




            </div>



            <footer>




            </footer>




    </main>
</body>
</html>