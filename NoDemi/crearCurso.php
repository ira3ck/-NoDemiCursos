<?php
session_start();
?>

<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <link rel="stylesheet" href="css/style.css" media="screen">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
        <script src= "js/scripts.js";></script>
        <meta charset="UTF-8">
        <title>Configuración de usuario</title>
        <style>
            .unaClase{
                border: solid 1.5px #666;
                border-radius: 10px;
                padding: 1rem;
                margin-top: 1rem;
            }
        </style>
    </head>
    <body>

        <?php
        include "classes.php";
        $nav = new navbar();
        $nav->simple();

        if (isset($_SESSION["usuario"])) {
            $nav->yesSession($_SESSION["usuario"], $_SESSION["privilegio"], $_SESSION["imagen"]);
        } else {
            $_SESSION["usuario"] = null;
            header('Location: index.php');
        }
        ?>

        <script>

            window.addEventListener('resize', onWindowResize);

            function onWindowResize() {

                var rem = function rem() {
                    var html = document.getElementsByTagName('html')[0];

                    return function () {
                        return parseInt(window.getComputedStyle(html)['fontSize']);
                    }
                }();

                var long = $('.unaClase').width() / rem() + 10;

                $('textarea').attr('cols', long.toString());

            }


            var classCounter = 0;

            $(document).ready(function () {
                $('#newClass').click(function () {
                    classCounter++;
                    $('.clasesNuevas').append('<div class="unaClase c' + classCounter + '"><h3>Clase ' + classCounter + '</h3><label for="nameClass' + classCounter + '">Nombre</label><input type="text" class="form-control campoConfig" id="nameClass' + classCounter + '" name="name" placeholder=""><label for="contraConfig">Contenido</label><br><input type="file" name="video' + classCounter + '"><br><br><label for="desc' + classCounter + '">Descripción</label><br><textarea id="desc' + classCounter + '" name="desc' + classCounter + '" rows="4" cols="77" style="box-sizing:border-box"></textarea></div>');
                });
            });

        </script>

        <div class="contGlobal">
            <div class="mainContent">
                <div class="container">
                    <div class="row"> 

                        <div class="col" >
                            <form action="" onsubmit="">

                                <h1>Datos del curso</h1>

                                <label for="NombreC">Nombre del curso</label>
                                <input type="text" class="form-control campoConfig" id="nombreCurso" name="nombreCurso" placeholder="">

                                <label for="mailCofig">Descripción corta</label>
                                <input type="text" class="form-control campoConfig" id="descCurso" name="descCurso" placeholder="">

                                <label for="contraConfig">Imagen</label> <br>
                                <input type="file"><br><br>

                                <label for="confirmarContraConfig">Qué incluye</label>
                                <input type="text" class="form-control campoConfig" id="confirmarContraConfig" name="confirmarContraConfig" placeholder=" ">
                                <label for="confirmarContraConfig">Precio</label>
                                <input type="text" class="form-control campoConfig" id="confirmarContraConfig" name="confirmarContraConfig" placeholder=" ">

                                <div class="separadorConfig mt-5"></div>
                                <h1>Contenido del curso</h1>

                                <div class="clasesNuevas">

                                </div>

                                <button class="btn btn-primary btnConfig" type="button" onclick="" id="newClass">Añadir clase</button>
                                <br>
                                <button class="btn btn-primary btnConfig btn-lg" type="submit">Publicar Curso</button>

                            </form>

                        </div>
                    </div>  
                </div>

            </div>


            <div class="barra overflow-auto">
                <div class="separador">CATEGORÍAS</div>
                <?php
                $barra = new category();
                $barra->llenaLaBarra();
                ?>
            </div>
        </div>

        <footer>

        </footer>

    </body>
</html>