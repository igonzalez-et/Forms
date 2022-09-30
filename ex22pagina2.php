<?php
    $quantity= $_POST["quantitat"];
    for($i=0; $i < $quantity; $i++){
        echo "<a href='ex22pagina3.php?comanda=".$i."'>Comanda ".$i. "</a><br>";
    }


?>