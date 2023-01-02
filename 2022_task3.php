<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Task 3</title>
    </head>
    <body>
     <?php 
     $filename = __DIR__ . '/inventory.txt';
     $inventory = file($filename);
     $i = 0;
     $a = 0;
     $items = [[0][0]];
                 //  )
     //ЧАСТЬ 1:_____)

     while ($i <= sizeof($inventory)){
        //while ($a <= sizeof($items[$i][$a])){

       // }
       
       echo $i, "<br>";
       $i++;
     }
    ?>
    </body>
    </html>
