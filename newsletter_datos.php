<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recogida datos Newsletter</title>
</head>
<body>
    <?php
        if(empty($_POST['nombre'])){
            echo 'Error: Falta nombre';
            exit ;
        }
        if(empty($_POST['email'])){
            echo 'Error: Falta email';
            exit ;
        }
        $nombre=$_POST['nombre'];
        $email=$_POST['email'];

        //QUE GUARDE EN LA DB
    ?>
</body>
</html>