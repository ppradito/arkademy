<?php
	function json()
	{
		echo "[{\"name\":\"Pradito Nazaruddin\",\"address\":\"Kwangsan RT 01 RW 04,Sribit,Kab. Klaten\",\"hobbies\" : [ \"watch film\", \"read books\"],\"is_married\":\"0\"}]";
		$skills = array("PHP", "CSS", "HTML", "SQL");
		$myJSON = json_encode($skills);

		echo $myJSON;
	}
	json();
?>