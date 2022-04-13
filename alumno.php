<?php 
    //include("conexion.php");
    //$con=conectar();
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Neubox Problemas</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        
    </head>
    <body>
        <div class="container mt-12">
            <div class="row"> 
                <div class="col-md-6">
                    <h1>Ejercicio 1</h1>
                    <form action="validador1.php" method="POST" enctype="multipart/form-data">
                        <input type="file" class="form-control mb-3" name="problema1" placeholder="Problema 1">
                        <input type="submit" class="btn btn-primary">
                    </form>
                </div>

                <div class="col-md-6">
                    <h1>Ejercicio 2</h1>
                    <form action="Validador2.php" method="POST" enctype="multipart/form-data">
                        <input type="file" class="form-control mb-3" name="problema2" placeholder="Problema 2">
                        <input type="submit" class="btn btn-primary">
                    </form>
                </div>
            </div>  
        </div>
    </body>
</html>