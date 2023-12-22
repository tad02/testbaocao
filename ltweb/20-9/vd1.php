<!DOCTYPE html>
<html lang="en">

<?php 
    const HOST = 'localhost';
    define('DB',"bookstore");
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        $n = 7;
        ?>
        <table border=1">
            <?php
            for($i = 1 ; $i <= 10 ; $i++)
            {
                echo "<tr> <td> $n * $i = " .($n*$i)."</td> </tr>"; 
            }
            ?>
        </table>
</body>
</html>