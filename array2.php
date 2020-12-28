<?php
    $animals = array("cat","Dog","Bird");
    echo $arrLegth = count($animals), "<br />";
    for( $x = 0; $x < $arrLegth; $x++){
        echo $x, ".", $animals[$x],"<br />";
    }
?>