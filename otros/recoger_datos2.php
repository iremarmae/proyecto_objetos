<?php
$esmayor=false;

if($_POST['edad']>=18){
    $esmayor=true;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    echo 'Nombre='.$_POST['name'].'<br>';
    echo 'Edad='.$_POST['edad'].'<br>';


    if($_POST['edad']>=18){
        echo '<div style="color:green;">';
        echo 'Eres mayor de 18<br><button href="url"> Click aqui</button>';
    }else{
        echo '<div style="color:red;">';
        echo 'Eres un criajo<br>';
    }
    echo '</div>';
    ?>
</body>
</html>