admin.days = ["default_pn", "default_pn", "default_vt", "default_sr", "default_ct", "default_pt", "default_pn"]
admin.daysName = ["Понедельник", "Понедельник", "Вторник", "Среда", "Четверг", "Пятница", "Понедельник"]
admin.month = ["Января", "Февраля", "Марта", "Апреля", "Мая", "Июня", "Июля", "Августа", "Сентября", "Октября", "Ноября", "Декабря"]
function startAdmin() {
	if (admin.gets.src == "home") {
		let dt = new Date;
		let dy = dt.getDay();
		let ndy = dy;
		if (dy == 5 || dy == 6 || dy == 0) {
			if (dy == 5 && dt.getHours() >= 0 && dt.getHours() <=19) {
				dt = new Date(dt.setDate(dt.getDate()))
				dy = 5
			} else {
				
				if (dy == 0) {
					dt = new Date(dt.setDate(dt.getDate() + 1))
				}
				if (dy == 6) {
					dt = new Date(dt.setDate(dt.getDate() + 2))
				}
				dy = 1
			}
		} else {
			if (dt.getHours() >= 0 && dt.getHours() <= 19) {
				dt = new Date(dt.setDate(dt.getDate()))
				dy = dy
			} else {
				new Date(dt.setDate(dt.getDate() + 1))
				dy += 1
			}
		}


		document.querySelector(".content .title-day").innerHTML = admin.daysName[dy] + " (" + dt.getDate() +  " " + admin.month[dt.getMonth()] +")"
		setRP(admin.days[dy])
	}
}