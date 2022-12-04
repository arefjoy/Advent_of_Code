<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Task 2</title>
    </head>
    <body>
     <?php 
     $filename = __DIR__ . '/matches.txt';
     $matches = file($filename);
     $i = 0;
     $a = 0;
     $score = [0];
     $PIZDOS = [0];

     //ЭТО ХОТЬ И ЕБАНУТОЕ, НО ТОЖЕ РЕШЕНИЕ!!! =)
     
     //ЧАСТЬ 1:____

     while($i <= sizeof($matches)){
        switch($matches[$i]){
            case ("A X\n"):
                $score[$i] = 4;
                break;
            case ("A Y\n"):
                $score[$i] = 8;
                break;
            case ("A Z\n"):
                $score[$i] = 3;
                break;
            case ("B X\n"):
                $score[$i] = 1;
                break;
            case ("B Y\n"):
                $score[$i] = 5;
                break;
            case ("B Z\n"):
                $score[$i] = 9;
                break;
            case ("C X\n"):
                $score[$i] = 7;
                break;
            case ("C Y\n"):
                $score[$i] = 2;
                break;
            case ("C Z\n"):
                $score[$i] = 6;
                break;
            case ("A Z"):
                $score[$i] = 3;
                break;
            }
        $i++;
     }
     echo array_sum($score), '<br>';

     //ЧАСТЬ 2:____

     $i = 0;

     while($i <= sizeof($matches)){
        switch($matches[$i]){
            case ("A X\n"):
                $PIZDOS[$i] = "A Z";
                break;
            case ("A Y\n"):
                $PIZDOS[$i] = "A X";
                break;
            case ("A Z\n"):
                $PIZDOS[$i] = "A Y";
                break;
            case ("B X\n"):
                $PIZDOS[$i] = "B X";
                break;
            case ("B Y\n"):
                $PIZDOS[$i] = "B Y";
                break;
            case ("B Z\n"):
                $PIZDOS[$i] = "B Z";
                break;
            case ("C X\n"):
                $PIZDOS[$i] = "C Y";
                break;
            case ("C Y\n"):
                $PIZDOS[$i] = "C Z";
                break;
            case ("C Z\n"):
                $PIZDOS[$i] = "C X";
                break;
            case ("A Z"):
                $PIZDOS[$i] = "A Y";
                break;
            }
        $i++;
     }
     $i = 0;
     while($i <= sizeof($PIZDOS)){
        switch($PIZDOS[$i]){
            case ("A X"):
                $score[$i] = 4;
                break;
            case ("A Y"):
                $score[$i] = 8;
                break;
            case ("A Z"):
                $score[$i] = 3;
                break;
            case ("B X"):
                $score[$i] = 1;
                break;
            case ("B Y"):
                $score[$i] = 5;
                break;
            case ("B Z"):
                $score[$i] = 9;
                break;
            case ("C X"):
                $score[$i] = 7;
                break;
            case ("C Y"):
                $score[$i] = 2;
                break;
            case ("C Z"):
                $score[$i] = 6;
                break;
            }
        $i++;
     }
     echo array_sum($score);
    ?>
    </body>
    </html>
