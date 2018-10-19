<?php
/*
$number=15;
if($number<=14){
    echo "bu reqem 10 dan kicikdir";
}else{
    echo "reqem 10 dan  boyukdur";
}

$a=3;
switch($a){
    case 1: echo "a=1";
    break;
    case 2: echo "a=2";
    break;
    case 3: echo "a=3";
    break;
    default: echo " a hec birine aid deyil";
    break;
}

$speed=452;
echo ($speed<60) ? "norma":"heddini acmisan";

$speed=45;
if($speed<45){
    echo "Norma";

}else{
    echo "heddini acmisan";
}

$speed=45;
switch($speed){
    case 40 : echo "norma";
    break;
    case($speed<45) : echo "Yenede olar";
    break;
    default : echo "Hecne Olmadiki";
    break;
}


$a=1;
while($a<=100){
    echo $a."<br>";
    $a++;
}

$sum=1;
$i=0;
while($i<=30){

    $sum+=3;
    $i++;
    echo ($sum."<br>");
}



$a=1;
while($a<1000){

    $a=$a * 2;
    echo($a." ");

}

$sum=1;
$i=0;
do{
    $sum +=3;
    $i++;
    echo ($sum." ");

}while($i<=30);

for($i=1; $i<=5; $i++ ){
    echo "Salam".$i."<br>";
}


$mas[]="Leto";
$mas[]="Osen";
$mas[]="Zima";
for($n = 0; $n<count($mas); $n++){
    echo "$mas[$n]"."<br>";
}


$a=[
    1,2,3,4,5
];

foreach($a as $value){

    echo $value;
}


$user=[
    "Ivan",
    "root",
    "password",
    "237 2736"

];
echo "Sexsi Melumat:<br>";
foreach($user as $value){
    echo  $value."<br>";
}

$user["name"]="Ivan";
$user["login"]="root";
$user["password"]="password";
$user[]="2834 7293";
foreach($user as $index => $value){
    echo "Index $index -$value<br>";

}



$names=[
"Ivan","Sergey","Petr"
];
foreach($names as $val){
    echo "Salam, $val<br>";
}
foreach($names as $k =>$val){
    echo "Salam $val!senin nomren $k<br>";
}

$i=1;
while($i<=10){
    echo $i." ";
    if($i==6) break;
    $i++;
}



$i=0;
while($i<10){
    $i++;
    if(!($i%2)){
        continue;
    }
    echo $i." ";
}


function say_hello($name="Petr"){

    echo "Salam".$name;
}
echo say_hello();


function sum($a, $b){

    return $a+$b;
}
echo sum(1,2);

for($x=1; $x<=10; $x++){
    if($x<10){
        echo "$x-";
    }else{
        echo "$x"."\n";
    }
}

$sum=0;
for($x=1; $x<=30; $x++){
    $sum +=$x;
}
echo "Te sum of the elmements is $sum"


for($x=1;$x<=5;$x++){
    for($y=1;$y<=$x;$y++){
        echo "*";
        if($y<$x){
            echo " ";
        }
    }
    echo "<br>";
}



$n=5;
for($i=1; $i<$n; $i++){
    for($j=1;$j<=$i;$j++){
        echo"*";
    }
    echo "<br>";
}
for($i=$n; $i>=1;  $i--){
    for($j=1;$j<=$i;$j++){
        echo"*";
    }
    echo "<br>";
}

for($row=0; $row<=7; $row++){
    for($col=0; $col<=7;$col++){
        if ((($col == 1 or $col == 5) and $row != 0) or (($row == 0 or $row == 3) && ($col > 1 && $col< 5))){
          echo "*";
        }
        else{
            echo " ";
        }

    }   
echo "<br>";
}



for ($row=0; $row<7; $row++)
{
  for ($column=0; $column<=7; $column++)
	{
      if ($column == 1 or (($row == 0 or $row == 3 or $row == 6) and ($column < 5 and $column > 1)) or ($column == 5 and ($row != 0 and $row != 3 and $row != 6)))
            echo "*";    
        else  
            echo " ";     
	}        
  echo "<br>";
}



for ($row=0; $row<7; $row++)
{
  for ($column=0; $column<=7; $column++)
	{
          if ((($column == 1 or $column == 5) and $row < 5) or ($row == 6 and $column == 3) or ($row == 5 and ($column == 2 or $column == 4)))
            echo "*";    
        else  
            echo " ";     
	}        
  echo "<br>";
}

for($a=0;$a<10; $a++){

    for($b=0;$b<10;$b++){
        echo $a.$b.",";
    }
echo "<br>";
}



<!DOCTYPE html>
<html>
<body>
<table align="left" border="1" cellpading="3" cellspacing="0">
<?php
for($i=1; $i<=6;$i++){
    echo "<tr>";
    for($j=1;$j<=5;$j++){
        echo "<td>$i*$j=".$i*$j."</td>";
    }
    echo "</tr>";
}




</table>

*/

?>

<?php
?>

