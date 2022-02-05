let html ="<div id=\"info-blur\"></div><div id=\"info-blur-close\" onclick=\"closeInfo()\">+</div><div id=\"info-title\">Проект разработчика Me.Krendel (Самцов Никита)</div>"
function showInfo() {
	document.body.innerHTML += html;
}
function closeInfo(){
	document.body.innerHTML = document.body.innerHTML.replaceAll(html, "")
}