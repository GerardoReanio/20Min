<!DOCTYPE html>
<html class="bg-black">
    <head>
        <meta charset="UTF-8">
        <title>Usuario Registrado</title>
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="//cdnjs.cloudflare.com/ajax/libs/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <!-- Theme style -->
        <link href="static/css/AdminLTE.css" rel="stylesheet" type="text/css" />

    </head>
    <body class="bg-black">

        <div class="form-box" id="login-box">
            <div class="header">Usuario Registrado</div>
           
                <div class="body bg-gray" align="center">
                    <h2>Felicitaciones te has registrado correctamente</h2>
                </div>
                <div class="footer">            
                    <a href="tcpdf/Generador/FichaAcreditacion.php?email=<?php echo $_GET['email']."&nombre=". $_GET['nombre'];?>" target="_blank"><button class="btn btn-success btn-block"><b>Descargar Ficha Acreditación</b></button></a>
                    
                    <hr>
                    <a href="index.php" >Registrar otro usuario</a>
                    <br>
                    <a href="ListaUsuarios.php">Ver inscritos</a>
                </div>
        </div>

        <script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js" type="text/javascript"></script>

    </body>
</html>