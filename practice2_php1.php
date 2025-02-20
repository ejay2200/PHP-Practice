<?php
    $arrayFruit=['apple', 'kiwi', 'grapes', 'pineapples', 'watermelon'];

    echo "<ol>";

    for($x = 0; $x < count($arrayFruit); $x++){
        echo "<li>" . $arrayFruit[$x] . "</li>";
    }

    echo "</ol>" ;
?>
