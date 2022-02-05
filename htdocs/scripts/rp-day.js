let app = {}

function setRP(day){
	let srv = new XMLHttpRequest;
	srv.timeout = 5000;
	srv.open("GET", "/db.php?type=read&id=" + day, true);
	srv.onload = function(){
		let db = JSON.parse(srv.response)
		app.db = db
		if (app.db["response-type"] == "error") {
			alert("error!");
		}
		getLesson()
	}
	srv.onerror = function(){

	}
	srv.send()
}

function getLesson() {
	let srv = new XMLHttpRequest;
	srv.timeout = 5000;
	srv.open("GET", "/db.php?type=read&id=lessons", true);
	srv.onload = function(){
		let db = JSON.parse(srv.response)
		app.lessons = db
		app.lesson = {}
		for (var i = 0; i <= app.lessons.length-1; i++) {
			app.lesson[app.lessons[i][0]] = {
				"lesson":app.lessons[i][1],
				"slesson":app.lessons[i][2]
			}
		}
		generateRP()
	}
	srv.onerror = function(){

	}
	srv.send()
}

function generateRP() {
	let html = ""
	for (var i = 1; i <= 11; i++) {
		html += "<div class='rp-box' klass='" + i + "klass'>"
		html += "<span class='rp-box-title'>" + app.db[i+"klass"].title
		html += "</span>"	
		for (var o = 0; o <= 7; o++) {
			html += "<div class='rp-box-el-" + o +" rp-box-el'>"
			html += "<div class='rp-box-num'>" + o + "</div>"
			html += "<div class='rp-box-title1'>" + app.lesson[app.db[i.toString()+"klass"].lessons[o]].slesson	
			html += "</div></div>"
		}	
		html += "</div>"
	}
	app.html = html
	document.querySelector(".content").innerHTML += app.html
}