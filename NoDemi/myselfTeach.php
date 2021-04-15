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
    <!-- NAVBAR -->
    <nav class='nav navbar navbar-expand-lg navbar-dark fixed-top fixed-top-2'>
        <form action='buscar.html' method='get' class='form-inline ml-auto'>
            <div class='md-form my-0'>
                <input class='form-control' type='text' name='busqueda' id='busqueda' placeholder='Search'
                    aria-label='Search'>
            </div>
            <button href='#!' class='btn btn-primary btn-outline-white btn-md my-0 ml-sm-2'
                type='submit'>Buscar</button>
        </form>
    </nav>

    <nav class="nav navbar navbar-expand-lg navbar-dark fixed-top">
        <a class="navbar-brand" href="index.html">NoDemi</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup"
            aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse navbar-right" id="navbarNavAltMarkup">

            <div class="dropdown ml-auto iniciarSesionDrop">
                <button class="btn btn-secondary dropdown-toggle pull-right" type="button" id="dropdownMenuButton"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    iniciar sesion
                </button>
                <div class="dropdown-menu dropdown-menu-right">
                    <form class="px-4 py-3" action="ConfigUser.html" onsubmit="return validacionInicioSesion()">
                        <div class="form-group">
                            <label for="emailIniciarSecion">Email</label>
                            <input type="email" class="form-control" id="emailIniciarSesion"
                                placeholder="email@example.com">
                        </div>

                        <div class="form-group">
                            <label for="usuarioIniciarSesion">Usuario</label>
                            <input type="text" class="form-control" id="usuarioIniciarSesion" placeholder="Usuario">
                        </div>
                        <div class="form-group">
                            <label for="contraseñaIniciarSesion">Contraseña</label>
                            <input type="password" class="form-control" id="contraseñaIniciarSesion"
                                placeholder="Contraseña">
                        </div>
                        <button type="submit" class="btn btn-primary">Iniciar Sesión</button>
                    </form>

                </div>


            </div>

            <div class="dropdown RegistrarseDrop">
                <button class="btn btn-secondary dropdown-toggle pull-right" type="button" id="dropdownMenuButton"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Registrarse
                </button>
                <div class="dropdown-menu dropdown-menu-right">
                    <form class="px-4 py-3" onsubmit="return validacionRegistrarse()">
                        <div class="form-group">
                            <label for="emailRegistrarse">Email</label>
                            <input type="email" class="form-control" id="emailRegistrarse"
                                placeholder="email@example.com">
                        </div>
                        <div class="form-group">
                            <label for="usuarioRegistrarse">Usuario</label>
                            <input type="text" class="form-control" id="usuarioRegistrarse" placeholder="Usuario">
                        </div>
                        <div class="form-group">
                            <label for="contraseñaRegistrarse">Contraseña</label>
                            <input type="password" class="form-control" id="contraseñaRegistrarse"
                                placeholder="Contraseña">
                        </div>
                        <div class="form-group">
                            <label for="contraseñaConfirmarRegistrarse">Confirmar Contraseña</label>
                            <input type="password" class="form-control" id="contraseñaConfirmarRegistrarse"
                                placeholder="Confirmar Contraseña">
                        </div>
                        <button type="submit" class="btn btn-primary">Registrarse</button>
                    </form>

                </div>
            </div>

        </div>
    </nav>
    <!-- FIN NAVBAR -->


    <div class="contGlobal">
        <div class="mainContent">

            <div class="jumbotron" style="background: #e1cce5">
                <h1>¡Bienvenido de nuevo ira3ck!</h1>
                <p class="mb-5">Ya estamos listos para aprender</p>
            </div>

            <button type="button" class="btn btn-success btn-lg p-2 px-5 my-5" onclick="redirect('crearCurso.html')">
                <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-plus-square-fill" fill="currentColor"
                    xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                        d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm6.5 4.5a.5.5 0 0 0-1 0v3h-3a.5.5 0 0 0 0 1h3v3a.5.5 0 0 0 1 0v-3h3a.5.5 0 0 0 0-1h-3v-3z" />
                </svg> Crea un nuevo Curso
            </button>

            <div class="row">
                <div class="col">
                    <div class="list-group list-group-horizontal" id="list-tab" role="tablist">
                        <a class="list-group-item list-group-item-action active text-center" id="list-home-list"
                            data-toggle="list" href="#list-home" role="tab" aria-controls="home">Continuar Viendo</a>
                        <a class="list-group-item list-group-item-action text-center" id="list-profile-list"
                            data-toggle="list" href="#list-profile" role="tab" aria-controls="profile">Nuevos</a>
                        <a class="list-group-item list-group-item-action text-center" id="list-messages-list"
                            data-toggle="list" href="#list-messages" role="tab" aria-controls="messages">Cursos
                            terminados</a>
                        <a class="list-group-item list-group-item-action text-center" id="list-settings-list"
                            data-toggle="list" href="#list-settings" role="tab" aria-controls="settings">Todos mis
                            Cursos</a>
                        <a class="list-group-item list-group-item-action text-center" id="list-settings-list"
                            data-toggle="list" href="#list-settings" role="tab" aria-controls="course">Mis Cursos
                            Creados</a>
                    </div>
                </div>
            </div>

            <div class="listaNotas overflow-auto my-2">

                <div class="notaLista tab-content" id="nav-tabContent">

                    <div class="tab-pane fade show active" id="list-home" role="tabpanel"
                        aria-labelledby="list-home-list">
                        <div class="card listaCard" onclick="Redirect('preview.php')">
                            <div class="row no-gutters">
                                <div class="col-md-4">
                                    <img src="https://pbs.twimg.com/media/EdqjfxzXgAAdIgm?format=jpg&name=4096x4096"
                                        class="card-img" alt="...">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title">El trabajo es demasiado complicado</h5>
                                        <p class="card-text">
                                            Resulta que el trabajo es muy difícil. No sabemos qué hacer al respecto,
                                            pero sí es muy complicado.
                                            Pero, ¿qué hacer al respecto? Esa es una muy buena pregunta, ya veremos qué
                                            se podrá hacer al respecto.
                                        </p>
                                        <p class="card-text"><small class="text-muted">Última actualización hace 3
                                                minutos</small></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="list-profile" role="tabpanel" aria-labelledby="list-profile-list">
                        <div class="card listaCard" onclick="Redirect('preview.php')">
                            <div class="row no-gutters">
                                <div class="col-md-4">
                                    <img src="https://pbs.twimg.com/media/EdqjfxzXgAAdIgm?format=jpg&name=4096x4096"
                                        class="card-img" alt="...">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title">El trabajo es demasiado complicado</h5>
                                        <p class="card-text">
                                            Resulta que el trabajo es muy difícil. No sabemos qué hacer al respecto,
                                            pero sí es muy complicado.
                                            Pero, ¿qué hacer al respecto? Esa es una muy buena pregunta, ya veremos qué
                                            se podrá hacer al respecto.
                                        </p>
                                        <p class="card-text"><small class="text-muted">Última actualización hace 3
                                                minutos</small></p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card listaCard" onclick="Redirect('preview.php')">
                            <div class="row no-gutters">
                                <div class="col-md-4">
                                    <img src="https://pbs.twimg.com/media/EdqjfxzXgAAdIgm?format=jpg&name=4096x4096"
                                        class="card-img" alt="...">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title">El trabajo es demasiado complicado</h5>
                                        <p class="card-text">
                                            Resulta que el trabajo es muy difícil. No sabemos qué hacer al respecto,
                                            pero sí es muy complicado.
                                            Pero, ¿qué hacer al respecto? Esa es una muy buena pregunta, ya veremos qué
                                            se podrá hacer al respecto.
                                        </p>
                                        <p class="card-text"><small class="text-muted">Última actualización hace 3
                                                minutos</small></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="list-messages" role="tabpanel" aria-labelledby="list-messages-list">
                        <div class="card listaCard" onclick="Redirect('preview.php')">
                            <div class="row no-gutters">
                                <div class="col-md-4">
                                    <img src="https://pbs.twimg.com/media/EdqjfxzXgAAdIgm?format=jpg&name=4096x4096"
                                        class="card-img" alt="...">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title">El trabajo es demasiado complicado</h5>
                                        <p class="card-text">
                                            Resulta que el trabajo es muy difícil. No sabemos qué hacer al respecto,
                                            pero sí
                                            es muy complicado.
                                            Pero, ¿qué hacer al respecto? Esa es una muy buena pregunta, ya veremos qué
                                            se
                                            podrá hacer al respecto.
                                        </p>
                                        <p class="card-text"><small class="text-muted">Última actualización hace 3
                                                minutos</small></p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card listaCard" onclick="Redirect('preview.php')">
                            <div class="row no-gutters">
                                <div class="col-md-4">
                                    <img src="https://pbs.twimg.com/media/EdqjfxzXgAAdIgm?format=jpg&name=4096x4096"
                                        class="card-img" alt="...">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title">El trabajo es demasiado complicado</h5>
                                        <p class="card-text">
                                            Resulta que el trabajo es muy difícil. No sabemos qué hacer al respecto,
                                            pero sí
                                            es muy complicado.
                                            Pero, ¿qué hacer al respecto? Esa es una muy buena pregunta, ya veremos qué
                                            se
                                            podrá hacer al respecto.
                                        </p>
                                        <p class="card-text"><small class="text-muted">Última actualización hace 3
                                                minutos</small></p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card listaCard" onclick="Redirect('preview.php')">
                            <div class="row no-gutters">
                                <div class="col-md-4">
                                    <img src="https://pbs.twimg.com/media/EdqjfxzXgAAdIgm?format=jpg&name=4096x4096"
                                        class="card-img" alt="...">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title">El trabajo es demasiado complicado</h5>
                                        <p class="card-text">
                                            Resulta que el trabajo es muy difícil. No sabemos qué hacer al respecto,
                                            pero sí
                                            es muy complicado.
                                            Pero, ¿qué hacer al respecto? Esa es una muy buena pregunta, ya veremos qué
                                            se
                                            podrá hacer al respecto.
                                        </p>
                                        <p class="card-text"><small class="text-muted">Última actualización hace 3
                                                minutos</small></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="list-settings" role="tabpanel" aria-labelledby="list-settings-list">
                        <div class="card listaCard" onclick="Redirect('preview.php')">
                            <div class="row no-gutters">
                                <div class="col-md-4">
                                    <img src="https://pbs.twimg.com/media/EdqjfxzXgAAdIgm?format=jpg&name=4096x4096"
                                        class="card-img" alt="...">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title">El trabajo es demasiado complicado</h5>
                                        <p class="card-text">
                                            Resulta que el trabajo es muy difícil. No sabemos qué hacer al respecto,
                                            pero sí
                                            es muy complicado.
                                            Pero, ¿qué hacer al respecto? Esa es una muy buena pregunta, ya veremos qué
                                            se
                                            podrá hacer al respecto.
                                        </p>
                                        <p class="card-text"><small class="text-muted">Última actualización hace 3
                                                minutos</small></p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card listaCard" onclick="Redirect('preview.php')">
                            <div class="row no-gutters">
                                <div class="col-md-4">
                                    <img src="https://pbs.twimg.com/media/EdqjfxzXgAAdIgm?format=jpg&name=4096x4096"
                                        class="card-img" alt="...">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title">El trabajo es demasiado complicado</h5>
                                        <p class="card-text">
                                            Resulta que el trabajo es muy difícil. No sabemos qué hacer al respecto,
                                            pero sí
                                            es muy complicado.
                                            Pero, ¿qué hacer al respecto? Esa es una muy buena pregunta, ya veremos qué
                                            se
                                            podrá hacer al respecto.
                                        </p>
                                        <p class="card-text"><small class="text-muted">Última actualización hace 3
                                                minutos</small></p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card listaCard" onclick="Redirect('preview.php')">
                            <div class="row no-gutters">
                                <div class="col-md-4">
                                    <img src="https://pbs.twimg.com/media/EdqjfxzXgAAdIgm?format=jpg&name=4096x4096"
                                        class="card-img" alt="...">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title">El trabajo es demasiado complicado</h5>
                                        <p class="card-text">
                                            Resulta que el trabajo es muy difícil. No sabemos qué hacer al respecto,
                                            pero sí
                                            es muy complicado.
                                            Pero, ¿qué hacer al respecto? Esa es una muy buena pregunta, ya veremos qué
                                            se
                                            podrá hacer al respecto.
                                        </p>
                                        <p class="card-text"><small class="text-muted">Última actualización hace 3
                                                minutos</small></p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card listaCard" onclick="Redirect('preview.php')">
                            <div class="row no-gutters">
                                <div class="col-md-4">
                                    <img src="https://pbs.twimg.com/media/EdqjfxzXgAAdIgm?format=jpg&name=4096x4096"
                                        class="card-img" alt="...">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title">El trabajo es demasiado complicado</h5>
                                        <p class="card-text">
                                            Resulta que el trabajo es muy difícil. No sabemos qué hacer al respecto,
                                            pero sí
                                            es muy complicado.
                                            Pero, ¿qué hacer al respecto? Esa es una muy buena pregunta, ya veremos qué
                                            se
                                            podrá hacer al respecto.
                                        </p>
                                        <p class="card-text"><small class="text-muted">Última actualización hace 3
                                                minutos</small></p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card listaCard" onclick="Redirect('preview.php')">
                            <div class="row no-gutters">
                                <div class="col-md-4">
                                    <img src="https://pbs.twimg.com/media/EdqjfxzXgAAdIgm?format=jpg&name=4096x4096"
                                        class="card-img" alt="...">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title">El trabajo es demasiado complicado</h5>
                                        <p class="card-text">
                                            Resulta que el trabajo es muy difícil. No sabemos qué hacer al respecto,
                                            pero sí
                                            es muy complicado.
                                            Pero, ¿qué hacer al respecto? Esa es una muy buena pregunta, ya veremos qué
                                            se
                                            podrá hacer al respecto.
                                        </p>
                                        <p class="card-text"><small class="text-muted">Última actualización hace 3
                                                minutos</small></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="tab-pane fade show active" id="list-course" role="tabpanel"
                        aria-labelledby="list-home-list">
                        <div class="card listaCard" onclick="Redirect('preview.php')">
                            <div class="row no-gutters">
                                <div class="col-md-4">
                                    <img src="https://pbs.twimg.com/media/EdqjfxzXgAAdIgm?format=jpg&name=4096x4096"
                                        class="card-img" alt="...">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title">El trabajo es demasiado complicado</h5>
                                        <p class="card-text">
                                            Resulta que el trabajo es muy difícil. No sabemos qué hacer al respecto,
                                            pero sí es muy complicado.
                                            Pero, ¿qué hacer al respecto? Esa es una muy buena pregunta, ya veremos qué
                                            se podrá hacer al respecto.
                                        </p>
                                        <p class="card-text"><small class="text-muted">Última actualización hace 3
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
                        <img src="https://pbs.twimg.com/media/EiNYZHXWsAE1525?format=png&name=360x360" alt="Avatar">
                    </div>
                </div>
                <div class="row no-gutters">
                    <div class="col py-2 text-center">
                        <h3>ira3ck</h3>
                    </div>
                </div>
                <div class="row no-gutters">
                    <div class="col px-2 text-center">
                        <p>ira3ck@correo.com</p>

                    </div>
                </div>
                <div class="row no-gutters">
                    <div class="col py-3 text-center">
                        <p>Pequeña pero concisa descripción del usuario.</p>
                    </div>
                </div>
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
</body>

</html>