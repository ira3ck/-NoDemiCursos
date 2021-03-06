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
        <link rel="stylesheet" href="css/style.css" media="screen">
        <script src="js/scripts.js" ;></script>

        <title>NoDemi</title>
    </head>

    <body>

        <?php
        
        if($_SESSION["privilegio"]=='Maestro'){
            header('Location: myselfTeach.php');
        }
        
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


        <div class="contGlobal">
            <div class="mainContent">

                <div class="jumbotron" style="background: #e1cce5">
                    <h1>¬°Bienvenido de nuevo <?php echo $_SESSION["usuario"]; ?>!</h1>
                    <p class="mb-5">Ya estamos listos para aprender</p>
                </div>

                <div class="row">
                    <div class="col">
                        <div class="list-group list-group-horizontal" id="list-tab" role="tablist">
                            <a class="list-group-item list-group-item-action active text-center" id="list-home-list" data-toggle="list"
                               href="#list-home" role="tab" aria-controls="home">Continuar Viendo</a>
                            <a class="list-group-item list-group-item-action text-center" id="list-profile-list" data-toggle="list"
                               href="#list-profile" role="tab" aria-controls="profile">Nuevos</a>
                            <a class="list-group-item list-group-item-action text-center" id="list-messages-list" data-toggle="list"
                               href="#list-messages" role="tab" aria-controls="messages">Cursos terminados</a>
                            <a class="list-group-item list-group-item-action text-center" id="list-settings-list" data-toggle="list"
                               href="#list-settings" role="tab" aria-controls="settings">Todos mis Cursos</a>
                        </div>
                    </div>
                </div>

                <div class="listaNotas overflow-auto my-2">

                    <div class="notaLista tab-content" id="nav-tabContent">

                        <div class="tab-pane fade show active" id="list-home" role="tabpanel"
                             aria-labelledby="list-home-list">
                            <div class="card listaCard" onclick="redirect('tomarCurso.html')">
                                <div class="row no-gutters">
                                    <div class="col-md-4">
                                        <img src="https://pbs.twimg.com/media/EdqjfxzXgAAdIgm?format=jpg&name=4096x4096"
                                             class="card-img" alt="...">
                                    </div>
                                    <div class="col-md-8">
                                        <div class="card-body">
                                            <h5 class="card-title">El trabajo es demasiado complicado</h5>
                                            <p class="card-text">
                                                Resulta que el trabajo es muy dif√≠cil. No sabemos qu√© hacer al respecto,
                                                pero s√≠ es muy complicado.
                                                Pero, ¬Ņqu√© hacer al respecto? Esa es una muy buena pregunta, ya veremos qu√©
                                                se podr√° hacer al respecto.
                                            </p>
                                            <p class="card-text"><small class="text-muted">√öltima actualizaci√≥n hace 3
                                                    minutos</small></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="list-profile" role="tabpanel" aria-labelledby="list-profile-list">
                            <div class="card listaCard" onclick="redirect('tomarCurso.html')">
                                <div class="row no-gutters">
                                    <div class="col-md-4">
                                        <img src="https://pbs.twimg.com/media/EdqjfxzXgAAdIgm?format=jpg&name=4096x4096"
                                             class="card-img" alt="...">
                                    </div>
                                    <div class="col-md-8">
                                        <div class="card-body">
                                            <h5 class="card-title">El trabajo es demasiado complicado</h5>
                                            <p class="card-text">
                                                Resulta que el trabajo es muy dif√≠cil. No sabemos qu√© hacer al respecto,
                                                pero s√≠ es muy complicado.
                                                Pero, ¬Ņqu√© hacer al respecto? Esa es una muy buena pregunta, ya veremos qu√©
                                                se podr√° hacer al respecto.
                                            </p>
                                            <p class="card-text"><small class="text-muted">√öltima actualizaci√≥n hace 3
                                                    minutos</small></p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="card listaCard" onclick="redirect('tomarCurso.html')">
                                <div class="row no-gutters">
                                    <div class="col-md-4">
                                        <img src="https://pbs.twimg.com/media/EdqjfxzXgAAdIgm?format=jpg&name=4096x4096"
                                             class="card-img" alt="...">
                                    </div>
                                    <div class="col-md-8">
                                        <div class="card-body">
                                            <h5 class="card-title">El trabajo es demasiado complicado</h5>
                                            <p class="card-text">
                                                Resulta que el trabajo es muy dif√≠cil. No sabemos qu√© hacer al respecto,
                                                pero s√≠ es muy complicado.
                                                Pero, ¬Ņqu√© hacer al respecto? Esa es una muy buena pregunta, ya veremos qu√©
                                                se podr√° hacer al respecto.
                                            </p>
                                            <p class="card-text"><small class="text-muted">√öltima actualizaci√≥n hace 3
                                                    minutos</small></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="list-messages" role="tabpanel" aria-labelledby="list-messages-list">
                            <div class="card listaCard" onclick="redirect('tomarCurso.html')">
                                <div class="row no-gutters">
                                    <div class="col-md-4">
                                        <img src="https://pbs.twimg.com/media/EdqjfxzXgAAdIgm?format=jpg&name=4096x4096"
                                             class="card-img" alt="...">
                                    </div>
                                    <div class="col-md-8">
                                        <div class="card-body">
                                            <h5 class="card-title">El trabajo es demasiado complicado</h5>
                                            <p class="card-text">
                                                Resulta que el trabajo es muy dif√≠cil. No sabemos qu√© hacer al respecto,
                                                pero s√≠
                                                es muy complicado.
                                                Pero, ¬Ņqu√© hacer al respecto? Esa es una muy buena pregunta, ya veremos qu√©
                                                se
                                                podr√° hacer al respecto.
                                            </p>
                                            <p class="card-text"><small class="text-muted">√öltima actualizaci√≥n hace 3
                                                    minutos</small></p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="card listaCard" onclick="redirect('tomarCurso.html')">
                                <div class="row no-gutters">
                                    <div class="col-md-4">
                                        <img src="https://pbs.twimg.com/media/EdqjfxzXgAAdIgm?format=jpg&name=4096x4096"
                                             class="card-img" alt="...">
                                    </div>
                                    <div class="col-md-8">
                                        <div class="card-body">
                                            <h5 class="card-title">El trabajo es demasiado complicado</h5>
                                            <p class="card-text">
                                                Resulta que el trabajo es muy dif√≠cil. No sabemos qu√© hacer al respecto,
                                                pero s√≠
                                                es muy complicado.
                                                Pero, ¬Ņqu√© hacer al respecto? Esa es una muy buena pregunta, ya veremos qu√©
                                                se
                                                podr√° hacer al respecto.
                                            </p>
                                            <p class="card-text"><small class="text-muted">√öltima actualizaci√≥n hace 3
                                                    minutos</small></p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="card listaCard" onclick="redirect('tomarCurso.html')">
                                <div class="row no-gutters">
                                    <div class="col-md-4">
                                        <img src="https://pbs.twimg.com/media/EdqjfxzXgAAdIgm?format=jpg&name=4096x4096"
                                             class="card-img" alt="...">
                                    </div>
                                    <div class="col-md-8">
                                        <div class="card-body">
                                            <h5 class="card-title">El trabajo es demasiado complicado</h5>
                                            <p class="card-text">
                                                Resulta que el trabajo es muy dif√≠cil. No sabemos qu√© hacer al respecto,
                                                pero s√≠
                                                es muy complicado.
                                                Pero, ¬Ņqu√© hacer al respecto? Esa es una muy buena pregunta, ya veremos qu√©
                                                se
                                                podr√° hacer al respecto.
                                            </p>
                                            <p class="card-text"><small class="text-muted">√öltima actualizaci√≥n hace 3
                                                    minutos</small></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="list-settings" role="tabpanel" aria-labelledby="list-settings-list">
                            <div class="card listaCard" onclick="redirect('tomarCurso.html')">
                                <div class="row no-gutters">
                                    <div class="col-md-4">
                                        <img src="https://pbs.twimg.com/media/EdqjfxzXgAAdIgm?format=jpg&name=4096x4096"
                                             class="card-img" alt="...">
                                    </div>
                                    <div class="col-md-8">
                                        <div class="card-body">
                                            <h5 class="card-title">El trabajo es demasiado complicado</h5>
                                            <p class="card-text">
                                                Resulta que el trabajo es muy dif√≠cil. No sabemos qu√© hacer al respecto,
                                                pero s√≠
                                                es muy complicado.
                                                Pero, ¬Ņqu√© hacer al respecto? Esa es una muy buena pregunta, ya veremos qu√©
                                                se
                                                podr√° hacer al respecto.
                                            </p>
                                            <p class="card-text"><small class="text-muted">√öltima actualizaci√≥n hace 3
                                                    minutos</small></p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="card listaCard" onclick="redirect('tomarCurso.html')">
                                <div class="row no-gutters">
                                    <div class="col-md-4">
                                        <img src="https://pbs.twimg.com/media/EdqjfxzXgAAdIgm?format=jpg&name=4096x4096"
                                             class="card-img" alt="...">
                                    </div>
                                    <div class="col-md-8">
                                        <div class="card-body">
                                            <h5 class="card-title">El trabajo es demasiado complicado</h5>
                                            <p class="card-text">
                                                Resulta que el trabajo es muy dif√≠cil. No sabemos qu√© hacer al respecto,
                                                pero s√≠
                                                es muy complicado.
                                                Pero, ¬Ņqu√© hacer al respecto? Esa es una muy buena pregunta, ya veremos qu√©
                                                se
                                                podr√° hacer al respecto.
                                            </p>
                                            <p class="card-text"><small class="text-muted">√öltima actualizaci√≥n hace 3
                                                    minutos</small></p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="card listaCard" onclick="redirect('tomarCurso.html')">
                                <div class="row no-gutters">
                                    <div class="col-md-4">
                                        <img src="https://pbs.twimg.com/media/EdqjfxzXgAAdIgm?format=jpg&name=4096x4096"
                                             class="card-img" alt="...">
                                    </div>
                                    <div class="col-md-8">
                                        <div class="card-body">
                                            <h5 class="card-title">El trabajo es demasiado complicado</h5>
                                            <p class="card-text">
                                                Resulta que el trabajo es muy dif√≠cil. No sabemos qu√© hacer al respecto,
                                                pero s√≠
                                                es muy complicado.
                                                Pero, ¬Ņqu√© hacer al respecto? Esa es una muy buena pregunta, ya veremos qu√©
                                                se
                                                podr√° hacer al respecto.
                                            </p>
                                            <p class="card-text"><small class="text-muted">√öltima actualizaci√≥n hace 3
                                                    minutos</small></p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="card listaCard" onclick="redirect('tomarCurso.html')">
                                <div class="row no-gutters">
                                    <div class="col-md-4">
                                        <img src="https://pbs.twimg.com/media/EdqjfxzXgAAdIgm?format=jpg&name=4096x4096"
                                             class="card-img" alt="...">
                                    </div>
                                    <div class="col-md-8">
                                        <div class="card-body">
                                            <h5 class="card-title">El trabajo es demasiado complicado</h5>
                                            <p class="card-text">
                                                Resulta que el trabajo es muy dif√≠cil. No sabemos qu√© hacer al respecto,
                                                pero s√≠
                                                es muy complicado.
                                                Pero, ¬Ņqu√© hacer al respecto? Esa es una muy buena pregunta, ya veremos qu√©
                                                se
                                                podr√° hacer al respecto.
                                            </p>
                                            <p class="card-text"><small class="text-muted">√öltima actualizaci√≥n hace 3
                                                    minutos</small></p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="card listaCard" onclick="redirect('tomarCurso.html')">
                                <div class="row no-gutters">
                                    <div class="col-md-4">
                                        <img src="https://pbs.twimg.com/media/EdqjfxzXgAAdIgm?format=jpg&name=4096x4096"
                                             class="card-img" alt="...">
                                    </div>
                                    <div class="col-md-8">
                                        <div class="card-body">
                                            <h5 class="card-title">El trabajo es demasiado complicado</h5>
                                            <p class="card-text">
                                                Resulta que el trabajo es muy dif√≠cil. No sabemos qu√© hacer al respecto,
                                                pero s√≠
                                                es muy complicado.
                                                Pero, ¬Ņqu√© hacer al respecto? Esa es una muy buena pregunta, ya veremos qu√©
                                                se
                                                podr√° hacer al respecto.
                                            </p>
                                            <p class="card-text"><small class="text-muted">√öltima actualizaci√≥n hace 3
                                                    minutos</small></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>

            </div>


            <div class="barra overflow-auto">

                <div class="perfil" style="color: azure;">
                    <div class="row no-gutters">
                        <div class="col">
                            <?php 
                            $img = "https://pbs.twimg.com/media/EiNYM5CWAAAh9PV?format=png&name=240x240";
                            if(!empty($_SESSION["imagen"])){
                                $img = "data:image/jpg;base64," . base64_encode($_SESSION["imagen"]);
                            }
                            ?>
                            <img src='<?php echo $img ?>' alt='Avatar' style="height: auto;">
                        </div>
                    </div>
                    <div class="row no-gutters">
                        <div class="col py-2 text-center">
                            <h3><?php echo $_SESSION["usuario"] ?></h3>
                        </div>
                    </div>
                    <div class="row no-gutters">
                        <div class="col px-2 text-center">
                            <p><?php echo $_SESSION["correo"] ?></p>

                        </div>
                    </div>
                    <div class="row no-gutters">
                        <div class="col px-2 text-right">
                            <p><?php echo $_SESSION["privilegio"] ?></p>

                        </div>
                    </div>
                    <div class="row no-gutters">
                        <div class="col py-3 text-center">
                            <p><?php echo $_SESSION["nombre"] . ' ' . $_SESSION["paterno"] . ' ' . $_SESSION["materno"] ?></p>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <footer>
            <div class="container">
                <div class="row">
                    <div class="col">
                        qu√© onda
                    </div>
                    <div class="col">
                        qu√© tal
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        c√≥mo va todo?
                    </div>
                </div>
            </div>
        </footer>
    </body>

</html>