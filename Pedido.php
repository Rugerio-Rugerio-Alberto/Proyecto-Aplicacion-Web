<?php 

include("Conexion_BD.php");

if (isset($_POST['register'])) {
    if (isset($_POST['name'], $_POST['email'], $_POST['telephone'], $_POST['subject'], $_POST['num'], $_POST['postal'], $_POST['direccion'])) {
	    $name = trim($_POST['name']);
        $email = trim($_POST['email']);
        $fon = trim($_POST['telephone']);
        $producto = trim($_POST['subject']);
        $cantidad = trim($_POST['num']);
        $postal = trim($_POST['postal']);
        $address = trim($_POST['direccion']);
	    $fechareg = date("d/m/y");
	    $consulta = "INSERT INTO pedido(`nombre`, `email`, `telefono`, `producto`, `cantidad`, `postal`, `direccion`, `fecha_reg`) VALUES ('$name','$email','$fon','$producto','$cantidad','$postal','$address','$fechareg')";
	    $resultado = mysqli_query($conex,$consulta);
	    if ($resultado) {
            ?> 
            
            <!DOCTYPE html>
            <html>
            <head>
                <title></title>
                <style type="text/css">
                    body{
                        text-align: center;
                        background-color: #0B318F;
                    }

                    h3{
                        color: white;
                        font-size: 80px;
                    }

                    .btn{                       
						border: none;
						outline: none;
						padding: 10px 20px;
						border-radius: 50px;
						color: #333;
						background: white;
						margin-bottom: 50px;
						box-shadow: 0 3px 20px 0 #0000003b;
                    }
                </style>
            </head>
            <body>

                <h3 class="bad">¡Tu pedido ha sido exitoso!</h3>
                <button class="btn "><a href="Products.html">Productos</a></button>
            
            </body>
            </html>

            <?php
                    } else {
                        ?> 
                        <h3 class="bad">¡Ups ha ocurrido un error!</h3>
                       <?php
                    }
                }   else {
                        ?> 
                        <h3 class="bad">¡Por favor complete los campos!</h3>
                       <?php
                }
            }
            
