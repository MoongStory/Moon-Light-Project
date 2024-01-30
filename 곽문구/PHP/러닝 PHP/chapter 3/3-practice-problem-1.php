<?php
	/*
		1. PHP 프로그램을 사용하지 않고 다음 표현식들이 참인지 거짓인지 판별하라.
		① 100.00 - 100
		② "zero"
		③ "false"
		④ 0 + "true"
		⑤ 0.000 ⑥ "0.0"
		⑦ strcmp ("false","False")
		⑧ 0 <=> "0"
	*/
?>

<?php
		/*
		// false
		① 100.00 - 100

		// true
		② "zero"

		// true
		③ "false"

		// true
		④ 0 + "true"

		// false
		⑤ 0.000

		// true
		⑥ "0.0"

		// true
		⑦ strcmp ("false","False")

		// false
		⑧ 0 <=> "0"
	*/

	if(100.00 - 100){
		print("true</br>");
	}
	else{
		print("false</br>");
	}
	
	if("zero"){
		print("true</br>");
	}
	else{
		print("false</br>");
	}
	
	if("false"){
		print("true</br>");
	}
	else{
		print("false</br>");
	}
/*	
	if(0 + "true"){
		print("true</br>");
	}
	else{
		print("false</br>");
	}
*/	
	if(0.000){
		print("true</br>");
	}
	else{
		print("false</br>");
	}
	
	if("0.0"){
		print("true</br>");
	}
	else{
		print("false</br>");
	}
	
	if(strcmp ("false","False")){
		print("true</br>");
	}
	else{
		print("false</br>");
	}
	
	if(0 <=> "0"){
		print("true</br>");
	}
	else{
		print("false</br>");
	}
?>