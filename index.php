<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,400i,700" rel="stylesheet" />
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="#">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <?php
            include "./views/principal.view.php";
            include "./views/registrar.view.php";

            $principalView = new PrincipalView();
            $registrarView = new RegistrarView();

            if (isset($_POST['action']) && $_POST['action'] == "registrar") {
                # registrar
                echo "<div>POST Registrar</div>";
            } else if (isset($_POST['action']) && $_POST['action'] == "autenticacion") {
                # autenticar
            } else if (isset($_GET['pagina']) && $_GET['pagina'] == "autenticacion") {
                echo $principalView->outputNavigation();
            } else if (isset($_GET['pagina']) && $_GET['pagina'] == "registrar") {
                echo $principalView->outputNavigation();
                echo $registrarView->output();
            } else {
                echo $principalView->output();
            }
        ?>
    </body>
</html>

