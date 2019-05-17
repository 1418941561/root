<?php
	
	$n = 111;

	print(index($n));

	function  index($n){

		$data = str_split($n);

		$s = array_count_values($data);

		foreach ($s as $key => $value) {
			if($value>=2){
				return $key;
			}
		}
	}

?>