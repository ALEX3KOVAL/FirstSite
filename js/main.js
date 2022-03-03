//Задание 1
function UpdateTime() {
let date = new Date();
let days = ["Воскресенье", "Понедельник", "Вторник", "Среда", "Четверг", "Пятница", "Суббота"]
day_of_month = date.getDate();
month = date.getMonth() + 1;
if (day_of_month < 10) {
	day_of_month = '0' + String(day_of_month);
}
else {day_of_month = String(day_of_month);}
if (month < 10) {
	month = `0${String(month)}`;
}
str = "";
hours = date.getHours();
minutes = date.getMinutes();
seconds = date.getSeconds();
if (hours < 10) {
	str = `0${hours}:`;
}
else {
	str = `${hours}:`;
}
if (minutes < 10) {
	str =  str + `0${minutes}:`;
}
else {
	str = str + `${minutes}:`;
}
if (seconds < 10) {
	str = str + `0${seconds}`;
}
else {
	str = str + `${seconds}`;
}
document.getElementsByClassName('time_span')[0].innerHTML = `${date.getFullYear()}-${day_of_month}-${month}, ${days[date.getDay()]}   ${str}`;
}
