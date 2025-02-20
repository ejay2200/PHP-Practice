<?php
    $matrix =[
                [ 12, 23, 34],
                [ 45, 55, 62],
                [ 71, 84, 90]
            ];

    $row=0;
    $rows=count($matrix);

    while ($row<$rows){
        $col=0;
        $cols=count($matrix[$row]);
        
        while($col<$cols){
            if ($matrix[$row][$col] % 2 == 0){
                echo $matrix[$row][$col] . " ";
            }
            $col++;
        }
        $row++;
    }
?>
