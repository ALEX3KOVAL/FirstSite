<?php
    unset($_SESSION['answer_1']);
    unset($_SESSION['answer_2']);
    unset($_SESSION['answer_3']);

?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <link rel="stylesheet" type="text/css" href="/css/index.css">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Тест по Web</title>
 </head>
 <body>
     <form id='first_form' action="/php/quest2.php" method="POST">
         <div id="form_fields">
             <label for="answer_1">Вопрос №1</label>
             <p>JS является событийно-ориентированным ЯП?</p>
             <input type="text" id="answer_1" name='answer_1' autocomplete="off" required>
             <div id="button">
                 <input type="submit" value="Отправить" name="Submit"> 
         </div>
         </div>
     </form>
     </div>
 </body>
 </html>