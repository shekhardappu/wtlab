<?php
$a=$_POST["1"];
$b=$_POST["2"];
Switch($_POST["opt"]){
case '+';
echo $a+$b;
break;
case '-';
echo $a-$b;
break;
case '*';
echo $a*$b;
break;
case '/';
echo $a/$b;
break;
case '%';
echo $a%$b;
break;
}
?>