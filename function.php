<?php
function add($x,$y){
return $x + $y;

}

echo add(5,4);
function hello($x){
    $user = $x;
    if($user==="Osama"){
        echo "hello ".$user;
    }else{
        echo "Bye ".$user;
    }

    
}
hello("Osama");
echo "<br>";
echo hello("Anas");
?>