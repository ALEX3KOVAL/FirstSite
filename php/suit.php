<?php
	session_start();
	$us = $_SESSION['logged_user'];
	$r = chunk_split($us, 1, ' ');
?>
<!DOCTYPE html>
<html lang="rus">
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="/css/index.css">
	<script type="text/javascript" src="/js/typed.min.js"></script>
	<script type="text/javascript" src="/js/jquery-3.0.0.min.js"></script>
	<script type="text/javascript" src="/js/index.js"></script>
	<script type="text/javascript" src="/js/animate.js"></script>
	<script type="text/javascript" src="/js/animate_name_date.js"></script>
	<script type="text/javascript" src="/js/main.js"></script>
	<script type="text/javascript" src="/js/calendar.js"></script>
	<script type="text/javascript" src="/js/opacity.js"></script>
	<title><?=$us; ?></title>
</head>
<body class="full-screen-preview" onload = "UpdateTime(); setInterval('UpdateTime()', 1000);Calendar('calendar', new Date().getFullYear(), new Date().getMonth()); change_blocks(); setInterval('change_blocks()', 150)">
	<div class="preview__header">
		<div class="header__label"><?=$r; ?></div>
	</div>
	<div class="page-block">
		<div class="home__block">
			<img src="/images/333.jpg" class="background" />
			<div class="foreground"></div>
			<div class="hello__label">
				<h1>Привет</h1>
				<h2>Я Коваленко Александр</h2>
				<h1>Студент</h1>
				<span class="typed"></span>
				<script>var typed = new Typed('.typed', {strings:['Кубанского Государственного Университета', 'Факультета Компьютерных Технологий И Прикладной Математики', '36 Группы'], typeSpeed: 30, backDelay: 1700,
            startDelay: 600,
            loop: true,
            loopCount: 100, backSpeed: 20, });</script></h3>
			</div>
			<div class="background__menu">
				<div class="menu__block">
					<div class="home">Домой</div>
					<div class="about__me">Обо мне</div>
					<div class="rezume">Резюме</div>
					<div class="tasks__js">JS</div>
					<div class="contacts">Тест</div>
				</div>
			</div>
		</div> 
		<div class="about__block">
			<img src="/images/555.png" class = "back_about_class" />
			<div class="foreground"></div>
			<canvas id="draw__canvas_left_line"></canvas>
			<canvas id="draw__canvas_rect">
			</canvas>
			<canvas id="draw__canvas_right_line"></canvas>
			<script type="text/javascript" src="/js/draw.js"></script>
			<div class="bord__block">
				<div class="image_about__block">
					<script type="text/javascript">
 						 fadeOpacity.addRule('oR1', 1, 0, 80);
					</script>
					<div id="background_about_class">Smile...</div>
					<img src="/images/111.jpg" id = "image_about_class" onMouseOver="fadeOpacity(this.id, 'oR1')"  onmouseout="fadeOpacity.back(this.id)"/>
				</div>
			</div>
			<div class="about_info__block">
				<div class="name__block">
					<div class="icon_text_block">
						<div class="icon_name__block">
							<img src="/images/222.png" class = "image_name_class" />
						</div>
						<div class="text_name__block">Имя и Фамилия</div>
					</div>
						<div id="brick_name">Александр Коваленко</div>
				</div>
				<div class="birth_date__block">
					<div class="icon_date_text_block">
						<div class="icon_birth_date__block">
							<img src="/images/444.png" class = "image_birth_date_class" />
						</div>
						<div class="text_birth_date__block">Дата Рождения</div>
					</div>
						<div id="brick_date">27.10.2000</div>
				</div>
				<div class="story__block">
					<p class="story_text__p">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
				</div>
			</div>
		</div>
		<div class="rezume__block">
			<img src="/images/555.png" class = "back_about_class" />
			<div class="foreground"></div> 
			<canvas id="draw__canvas_left_line_rezume"></canvas>
			<canvas id="draw__canvas_rect_rezume">
			</canvas>
			<canvas id="draw__canvas_right_line_rezume"></canvas>
			<script type="text/javascript" src="/js/draw_rezume.js"></script> 
			<div class="rezume_info__block">
				<div class="key__block">
					<div class="icon_key_text_block">
						<div class="icon_key__block">
							<img src="/images/666.jpg" class = "image_name_class" />
						</div>
						<div class="text_key__block">Ключевые качества</div>
					</div>
						<div id="brick_key">Lorem ipsum dolor sit amet</div>
				</div>
				<div class="xp__block">
					<div class="icon_xp_text_block">
						<div class="icon_xp__block">
							<img src="/images/777.jpg" class = "image_name_class" />
						</div>
						<div class="text_xp__block">Профессиональный опыт</div>
					</div>
						<div id="brick_xp">consectetur adipiscing elit</div>
				</div>
				<div class="educ__block">
					<div class="icon_educ_text_block">
						<div class="icon_educ__block">
							<img src="/images/888.jpg" class = "image_name_class" />
						</div>
						<div class="text_educ__block">Образование</div>
					</div>
						<div id="brick_educ">КУБГУ. 2022. Фундаментальная информатика и информационные технологии.</div>
				</div>
				<div class="dop__block">
					<div class="icon_dop_text_block">
						<div class="icon_dop__block">
							<img src="/images/999.png" class = "image_name_class" />
						</div>
						<div class="text_dop__block">Дополнительная информация</div>
					</div>
						<div id="brick_dop">quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</div>
				</div>
			</div>    
		</div>
		<div class="js__block">
			<img src="/images/555.png" class = "back_about_class" />
			<div class="foreground"></div> 
			<canvas id="draw__canvas_left_line_js"></canvas>
			<canvas id="draw__canvas_rect_js">
			</canvas>
			<canvas id="draw__canvas_right_line_js"></canvas>
			<script type="text/javascript" src="/js/draw_jss.js"></script>
			<div class="tasks__wrapper">
			<div class="task1__block">
				<div class="label_task1">Обновление времени</div>
				<div class="task1_res">
					<div class="time_span"></div>
				</div>
			</div>
			<div class="task2__block">
				<div class="label_task2">Календарь</div>
				<div class="task2_res">
					<table id="calendar">
						<thead>
							<tr><td>‹<td colspan="5"><td>›
							<tr><td>Пн<td>Вт<td>Ср<td>Чт<td>Пт<td>Сб<td>Вс
						</thead>
						<tbody>
					</table>
				</div>
			</div>
			<div class="task3__block">
				<div class="label_task3">Действие через интервал 150мс</div>
				<div class="task3_res">
					<div class="task31_res"></div>
					<div class="task32_res"></div>
					<div class="task33_res"></div>
					<div class="task34_res"></div>
					<div class="task35_res"></div>
					<div class="task36_res"></div>
					<div class="task37_res"></div>
					<div class="task38_res"></div>
					<div class="task39_res"></div>
					<div class="task310_res"></div>
					<div class="task311_res"></div>
				</div>
			</div>
			<div class="task4__block">
				<div class="label_task4">Добавление и удаление элементов</div>
				<div class="task4_res">
					<ol id="task4">
					</ol>
				</div>
			</div>
			<div class="task6__block">
				<div class="label_task6"><Скрыть/отобразить меню></div>
				<div class="task6_res">
                    <template id="tmpl">
                        <style>
                        
                        ::slotted([slot="title"]) {
                            font-family: Roboto;
                            font-style: normal;
                            font-weight: normal;
                            font-size: 14px;
                            position: relative;
                            left:16px;
                            margin: 0;
                            line-height: 20px;
                            letter-spacing: 0.25px;
                          cursor: pointer;
                        }
                      
                        ::slotted([slot="title"])::before {
                            content: 'тыкни';
                            font-family: Roboto;
                            font-style: normal;
                            font-weight: normal;
                            font-size: 14px;
                            margin: 0;
                            line-height: 20px;
                            letter-spacing: 0.25px;
                            font-size: 14px;
                        }
                      
                      
                        .closed ul {
                          display: none;
                        }

                        </style>
                      
                        <div class="menu">
                          <slot name="title"></slot>
                          <ul><slot name="item"></slot></ul>
                        </div>
                      </template>
                      
                      <custom-menu id="customMenu">
                        <span slot="title"></span>
	                        <li slot="item" class="sweet">Леденцы</li>
	                        <li slot="item" class="sweet">Фруктовые тосты</li>
	                        <li slot="item" class="sweet">Кексы</li>
                      </custom-menu>
                      <script>
                      customElements.define('custom-menu', class extends HTMLElement {
                        connectedCallback() {
                          this.attachShadow({mode: 'open'});
                          this.shadowRoot.append( tmpl.content.cloneNode(true) );
                          this.shadowRoot.querySelector('slot[name="title"]').onclick = () => {
                            this.shadowRoot.querySelector('.menu').classList.toggle('closed');
                          };
                          this.shadowRoot.querySelector('slot[name="item"]').onclick = (e) => {
                          	$(event.target).fadeOut(750);
                          	$(event.target).remove();
                          	if (document.getElementsByTagName('li').length == 0) {
                          		let d = document.createElement('div');
                          		d.className = "task6";
                          		d.appendChild(document.createTextNode('Сладости закончились!'));
                          		document.getElementsByClassName("task6_res")[0].appendChild(d);
                          	}
                          }
                        }
                      });
                      </script>
                </div>
            </div>
        </div>
	</div>
</body>
</html>