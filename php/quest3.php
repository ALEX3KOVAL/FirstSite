<?php
session_start();
    $answer_2=$_REQUEST['answer_2'];
    $_SESSION['answer_2']= $answer_2;
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
     <form id='third_form' action="/php/result.php" method="POST">
         <div id="form_fields">
             <label for="answer_3">Вопрос №3</label>
             <p>Как обозначается ссылка в html?</p>
             <input type="text" id="answer_3" name='answer_3' autocomplete="off" required>
             <div id="button">
                 <input type="submit" value="Отправить" name="Submit"> 
         </div>
         </div>
     </form>
     </div>
 </body>
 </html>