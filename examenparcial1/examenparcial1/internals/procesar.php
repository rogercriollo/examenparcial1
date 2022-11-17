<?php
    $nombres=$_POST['nombres'];
    $hs=$_POST['hs'];
    $hsh=$_POST['altura'];
    $ot=$_POST['distancia'];
    $cp=$_POST['circunferencia'];
    $t=$_POST['tcalculo'];
    $peso=$_POST['peso'];

    if($t == 'macho'){
        $calculo =-1.4*$hs + 0.7*$cp + 4;
        echo "<strong>".$nombres."</strong>"." tiene una grasa corporal de ".$calculo;
    }else if ($t == 'hembra'){
        $calculo =-1.7*$hs + 0.93*$cp + 5;
        echo "<strong>".$nombres."</strong>"." tiene una grasa corporal de ".$calculo;
    }else if ($t == 'imc'){
        $calculo = $peso/($hsh * ot);
        echo "<strong>".$nombres."</strong>"." tiene un índice de masa corporal de ".$calculo;
    }

    
?>