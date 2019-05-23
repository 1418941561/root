<?php
    $str = 5;

    Sum_Solution(index($str));

    function  index($str){
    	$data = array_splice($str);
    	$s = array_count_values($data);
    	foreach ($s as $key => $value) {
    		if($value>=2){
    			return $key;
    		}
    	}
    }

?>