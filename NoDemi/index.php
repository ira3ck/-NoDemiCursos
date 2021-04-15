<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
        <link rel="stylesheet" href="css/style.css" media="screen">
        <title>NoDemi</title>
    </head>

    <body>
        <?php
        include "classes.php";
        $nav = new navbar();
        $nav->simple();

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (isset($_POST["salir"])) {
                session_unset();
                session_destroy();
                $nav->notSession();
            } else {
                $ses = new inicioRegistro();
                $usuario = $_POST["Usuario"];
                $correo = $_POST["Correo"];
                $contraseña = $_POST["Contraseña"];

                if (isset($_POST["Confirm"])) {
                    $texto = $ses->registro($correo, $usuario, $contraseña);
                    $regis = true;
                }

                $result = $ses->inicio($usuario, $correo, $contraseña);
                if (!empty($result)) {
                    $_SESSION["nombre"] = $result[0];
                    $_SESSION["paterno"] = $result[1];
                    $_SESSION["materno"] = $result[2];
                    $_SESSION["correo"] = $result[3];
                    $_SESSION["usuario"] = $result[4];
                    $_SESSION["contraseishon"] = $result[5];
                    $_SESSION["genero"] = $result[6];
                    $_SESSION["nacimiento"] = $result[7];
                    $_SESSION["privilegio"] = $result[8];
                    $nav->yesSession($_SESSION["usuario"], $_SESSION["privilegio"]);
                } else {
                    if ($regis) {
                        $mal += 1;
                    }
                    $mal += 1;
                    $_SESSION["usuario"] = null;
                    $nav->notSession();
                }
            }
        } else {
            if (isset($_SESSION["usuario"])) {
                $nav->yesSession($_SESSION["usuario"], $_SESSION["privilegio"]);
            } else {
                $_SESSION["usuario"] = null;
                $nav->notSession();
            }
        }
        ?>

        <div class="contGlobal">
            <div class="mainContent" style="padding-top:0;">

                <img src="img/banner.png" alt="Sorry" style="width: 100%; height: auto;" />

                <div class="separador">
                    <h3 class="mb-5">Los mejores cursos</h3>
                </div>

                <!-- CARRUSEL -->
                <div style="padding-bottom: 10rem; padding-top: 5rem">
                    <div class="card-carousel">

                        <div class="my-card">
                            <div class="card" style="width: 18rem;">
                                <img src="img/card.png" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Programar absolutamente todo lo que tú quieras en menos de un día
                                    </h5>
                                    <small class="text-muted">irack alanís</small><br>
                                    <strong>413.00MXN</strong>
                                </div>
                            </div>
                        </div>

                        <div class="my-card">
                            <div class="card" style="width: 18rem;">
                                <img src="img/card.png" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Aprende a dibujar en 3D, desde cero, sin conocimiento previo.
                                    </h5>
                                    <small class="text-muted">El Maestro Shaolín</small><br>
                                    <strong>3,141.59MXN</strong>
                                </div>
                            </div>
                        </div>

                        <div class="my-card">
                            <div class="card" style="width: 18rem;">
                                <img src="img/card.png" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Habla todos los idiomas del mundo de manera fluída, aprende
                                        mientras duermes.</h5>
                                    <small class="text-muted">Poly G. Lota</small><br>
                                    <strong>265.35.00MXN</strong>
                                </div>
                            </div>
                        </div>

                        <div class="my-card">
                            <div class="card" style="width: 18rem;">
                                <img src="img/card.png" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Se la mejor versión de ti mismo todos los días a partir de hoy.
                                    </h5>
                                    <small class="text-muted">Emo C. O'Nall</small><br>
                                    <strong>Gratis</strong>
                                </div>
                            </div>
                        </div>

                        <div class="my-card">
                            <div class="card" style="width: 18rem;">
                                <img src="img/card.png" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Aprende a permanecer despierto por todo el tiempo que quieras.
                                    </h5>
                                    <small class="text-muted">Sr. de la Vida</small><br>
                                    <strong>99.99MXN</strong>
                                </div>
                            </div>
                        </div>

                        <div class="my-card">
                            <div class="card" style="width: 18rem;">
                                <img src="img/card.png" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Canta como los ángeles o incluso mejor.</h5>
                                    <small class="text-muted">Serafín Bendito</small><br>
                                    <strong>1Millón MXN</strong>
                                </div>
                            </div>
                        </div>

                        <div class="my-card">
                            <div class="card" style="width: 18rem;">
                                <img src="img/card.png" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Neurocirujía profesional.</h5>
                                    <small class="text-muted">El médico raro</small><br>
                                    <strong>Gratis</strong>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- FIN CARRUSEL -->


                <div class="separador mt-5">
                    <h3 class="mb-5">Programación</h3>
                </div>

                <div class="row text-center">
                    <div class="col">
                        <div class="tarjeta" onclick="redirect('curso.html')">
                            <img src="img/banner.png" alt="">
                            <div class="tarjetaCont">
                                <p>HOLA HOLA HOLA HOLA HOLA HOLA HOLA HOLA HOLA HOLA HOLA HOLA HOLA HOLA HOLA HOLA HOLA </p>
                                <div class="detPrice">
                                    <small class="text-muted">ira3ck alanís</small><br>
                                    <strong class="ml-3">413.00MXN</strong>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col">
                        <div class="tarjeta" onclick="redirect('curso.html')">
                            <img src="img/banner.png" alt="">
                            <div class="tarjetaCont">
                                <p>HOLA HOLA HOLA HOLA HOLA HOLA HOLA HOLA HOLA HOLA HOLA HOLA HOLA HOLA HOLA HOLA HOLA </p>
                                <div class="detPrice">
                                    <small class="text-muted">ira3ck alanís</small><br>
                                    <strong class="ml-3">413.00MXN</strong>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col">
                        <div class="tarjeta" onclick="redirect('curso.html')">
                            <img src="img/banner.png" alt="">
                            <div class="tarjetaCont">
                                <p>HOLA HOLA HOLA HOLA HOLA HOLA HOLA HOLA HOLA HOLA HOLA HOLA HOLA HOLA HOLA HOLA HOLA </p>
                                <div class="detPrice">
                                    <small class="text-muted">ira3ck alanís</small><br>
                                    <strong class="ml-3">413.00MXN</strong>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col">
                        <div class="tarjeta" onclick="redirect('curso.html')">
                            <img src="img/banner.png" alt="">
                            <div class="tarjetaCont">
                                <p>HOLA HOLA HOLA HOLA HOLA HOLA HOLA HOLA HOLA HOLA HOLA HOLA HOLA HOLA HOLA HOLA HOLA </p>
                                <div class="detPrice">
                                    <small class="text-muted">ira3ck alanís</small><br>
                                    <strong class="ml-3">413.00MXN</strong>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col">
                        <div class="tarjeta" onclick="redirect('curso.html')">
                            <img src="img/banner.png" alt="">
                            <div class="tarjetaCont">
                                <p>HOLA HOLA HOLA HOLA HOLA HOLA HOLA HOLA HOLA HOLA HOLA HOLA HOLA HOLA HOLA HOLA HOLA </p>
                                <div class="detPrice">
                                    <small class="text-muted">ira3ck alanís</small><br>
                                    <strong class="ml-3">413.00MXN</strong>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col">
                        <div class="tarjeta" onclick="redirect('curso.html')">
                            <img src="img/banner.png" alt="">
                            <div class="tarjetaCont">
                                <p>HOLA HOLA HOLA HOLA HOLA HOLA HOLA HOLA HOLA HOLA HOLA HOLA HOLA HOLA HOLA HOLA HOLA </p>
                                <div class="detPrice">
                                    <small class="text-muted">ira3ck alanís</small><br>
                                    <strong class="ml-3">413.00MXN</strong>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col">
                        <div class="tarjeta" onclick="redirect('curso.html')">
                            <img src="img/banner.png" alt="">
                            <div class="tarjetaCont">
                                <p>HOLA HOLA HOLA HOLA HOLA HOLA HOLA HOLA HOLA HOLA HOLA HOLA HOLA HOLA HOLA HOLA HOLA </p>
                                <div class="detPrice">
                                    <small class="text-muted">ira3ck alanís</small><br>
                                    <strong class="ml-3">413.00MXN</strong>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col">
                        <div class="tarjeta" onclick="redirect('curso.html')">
                            <img src="img/banner.png" alt="">
                            <div class="tarjetaCont">
                                <p>HOLA HOLA HOLA HOLA HOLA HOLA HOLA HOLA HOLA HOLA HOLA HOLA HOLA HOLA HOLA HOLA HOLA </p>
                                <div class="detPrice">
                                    <small class="text-muted">ira3ck alanís</small><br>
                                    <strong class="ml-3">413.00MXN</strong>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="jumbotron mt-5" style="background-color: #c8b7d1;">
                    <h1 class="display-4">¡Comienza a aprender!</h1>
                    <p class="lead">Tú puedes ser uno de los miles de usuarios que se están nutriendo de conocimientos día
                        con día. ¿Qué estás esperando para saber más?</p>
                    <hr class="my-4">
                    <p>Si aquello que te frena es que tienes tantos intereses que no te puedes decidir, puedes tratar con
                        nuestra función de "Curso Aleatorio" que te sugerirá uno de nuestros cursos para que puedaas
                        comenzar justo ahora. Quién sabe, tal vez descubras extraordinarias habilidades que aguardaban a ser
                        despertadas.</p>
                    <a class="btn btn-primary btn-lg" href="curso.html" role="button" id="redirectRegistro">Mi suerte será...</a>
                </div>


                <div class="separador mt-5">
                    <h3 class="mb-5">Artes</h3>
                </div>

                <div class="row text-center">
                    <div class="col">
                        <div class="tarjeta" onclick="redirect('curso.html')">
                            <img src="img/banner.png" alt="">
                            <div class="tarjetaCont">
                                <p>HOLA HOLA HOLA HOLA HOLA HOLA HOLA HOLA HOLA HOLA HOLA HOLA HOLA HOLA HOLA HOLA HOLA </p>
                                <div class="detPrice">
                                    <small class="text-muted">ira3ck alanís</small><br>
                                    <strong class="ml-3">413.00MXN</strong>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col">
                        <div class="tarjeta" onclick="redirect('curso.html')">
                            <img src="img/banner.png" alt="">
                            <div class="tarjetaCont">
                                <p>HOLA HOLA HOLA HOLA HOLA HOLA HOLA HOLA HOLA HOLA HOLA HOLA HOLA HOLA HOLA HOLA HOLA </p>
                                <div class="detPrice">
                                    <small class="text-muted">ira3ck alanís</small><br>
                                    <strong class="ml-3">413.00MXN</strong>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col">
                        <div class="tarjeta" onclick="redirect('curso.html')">
                            <img src="img/banner.png" alt="">
                            <div class="tarjetaCont">
                                <p>HOLA HOLA HOLA HOLA HOLA HOLA HOLA HOLA HOLA HOLA HOLA HOLA HOLA HOLA HOLA HOLA HOLA </p>
                                <div class="detPrice">
                                    <small class="text-muted">ira3ck alanís</small><br>
                                    <strong class="ml-3">413.00MXN</strong>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col">
                        <div class="tarjeta" onclick="redirect('curso.html')">
                            <img src="img/banner.png" alt="">
                            <div class="tarjetaCont">
                                <p>HOLA HOLA HOLA HOLA HOLA HOLA HOLA HOLA HOLA HOLA HOLA HOLA HOLA HOLA HOLA HOLA HOLA </p>
                                <div class="detPrice">
                                    <small class="text-muted">ira3ck alanís</small><br>
                                    <strong class="ml-3">413.00MXN</strong>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>


                <div class="separador mt-5">
                    <h3 class="mb-5">Ciencia</h3>
                </div>

                <div class="row text-center">
                    <div class="col">
                        <div class="tarjeta" onclick="redirect('curso.html')">
                            <img src="img/banner.png" alt="">
                            <div class="tarjetaCont">
                                <p>HOLA HOLA HOLA HOLA HOLA HOLA HOLA HOLA HOLA HOLA HOLA HOLA HOLA HOLA HOLA HOLA HOLA </p>
                                <div class="detPrice">
                                    <small class="text-muted">ira3ck alanís</small><br>
                                    <strong class="ml-3">413.00MXN</strong>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col">
                        <div class="tarjeta" onclick="redirect('curso.html')">
                            <img src="img/banner.png" alt="">
                            <div class="tarjetaCont">
                                <p>HOLA HOLA HOLA HOLA HOLA HOLA HOLA HOLA HOLA HOLA HOLA HOLA HOLA HOLA HOLA HOLA HOLA </p>
                                <div class="detPrice">
                                    <small class="text-muted">ira3ck alanís</small><br>
                                    <strong class="ml-3">413.00MXN</strong>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col">
                        <div class="tarjeta" onclick="redirect('curso.html')">
                            <img src="img/banner.png" alt="">
                            <div class="tarjetaCont">
                                <p>HOLA HOLA HOLA HOLA HOLA HOLA HOLA HOLA HOLA HOLA HOLA HOLA HOLA HOLA HOLA HOLA HOLA </p>
                                <div class="detPrice">
                                    <small class="text-muted">ira3ck alanís</small><br>
                                    <strong class="ml-3">413.00MXN</strong>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col">
                        <div class="tarjeta" onclick="redirect('curso.html')">
                            <img src="img/banner.png" alt="">
                            <div class="tarjetaCont">
                                <p>HOLA HOLA HOLA HOLA HOLA HOLA HOLA HOLA HOLA HOLA HOLA HOLA HOLA HOLA HOLA HOLA HOLA </p>
                                <div class="detPrice">
                                    <small class="text-muted">ira3ck alanís</small><br>
                                    <strong class="ml-3">413.00MXN</strong>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col">
                        <div class="tarjeta" onclick="redirect('curso.html')">
                            <img src="img/banner.png" alt="">
                            <div class="tarjetaCont">
                                <p>HOLA HOLA HOLA HOLA HOLA HOLA HOLA HOLA HOLA HOLA HOLA HOLA HOLA HOLA HOLA HOLA HOLA </p>
                                <div class="detPrice">
                                    <small class="text-muted">ira3ck alanís</small><br>
                                    <strong class="ml-3">413.00MXN</strong>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col">
                        <div class="tarjeta" onclick="redirect('curso.html')">
                            <img src="img/banner.png" alt="">
                            <div class="tarjetaCont">
                                <p>HOLA HOLA HOLA HOLA HOLA HOLA HOLA HOLA HOLA HOLA HOLA HOLA HOLA HOLA HOLA HOLA HOLA </p>
                                <div class="detPrice">
                                    <small class="text-muted">ira3ck alanís</small><br>
                                    <strong class="ml-3">413.00MXN</strong>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col">
                        <div class="tarjeta" onclick="redirect('curso.html')">
                            <img src="img/banner.png" alt="">
                            <div class="tarjetaCont">
                                <p>HOLA HOLA HOLA HOLA HOLA HOLA HOLA HOLA HOLA HOLA HOLA HOLA HOLA HOLA HOLA HOLA HOLA </p>
                                <div class="detPrice">
                                    <small class="text-muted">ira3ck alanís</small><br>
                                    <strong class="ml-3">413.00MXN</strong>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col">
                        <div class="tarjeta" onclick="redirect('curso.html')">
                            <img src="img/banner.png" alt="">
                            <div class="tarjetaCont">
                                <p>HOLA HOLA HOLA HOLA HOLA HOLA HOLA HOLA HOLA HOLA HOLA HOLA HOLA HOLA HOLA HOLA HOLA </p>
                                <div class="detPrice">
                                    <small class="text-muted">ira3ck alanís</small><br>
                                    <strong class="ml-3">413.00MXN</strong>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


            </div>


            <div class="barra overflow-auto">

                <div class="separador user-select-none">CATEGORÍAS</div>

                <div class="category user-select-none" style="background: #3300cc" onclick="redirect('cursosCategoria.html')">
                    Arte
                </div>
                <div class="category user-select-none" style="background: #333300" onclick="redirect('cursosCategoria.html')">
                    Finanzas
                </div>
                <div class="category user-select-none" style="background: #ff9999" onclick="redirect('cursosCategoria.html')">
                    Superación Personal
                </div>
                <div class="category user-select-none" style="background: #6666ff" onclick="alertaRoja()">
                    Alerta Roja
                </div>
                <div class="category user-select-none" style="background: #ff6633">
                    Al Formato
                </div>
                <div class="category user-select-none" style="background: #ff6633" onclick="redirect('myself.html')">
                    Al Perfil
                </div>
                <div class="category user-select-none" style="background: #ff6633" onclick="redirect('myselfTeach.html')">
                    Al Perfil del Maestro
                </div>
            </div>
        </div>

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
        <script src="https://code.jquery.com/jquery-3.3.1.min.js"
                integrity="sha384-tsQFqpEReu7ZLhBV2VZlAu7zcOV+rXbYlF2cqB8txI/8aZajjp4Bqd+V6D5IgvKT" crossorigin="anonymous">
        </script>
        <script>
            $num = $('.my-card').length;
            $even = $num / 2;
            $odd = ($num + 1) / 2;

            if ($num % 2 == 0) {
                $('.my-card:nth-child(' + $even + ')').addClass('active');
                $('.my-card:nth-child(' + $even + ')').prev().addClass('prev');
                $('.my-card:nth-child(' + $even + ')').next().addClass('next');
            } else {
                $('.my-card:nth-child(' + $odd + ')').addClass('active');
                $('.my-card:nth-child(' + $odd + ')').prev().addClass('prev');
                $('.my-card:nth-child(' + $odd + ')').next().addClass('next');
            }

            $('.my-card').click(function () {
                $slide = $('.active').width();
                console.log($('.active').position().left);

                if ($(this).hasClass('next')) {
                    $('.card-carousel').stop(false, true).animate({left: '-=' + $slide});
                } else if ($(this).hasClass('prev')) {
                    $('.card-carousel').stop(false, true).animate({left: '+=' + $slide});
                }

                $(this).removeClass('prev next');
                $(this).siblings().removeClass('prev active next');

                $(this).addClass('active');
                $(this).prev().addClass('prev');
                $(this).next().addClass('next');
            });
            ht


            // Keyboard nav
            $('html body').keydown(function (e) {
                if (e.keyCode == 37) { // left
                    $('.active').prev().trigger('click');
                } else if (e.keyCode == 39) { // right
                    $('.active').next().trigger('click');
                }
            });
        </script>

    </body>

</html>