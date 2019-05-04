	<?php

	$data = array
	  (
		array('g','e','f'),
		array('a','c','b','e','d'),
		array('z','t')
	  );

	function sort_array($data)
	{
		$value2 = sizeof($data);
		sort($data);
		for($x = 0;$x < $value2;$x++)
		{
			$value[$x] = sizeof($data[$x]);
		}
		
		for($x = 0;$x < $value2;$x++)
		{
			sort($data[$x]);
			echo "[";
			for($y = 0;$y < $value[$x];$y++)
			{
				if($y == $value[$x]-1)
					echo $data[$x][$y];
				else
					echo $data[$x][$y].",";
			}
			echo "]";
			echo "<br>";
		}
	}

	sort_array($data);

