<?php
    session_start();
    $answer_1=$_REQUEST['answer_1'];
    $_SESSION['answer_1']= $answer_1;
?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <link rel="stylesheet" type="text/css" href="test.css">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Тест по Web</title>
 </head>
 <body>
     <form id='second_form' action="/php/quest3.php" method="POST">
         <div id="form_fields">
             <label for="answer_2">Вопрос №2</label>
             <p>Как обозначается событие щелчка мыши?</p>
             <input type="text" id="answer_2" name='answer_2' autocomplete="off" required>
             <div id="button">
                 <input type="submit" value="Отправить" name="Submit"> 
         </div>
         </div>
     </form>
     </div>
 </body>
 </html>