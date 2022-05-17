<?php

echo "Laço For" . "<br>";
for($i=0; $i<=10; $i++){
    echo $i . "<br>";
}

echo "<br>Laço While</br>";
$i = 0;
while($i<=10){
    echo $i . "<br>";
    $i++;
}

echo "<br>Laço Do While</br>";
$i = 0;
do{
    echo $i . "<br>";
    $i++;
}while($i<=10);

echo "<br>Decisão</br>";
$i = 0;
    if($i < 10){
        echo "Valor da variável I é " . $i . " e passou no IF";
    }elseif($i == 10) {
        echo "Valor da variável I é " . $i . " e passou no ELSE IF";
    }else{
        echo "Valor da variável I é " . $i . " e passou no ELSE";
    }



?>