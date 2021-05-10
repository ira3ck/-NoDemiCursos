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
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
              integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
                integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
                integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
        crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
                integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV"
        crossorigin="anonymous"></script>
        <script src="js/scripts.js" ;></script>
        <meta charset="UTF-8">
        <title>NoDemi</title>
    </head>

    <body class="sb">

        <?php
        include "classes.php";
        $nav = new navbar();
        $nav->simple();

        if (isset($_SESSION["usuario"])) {
            $nav->yesSession($_SESSION["usuario"], $_SESSION["privilegio"], $_SESSION["imagen"]);
        } else {
            $_SESSION["usuario"] = null;
            $nav->notSession();
        }
        ?>

        <!--CONTENIDO (INICIO)-->
        <div class="contGlobal" style="background-color: #cec2d0">

            <div class="container">

                <div class="row">

                    <div class="col">
                        
                        <div class="row">
                            <h2>Resumen de la compra</h2>
                        </div>
                        <div class="row">
                            El curso: Cómo tener éxito en la vida
                        </div>
                        <div class="row">
                            
                        </div>
                        <div class="row">
                            <form action="curso.php" method="POST" enctype="multipart/form-data">
                                <button class="btn btn-primary btnConfig" type="submit" value="pagar" name="pagar">Pagar</button>
                            </form>
                        </div>
                        
                    </div>

                    <div class="col-4" style="background-color: #e9e9e9">
                        <div class="row justify-content-center p-5">
                            <img src="img/card.png" alt="" style="width: 100%; height: auto; border-radius: 20px; margin-top: 3rem;">
                        </div>
                        <div class="row justify-content-center p-3">
                            <h3 class="text-center">Cómo tener éxito en la vida</h3> 
                        </div>
                        <div class="row justify-content-center">
                            por ira3ck
                        </div>
                        <div class="row justify-content-center p-3">
                            <h4>1599.99</h4>
                        </div>
                    </div>

                </div>

            </div>

        </div>
        <!--CONTENIDO (FIN)-->

        <!--FOOTER (INICIO)-->
        <footer>
            <div class="container">
                <div class="row">
                    <div class="col">
                        qué onda
                    </div>
                    <div class="col">
                        qué tal
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        cómo va todo?
                    </div>
                </div>
            </div>
        </footer>
        <!--FOOTER (FIN)-->

    </body>

</html>