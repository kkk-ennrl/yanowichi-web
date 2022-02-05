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

function load() {
	for (var i = 1; i <= 11; i++) { 
		for (var o = 0; o <= 7; o++) {
			let block = document.createElement("div")
			block.setAttribute("klass", i + "klass")
			block.setAttribute("urok", o)
			editRP(block)
		}
	}
}

function editRP(id) {
	let klass = id.getAttribute("klass");
	let urok = id.getAttribute("urok");
	let klassBox = document.querySelector(".content .rp-b .rp-box[klass='"+ klass +"']")
	if (klassBox.querySelector(".rp-box-el-" + urok + " .rp-box-title1").getAttribute("yw-edit") == "false") {
		klassBox.querySelector(".rp-box-el-" + urok + " .rp-box-title1").setAttribute("yw-edit", "true")
		klassBox.querySelector(".rp-box-el-" + urok + " .rp-box-title1").innerHTML = "<input type='text' value='" + klassBox.querySelector(".rp-box-el-" + urok + " .rp-box-title1").innerHTML + "'>"
	} else {
		klassBox.querySelector(".rp-box-el-" + urok + " .rp-box-title1").setAttribute("yw-edit", "false")
		klassBox.querySelector(".rp-box-el-" + urok + " .rp-box-title1").innerHTML = klassBox.querySelector(".rp-box-el-" + urok + " .rp-box-title1 input").value
	}
	
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
			html += "<div class='rp-box-title1' yw-edit='false'>" + app.lesson[app.db[i.toString()+"klass"].lessons[o]].slesson
			html += "</div><img onclick='editRP(this)' klass='" + i + "klass' urok='" + o + "' src='/img/pencil.png' width='22' height='22' class='rp-box-img-edit' draggable='false'></div>"
		}	
		html += "</div>"
	}
	app.html = html
	document.querySelector(".content .rp-b").innerHTML += app.html
}