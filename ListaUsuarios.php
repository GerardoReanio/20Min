<?php 

include_once('Settings/conexion.php');

$Usuarios = "SELECT * FROM Usuario";
$res_Usuarios = mysql_query($Usuarios);

?>
<!DOCTYPE html>
<html >
    <head>
        <meta charset="UTF-8">
        <title>Lista de Usuario </title>
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="//cdnjs.cloudflare.com/ajax/libs/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <!-- Theme style -->
        <link href="static/css/AdminLTE.css" rel="stylesheet" type="text/css" />

    </head>
    <body >
		<h1 align="center">Usuarios Registrados</h1>
		<hr>
		<div class="container " >
			<div class="row">
				<div class="col-lg-12">
					<div class="box-body table-responsive no-padding">
                        <table class="table">
                            <tbody>
                                <tr>
                                    <th>ID</th>
                                    <th>Nombre </th>
                                    <th>Email</th>
                                    <th>Estado</th>
                                </tr>
                            <?php 
                                $cont = 1;
                               	while($row_Usuario = mysql_fetch_assoc($res_Usuarios)){
                               ?> 
                                    <tr>
                                        <td><?php echo $cont; ?></td>
                                        <td><?php echo $row_Usuario['Nombre']?></td>
                                        <td><?php echo $row_Usuario['Email']; ?></td>
                                        <td><?php if(!strcmp($row_Usuario['Estado'], '1')){ ?><i style="color: green" class="fa fa-check-circle fa-2x"></i> <?php }else{ ?> <i style="color: red" class="fa fa-times fa-2x"></i> <?php } ?></td>
                                    </tr>

                                <?php 
                               	 	$cont = $cont + 1;
                                }
								?>    
                            </tbody>
                           </table>
					</div>
				</div>
			</div>
		</div>

        <script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js" type="text/javascript"></script>

    </body>
</html>