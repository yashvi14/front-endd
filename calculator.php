<?php
$num1=11;
$num2=20;
$choice=2;
switch ($choice) {
	case 1:$num1+=$num2;
		echo $num1;
		break;

	case 2:$num1-=$num2;
		echo $num1;
		break;

case 3:$num1*=$num2;
		echo $num1;
		break;

case 4:$num1/=$num2;
		echo $num1;
		break;
	default:echo "INVALID CHOICE";
		break;
}
