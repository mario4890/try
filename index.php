<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Silnia</title>
    </head>
    <body>
        <?php
       $n = 5;
       
       $silnia = 1;
       for ($i=1; $i<=$n; $i++) {
         $silnia *= $i;
       }
       
       if($n < 0)
       {
           echo "-1";
       }
 else {
           echo ("silnia z $n = $silnia");
}
        ?>
    </body>
</html>
