function Calendar(id, year, month) {
var Dlast = new Date(year,month+1,0).getDate(),
    D = new Date(year,month,Dlast),
    DNlast = new Date(D.getFullYear(),D.getMonth(),Dlast).getDay(),
    DNfirst = new Date(D.getFullYear(),D.getMonth(),1).getDay(),
    calendar = '<tr>',
    month=["Январь","Февраль","Март","Апрель","Май","Июнь","Июль","Август","Сентябрь","Октябрь","Ноябрь","Декабрь"];
    prev_month_date = new Date(D.getFullYear(),D.getMonth(),0).getDate();
    var col = 1
   if (DNfirst != 0) {
   	for(var  i = 1; i < DNfirst; i++)  calendar += '<td class="another_days">' + String(prev_month_date - DNfirst + 1 + i);
}
   else { 
   	for(var i = 1; i < 7; i++) {
   	calendar += '<td class="another_days">' + String(prev_month_date - 6 + i);
   }
}
for(var  i = 1; i <= Dlast; i++) {
  if (i == new Date().getDate() && D.getFullYear() == new Date().getFullYear() && D.getMonth() == new Date().getMonth()) {
    calendar += '<td class="today">' + i;
  }
  else {
    calendar += '<td>' + i;
  }
  if (new Date(D.getFullYear(),D.getMonth(),i).getDay() == 0) {
    calendar += '<tr>'
    col++;
  }
}
var j = 1;
var day = D.getDay();
if (day != 0) {
      for(; j <= 7 - day; j++) {
        calendar += '<td class="another_days">' + String(j);
      }
    }
else {
	calendar += '<tr>';
	for(var i = 1; i <= 7 ; j++, i++) {
		if (i == 6 || i == 7) {
			calendar += ''
		}
        calendar += '<td class="another_days">' + String(j);
      }
}
while (col < 6) {
calendar += '<tr>';
for(var h = 0; h < 7; h++, j++) calendar += '<td class="another_days">' + String(j);
col++;
}
for(var  i = DNlast; i < 7; i++) calendar += '<td>&nbsp;';
document.querySelector('#'+id+' tbody').innerHTML = calendar;
document.querySelector('#'+id+' thead td:nth-child(2)').innerHTML = month[D.getMonth()] +' '+ D.getFullYear();
document.querySelector('#'+id+' thead td:nth-child(2)').dataset.month = D.getMonth();
document.querySelector('#'+id+' thead td:nth-child(2)').dataset.year = D.getFullYear();
if (document.querySelectorAll('#'+id+' tbody tr').length < 6) {  // чтобы при перелистывании месяцев не "подпрыгивала" вся страница, добавляется ряд пустых клеток. Итог: всегда 6 строк для цифр
    document.querySelector('#'+id+' tbody').innerHTML += '<tr><td>&nbsp;<td>&nbsp;<td>&nbsp;<td>&nbsp;<td>&nbsp;<td>&nbsp;<td>&nbsp;';
}
// переключатель минус месяц
document.querySelector('#calendar thead tr:nth-child(1) td:nth-child(1)').onclick = function() {
  Calendar("calendar", document.querySelector('#calendar thead td:nth-child(2)').dataset.year, parseFloat(document.querySelector('#calendar thead td:nth-child(2)').dataset.month)-1);
}
// переключатель плюс месяц
document.querySelector('#calendar thead tr:nth-child(1) td:nth-child(3)').onclick = function() {
  Calendar("calendar", document.querySelector('#calendar thead td:nth-child(2)').dataset.year, parseFloat(document.querySelector('#calendar thead td:nth-child(2)').dataset.month)+1);
}
}