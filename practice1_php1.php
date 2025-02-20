<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Triangle Area Calculator</title>
</head>
<body>
    <h2>Triangle Area Calculator</h2>
    <!--form[method=POST]>input:number[id=side$ name=side$]*3+button:submit{Done}-->
    <form action="" method="POST">
        <!--label[for=side$]{Side $}*3-->
        <label for="side1">Side 1</label>
        <input type="number" name="side1" id="side1"><br><br>
        <label for="side2">Side 2</label>
        <input type="number" name="side2" id="side2"><br><br>
        <label for="side3">Side 3</label>
        <input type="number" name="side3" id="side3"><br><br>
        <button type="submit">Calculate</button>

    </form>

    <?php
        if($_SERVER["REQUEST_METHOD"] === "POST"){
            $side1=$_POST["side1"];
    
            $side2=$_POST["side2"];

            $side3=$_POST["side3"];

            $s=($side1+$side2+$side3)/2;
            
            $calculateAreaOfTriangle=$s*($s-$side1)*($s-$side2)*($s-$side3);
            
            $area=$calculateAreaOfTriangle**0.5;

            if($calculateAreaOfTriangle >0){
                echo "<h3>The Area of the Triangle is " . number_format($area,2) . " square units.</h3>";
            } else{
                echo "<h3>Invalid sides of the Triangle!</h3>";
            }
        }
    ?>

</body>
</html>