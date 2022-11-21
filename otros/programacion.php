<html>
    <head>
        <style>
            p{color:red;}
            *{color:blue;}
        </style>
    </head>
<body>
<?php
echo 'tacataca';
echo ' HOLA HOLA ';
echo '<p> Que tal? </p>';

$variable='a';
echo $variable.'<br>';
$variable=9;
echo '<p>'.$variable.'</p>';

$numero1=5;
$numero2=6;
$resultado=$numero1+$numero2;
echo $resultado;

// . CONCATENAR HTML CON PHP
// + SUMAR
// - RESTAR
// / DIVIDIR
// * MULTIPLICAR

// () llaves de condicion
// {} llaves de ejecucion
if(1==1){
    echo 'BBBBB';
}
if(2==1){
    echo 'AAAAA';
}
if(2!=1){
    echo 'CCCC';
}
if(1>1){}
if(1>=1){}

// condicion de entrada
if(1==1){
    echo 'LLLLL';
}else{
    echo 'GGGG';
}

if(4==1){
    echo 'LLasaL';
}else{
    echo 'GGGaaa';
}

for ($i=0; $i < 20; $i++) { 
    # code...
    echo $i.'<br>';
    echo 'nombre';
}

$String="dsfdfsdd4*/*/*f";
$int=8764543;
$float=7.25; // 8
$Boolean=false

if($Boolean){
    echo "COSA"
}

if(1==1){
    echo "COSITA"
}

if (1==1 & 2==2 & 3==3){
    echo "y";
    echo "<br>";
}

if(1==2 | 2==3){
    echo "OR";
    echo "<br>";
}

if(1==1 & 2==3 | 3==3 & 4!==4 | 5==5){
    echo "Y OR";
    echo "<br>";
}

if(1==2){
    echo "el if";
    echo "<br>";
}else if(1==3){
    echo "el elseif 1";
    echo "<br>";
}else if(1=1){
    echo "el elseif 2";
    echo "<br>";
}else(){
    echo "el else";
    echo "<br>";
}

echo 'hola'.$int.'<p>asd</p>';

$cumple_jero="14/12";
$cumple_omar="19/01";

$hoy="17/11";
$hoy="19/01";
if($cumple_jero==$hoy){
    echo 'class="cumple"';
    echo '<p>jero</p>';
}else if($cumple_omar){
    echo 'class="cumplee"';
    echo '<p>omar</p>';
}

//0==false
//1==true

echo '<br>';

$a='9.5';
$b=9.5;
// echo $var;

var_dump(1==1);
echo '<br>';
var_dump(9);
echo '<br>';
var_dump('a');
echo '<br>';
var_dump(9.5);
echo '<br>';
echo '<hr>';

if($a==$b){
    echo "OK";
}

---
echo $a;
echo '<br>';
echo $b;
echo '<br>';
if ($a==b){
    echo 'OK';
}

?>
</body>
</html>