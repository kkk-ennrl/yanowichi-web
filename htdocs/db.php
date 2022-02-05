<?php

$ERRORS_1 = '{
	"response-type":"error",
	"response-text":"Произошла ошибка в параметрах запроса!",
	"response-code":"1"
}';
$ERRORS_2 = '{
	"response-type":"error",
	"response-text":"Произошла ошибка в параметрах запроса!",
	"response-code":"2"
}';
$ERRORS_3 = '{
	"response-type":"error",
	"response-text":"Произошла ошибка в параметрах запроса!",
	"response-code":"3"
}';
$ERRORS_4 = '{
	"response-type":"error",
	"response-text":"Произошла ошибка в параметрах запроса!",
	"response-code":"4"
}';
$ERRORS_5 = '{
	"response-type":"error",
	"response-text":"Произошла ошибка в параметрах запроса!",
	"response-code":"5"
}';
	include("config.php");	

	$DB_FILES = array(
		"teachers_id"=>"db_files/teachers_id.json",
		"lessons"=>"db_files/lessons.json",
		"default_pn"=>"db_files/default_pn.json",
		"default_vt"=>"db_files/default_vt.json",
		"default_sr"=>"db_files/default_sr.json",
		"default_ct"=>"db_files/default_ct.json",
		"default_pt"=>"db_files/default_pt.json"
	);

	

	header("Content-type: application/json; charset=utf-8");

	if (isset($_GET["type"])) {
		if ($_GET["type"] == "read") {

			if (isset($_GET["id"])) {

				if (file_exists($DB_FILES[$_GET["id"]])) {

					echo file_get_contents($DB_FILES[$_GET["id"]]);

				} else {

					echo $ERRORS_4;

				}

			} else {

				echo $ERRORS_3;

			}			

		} elseif ($_GET["type"] == "write") {

			if (isset($_GET["table"])) {

			} else {
				echo $ERRORS_5;
			}

		} else {

			echo $ERRORS_2;

		}
	} else {

		echo $ERRORS_1;

	}




 ?>