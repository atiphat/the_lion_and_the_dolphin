<?php

$play1 = $_GET['play1'];
$play2 = $_GET['play2'];

if($play1=="0" and $play2=="2"){
	echo "LOVE - LOVE";
}else if($play1=="0" and $play2=="15"){
	echo "LOVE - FIFTEEN";
}else if($play1=="0" and $play2=="30"){
	echo "LOVE - THIRTY";
}else if($play1=="0" and $play2=="40"){
	echo "LOVE - FORTY";
}else if($play1=="0" and $play2>40){
	echo "PLAYER2 WIN";
}else if($play1=="15" and $play2=="15"){
	echo "FIFTEEN - FIFTEEN";
}else if($play1=="15" and $play2=="30"){
	echo "FIFTEEN - THIRTY";
}else if($play1=="30" and $play2=="30"){
	echo "THIRTY - THIRTY";
}else if($play1=="15" and $play2=="0"){
	echo "FIFTEEN - LOVE";
}else if($play1=="30" and $play2=="0"){
	echo "THIRTY - LOVE";
}

echo "<hr>";
function txt($var){
	
	if($var==0){ $data = "LOVE"; }
	if($var==15){ $data = "FIFTEEN"; }
	if($var==30){ $data = "THIRTY"; }
	if($var==40){ $data = "FORTY"; }
	return $data;
}

if($play1==0 and $play2>40){
	echo "PLAYER2 WIN";
}else{
echo	 txt($play1)." - ".txt($play2);
}


?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-874" />
<title>Untitled Document</title>
</head>

<body>
</body>
</html>