<?php
    $numero = "1234";
    $arr = str_split($numero);
    $arrP = $_POST["numero"];
    $pica = 0;
    $fija = 0;
    for($i = 0; $i<4; $i++){
        if($arr[$i] == $arrP[$i]){

            $fija += 1;
            $pica -= 1;
        }
        else{
            if(str_contains($numero , $arrP[$i])){
                $pica += 1;
            }
        }
    }
    echo "<h3> Numero procesado : ".$_POST["numero"]."</h3>";
    if ($pica < 0 ) echo "Numero de Picas = 0";
    else echo "Numero de Picas = ". $pica;
    echo "<hr>";
    echo "Numero de Fijas = ". $fija;
    echo "<hr><a href = 'picas_fijas.php'>Volver<a>";
    if($fija == 4){
        echo "<h1>Felicidades lo encontraste<h1>";

    }
?>