<?php 

include("Conexion_BD.php");

if (isset($_POST['register'])) {
    if (strlen($_POST['name']) >= 1 && strlen($_POST['email']) >= 1) {
	    $name = trim($_POST['name']);
	    $email = trim($_POST['email']);
	    $fechareg = date("d/m/y");
	    $consulta = "INSERT INTO registro(nombre, email, fecha_reg) VALUES ('$name','$email','$fechareg')";
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

                <h3 class="bad">¡Tu registro ha sido exitoso!</h3>
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
