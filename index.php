<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>iotech</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,400i,700" rel="stylesheet" />
    </head>
    <body>
        <?php
            include "./database/db.php";
            $db = new DBConnect('localhost', 'root', '', 'iotech_db');

            // Vistas
            include "./views/principal.view.php";
            include "./views/registrar.view.php";
            include "./views/usuario.view.php";
            include "./views/proyecto.view.php";

            // Modelos
            include "./models/proyecto.php";
            include "./models/usuario.php";

            // Controladores
            include "./controllers/proyecto.controller.php";
            include "./controllers/usuario.controller.php";

            $principalView = new PrincipalView();
            $registrarView = new RegistrarView();
            $usuarioView = new UsuarioView(new ProyectoModel($db));

            if (isset($_POST['action']) && $_POST['action'] == "registrar") {
                $proyectoModel = new ProyectoModel($db);
                $proyectoModel->nombreEmpresa = $db->real_escape_string(strval($_POST["nombreEmpresa"]));
                $proyectoModel->NIT = $db->real_escape_string(strval($_POST["NIT"]));
                $proyectoModel->telefono = $db->real_escape_string(strval($_POST["telefono"]));
                $proyectoModel->email = $db->real_escape_string(strval($_POST["email"]));
                $proyectoModel->propuesta = $db->real_escape_string(strval($_POST["propuesta"]));

                $proyectoController = new ProyectoController($proyectoModel);

                // Muestra la barra de navegacion de la pagina.
                echo $principalView->outputNavigation();

                // Llamar accion 'registrar' del controlador proyecto para registrar el proyecto en la base de datos.
                echo $proyectoController->registrar();
            } else if (isset($_POST['action']) && $_POST['action'] == "autenticacion") {
                // Captura y escapa los valores provenientes de la peticion POST.
                $usuarioModel = new Usuario(
                    $db,
                    $db->real_escape_string(strval($_POST["username"])),
                    $db->real_escape_string(strval($_POST["password"]))
                );
                
                // Inicializar los modelos.
                $proyectoModel = new ProyectoModel($db);
                $usuarioController = new UsuarioController($usuarioModel, $proyectoModel);
                
                // Validar las credenciales de usuario.
                $resultado = $usuarioController->autenticar();

                if ($resultado[0]) {
                    $proyectoView = new ProyectoView($proyectoModel);
                    echo $principalView->outputNavigation();
                    echo $proyectoView->listarProyectos();
                } else {
                    echo $resultado[1];
                }
            } else if (isset($_GET['pagina']) && $_GET['pagina'] == "autenticacion") {
                echo $usuarioView->output();
            } else if (isset($_GET['pagina']) && $_GET['pagina'] == "registrar") {
                echo $principalView->outputNavigation();
                echo $registrarView->output();
            } else {
                echo $principalView->output();
            }

            $db->close();
        ?>
    </body>
</html>

