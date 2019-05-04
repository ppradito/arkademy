<?php 

class Test {
	function __construct(){
		echo 'assesment';
	}

	function __destroy(){
		echo 'dwc';
	}
}

echo "im doing";
$test = new Test();
echo ', on monday';

?>