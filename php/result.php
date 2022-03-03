<?php
    session_start();
    $answer_3=$_REQUEST['answer_3'];
    $_SESSION['answer_3']= $answer_3;
    $counter = 0;
    if(isset($_SESSION['answer_1']) && isset($_SESSION['answer_2']) && isset($_SESSION['answer_3'])){
        if($_SESSION['answer_1'] == 'да'){
            $counter++;
        }
        if($_SESSION['answer_2'] == 'click')
        {
            $counter++;
        }
        if($_SESSION['answer_3'] == 'a'){
            $counter++;
        }
    }
    
    if($counter == 3){
        echo "<div id='res'><div id='text_wrapper'><p>Количество правильных ответов: $counter</p></br><a href='/php/quest1.php'>Отлично, ".$_SESSION['logged_user']."</a></div></div>";
        
    }
    else if($counter == 2){
        echo "<div id='res'><div id='text_wrapper'><p>Количество правильных ответов: $counter</p></br><a href='/php/quest1.php'>Хорошо, ".$_SESSION['logged_user']."</a></div></div>";
    }
    else if($counter == 1){
        print("<div id='res'><div id='text_wrapper'><p>Количество правильных ответов: $counter</p></br><a href='/php/quest1.php'>Удовлетворительно, ".$_SESSION['logged_user']."</a></div></div>");
    }
    else{
        print("<div id='res'><div id='text_wrapper'><p>Количество правильных ответов: $counter</p></br><a href='/php/quest1.php'>Пересдача..</a></div></div>");
    }
?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <link rel="stylesheet" type="text/css" href="test.css">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Test</title>
      
 </head>
 <body>
 </body>
 </html>