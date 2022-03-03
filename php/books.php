<?php
 	session_start();
	$link = mysqli_connect("127.0.0.1", "root", "C916329520412g/");
	$result = mysqli_query($link, "SELECT name, author FROM books.books WHERE userid IN ( SELECT userid from users.users where login = \"{$_SESSION['logged_user']}\");");
	for ($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row);
	print("<table><tr><th colspan='1' class='first'>name</th><th colspan='1' class='first'>author</th></tr>");
	for ($i = 0; $i < count($data); $i++) {
		echo '<tr><td>'.$data[$i]["name"].'</td><td>'.$data[$i]["author"].'</td></tr>';
	}
	print("</table><br><br>");
	print('<form id="add" method="POST">
		<input type="text" id="book_name" name="book_name" placeholder="название книги">
		<input type="text" id="author_fio" name="author_fio" placeholder="автор">
		<button type="submit" id="subm" name="submit">Отправить</button>
	</form>');
	?>
<!DOCTYPE html>
 <html lang="ru">
 <head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <link rel="stylesheet" type="text/css" href="/css/auth.css">
     <script type="text/javascript" src="/js/jquery-3.0.0.min.js"></script>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Книги</title> 
 </head>
 <body>
 <script type="text/javascript">
 	$('#add').submit(function(e) {
 		if ($('#book_name').val() == "" || $('#author_fio').val() == "") {
					$("#subm").prop('disabled', true);
					var d = document.createElement('div');
					d.className = "error_block";
					$(".error_block").css("color", "red");
					d.appendChild(document.createTextNode('Заполните название книги и фио автора'));
					document.body.appendChild(d);
					setTimeout(function() { $('.error_block').remove(); }, 1050);
				}
				else {
				e.preventDefault();
				$.ajax({
					type: "POST",
					url: "/php/add_book.php",
					data: $(this).serialize(), 
					success: function(response) {
						console.log(response);
						if (response == "0") {
							console.log("saddsaads");
							var d = document.createElement('div');
								d.className = "error_block";
								$(".error_block").css("color", "red");
								d.appendChild(document.createTextNode('Ошибка добавления книги в базу данных!'));
								document.body.appendChild(d);
								$('.error_block').delay(1400).fadeOut(300);
						}
						else {
							var d = document.createElement('div');
								d.className = "error_block";
								$(".error_block").css("color", "green");
								d.appendChild(document.createTextNode('Книга успешно добавлена в базу данных!'));
								document.body.appendChild(d);
								setTimeout(function() { $('.error_block').remove(); }, 1050);
								window.location.reload();
						}
					}
 	});
			}
		});
 </script>
 <style>
		.error_block {
			position:relative;
			left:575px;
			top: 213px;
			width: 190px;
			height: 17px;
			font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
			font-size: 14px;
			text-align: center;
			color: red;
		}
	</style>
 </body>
 </html>