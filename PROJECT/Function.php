<?php
function ckMob($a){
		$arr=str_split($a);
		if(sizeof($arr)==10){
			$ck=0;
			//print_r($arr);
			foreach($arr as $arr1){
				if(($arr1==1)||($arr1==2)||($arr1==3)||($arr1==4)||($arr1==5)||($arr1==6)||($arr1==7)||($arr1==8)||($arr1==9)||($arr1==0));
				else
					$ck=1;			
			}
			if($ck==0)
				return 1;
			else 
				return 0;
		}
		else
			return 0;	
	}
function ckMail($a){
	$arr=str_split($a);
	if(sizeof($arr)>10){
		$ck=0;
		//print_r($arr);
		foreach($arr as $arr1)
			if(strcmp($arr1,'@')==0)
				$ck=1;
		if($ck==1)
			return 1;
		else
			return 0;
	}
	else
		return 0;
}
	?>