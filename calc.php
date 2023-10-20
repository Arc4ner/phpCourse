<?php

function add($x,$y){return $x + $y;}
function sub($x,$y){return$x + $y;}
function div($x,$y){return$x + $y;}
function mul($x,$y){return $x + $y;}


$number1=$_GET["number1"];
$number2=$_GET["number2"];
$op=$_GET["op"];
if(empty($number1)){
    $result="الرقم الأول فارغ";
}elseif(empty($number2)){
    $result="الرقم الثاني فارغ";
}elseif(empty($op)){
    $result="يرجى إدخال العملية";
}else{
    if($op === "+"){
      echo add($_GET["number1"],$_GET["number2"]);
    }elseif($op === "-"){
       echo sub($_GET["number1"],$_GET["number2"]); 
    }elseif($op === "*"){
       echo mul($_GET["number1"],$_GET["number2"]);
    }elseif($op === "/"){
        echo div($_GET["number1"],$_GET["number2"]);
    }
}


?>



<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>calculator</title>
    
</head>
<body>
<div class="container">
    <form action="calc.php" method="GET" class="form">
  <div>     
<label>Enter Number1:</label>
<input type="number" id="num1" name="number1" class="form-control">
</div>
<br>
<div>     
<label>Enter Number2:</label>
<input type="number" id="num2" name="number2" class="form-control">
</div>
<br>
<div>     
<label>Operation</label>
<input type="text" name="op" class="form-control">
</div>


<div class="alert alert-success">
    <?php
    echo $result
    ?>
</div>


<div>
<br>
<input type="submit" name="" class="btn btn-primary">
</div>




</form>
</div>    
</body>
</html>