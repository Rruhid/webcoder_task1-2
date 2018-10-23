<?php
day-0
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
/*
$current_file=basename($_SERVER['PHP_SELF']);
echo $current_file."<br>";

$text='Php Tutorial';
$text=preg_replace('/(\b[a-z])/i','<span style="color:red;">\1</span>',$text);
echo $text;

for($i=1;$i<7;$i++){
    for($j=1;$j<7;$j++){
        if($j==1){
            echo str_pad($i*$j,2," ",STR_PAD_LEFT);
        }else{
            echo str_pad($i*$j,4," ",STR_PAD_LEFT);
        }

    }

    echo "<br>";
}

$color=array('white','green','red');
foreach($color as $c){
echo  $c ." ";
}
sort($color);
echo "<ul>";
foreach($color as $y){
    echo "<li>$y</li>";
}
echo "</ul>";

$ceu=array("Italy"=>"Rome","Luxemburg"=>"Luxembutg");
arsort($ceu);
foreach($ceu as $country =>$caapital){
    echo "The capital of $country is $caapital";
}


$x = array(1, 2, 3, 4, 5);
 var_dump($x);
 unset($x[3]);
 $x = array_values($x);
 echo '<br>
';
var_dump($x);



$original = array('1','2','3','4','5');
echo 'Original array:'."<br>";
foreach($original as $x){
    echo" <ul>";
    echo $x;
    echo "</ul>";
}

$inserted='$';
array_splice($original,3,0,$inserted);
echo "After inserting '$' array looks :<br>";
foreach($original as $y){
    echo "$y ";
}


$my_array = array("abcd","abc","de","hjjj","g","wer");
$new_array=array_map('strlen',$my_array);
echo "The shortest:".min($new_array);
echo "The longest:".max($new_array);



$n=range(11,20);
shuffle($n);
for($x=0;$x<10;$x++){
    echo $n[$x].' ';
}

$colors= array("Red","Green","Blue");

echo $colors[0];


$x=4;
$y=5;
echo $x+$y;
echo "<br>";
echo $x*$y;


$x=5;
$y=10;
function myTest(){
    global $x,$y;
    $y=$x+$y;

}
myTest();
echo $y;




$x=5;
$y=10;
function myTest(){
$GLOBALS['y'] += $GLOBALS['x'];
}
myTest();
echo $y;

function myTest(){
    static $x=0;
    echo $x;
    $x++;
}
myTest();
myTest();
myTest();


$txt1="Learn PHP";
$txt2="W3School.com";
$x=5;
$y=4;
echo "<h2>" .$txt1."</h2>";
print $x+$y;

$x=4565;
var_dump($x);
$y='kjsdhk';
var_dump($y);
$x=45.65;
var_dump($x);


$cars = array("Volvo","BMW","Toyota");
var_dump($cars);



class Car{

    function Car(){
        $this->model="VW";
    }

}
$herbi=new Car();
echo $herbi->model;


$name="Sixkerimov ";
echo strlen($name);
echo "<br>";
echo str_word_count($name);
echo "<br>";
echo strrev($name);
echo "<br>";
$name="Sixkerimov";
echo strpos($name,"mov");

$name="Sixkerimov";

echo str_replace("mov","rara",$name);


define("Greet","Welcome to your school");

function myTest(){
    echo Greet;
}

myTest();

$x=100;
$y=50;
if ($x==10 || $y==50){
    echo "Hello World";
}

$favcolor="dark";
switch($favcolor){

    case "red":
    echo "Your favourite color is Red";
    break;
    case "green":
    echo "Your favourite color is green";
    break;

    default:
    echo "Your favourite color is smt else";



}


$x = 1; 
while($x <= 5){
    echo "The number is $x<br>";
    $x++;
}


$a=1;
$b=3;
$c=5;
if($a==1||$a==2){
    if($b==3||$b==4){
        if($c==5 || $c==6){
            echo "Hello world";
        }
    }
}

$a=1;
$b=3;
$c=5;
if(($a==1||$b==2)&&($b==3||$b==4)&&($c==5||$c==6)){
    echo " Hello world";
}



if(true){
    $hi='Hello to all people';
}
echo $hi;

$x=11;
$y=2;
if($x!=$y){
    $x=$x*$y;
}else{
    $x=$x+$y;
}
echo $x;

$arr = array("orange", "banana", "apple", "raspberry");
$i=0;
while ($i<count($arr)){
 echo $arr[$i]."<br>";
    $i++;
}

$one=array('10','20','30','40');
$two=array('a','b','c','d');
$i=0;
while($i<count($one)){
    reset($two);
    while($a=each($two)){
        echo $a[1].'-'.$one[$i].',';
    }
    $i++;
}

$arr=array(1,2,3,4);
foreach($arr as $value){
    $value=$value*2;
}
foreach($arr as $key =>$value){
    echo "{$key}=>{$value}";
    print_r($arr);
    echo "<br>";
}
*/
<?php
/*
$a=1;
while($a<=100){
    if($a%4==0){
        echo $a."<br>";
    }
    $a++;
}

$sum=0;
$i=0;
while($i<30 && $sum<300){
    $sum=$sum+15;
    $i++;
    echo ($sum."<br>");
}


$user["name"]="Ivan";
$user["login"]="root";
$user["password"]="password";
$user[]="2834 7293";

foreach($user as $index=>$value){
    echo "$index-$value<br>";
}




$a = array(10, 20, 52, 10, 526, 89, 96);
$b=$a[0];

foreach($a as $key=>$val){
    if($val>$b){
        $b=$val;
    }

}
echo $b;

echo "<br>";




$arr = array(4,5,6,7,8,2,9,1);
$val = $arr[0];
$n = count($arr);

for($i=1;$i<$n;$i++) {
if($val<$arr[$i]) {
    $val = $val;        
} else {
    $val = $arr[$i];
}
}
print($val);

$arr = array(100,40,1,5,17,50,4);
$min = $arr[0];
$max = $arr[0];
foreach($arr as $key => $val){
    if($min > $val){
        $min = $val;
    }
    if($max < $val){
        $max = $val;
    }
}	
print $min;

echo"<br>";
print $max;

echo"<br>";


$arr = array(100,40,1,5,17,50,4);
$max = $arr[0];

foreach($arr as $key => $val){
    if($max < $val){
        $max = $val;
    }
}	

print $max;

?>
day-1
//Task1-en cox isledilen herfin cemi
$str = "tsssqsss";
$count=0;
$patt = 'q';
for($i=0;$i<strlen($str);$i++){
    echo $str[$i].'<br>';
    if($str[$i]==$patt) {
        $count ++;
    }

} 
print  $count;

//Task2 en cox isledilen herfin cemi funcksdiyada

 function get_element($str,$patt){
global $count;
 for($i=0;$i<strlen($str);$i++){
    echo $str[$i].'<br>';
    if($str[$i]==$patt) {
        $count ++;
     }

  } 
print $count;
 }
get_element("tsssqsss","s");

//Task3 form-kalkulator

 <form method="post">
            <input type="text" name="numb1">
            <br>
            <input type="text" name="numb2">
            <select name="operator" id="">
               <option>плюс</option>
               <option>минус</option>
               <option>умножить</option>
               <option>делить</option>
               
            </select>
            <button type="submit" name="submit" value="submit">Calculate</button>
 </form>
<?php

 if (isset($_POST['submit']) ) {
     $result1 = $_POST['numb1'];
     $result2 =$_POST['numb2'];
     $operator = $_POST['operator'];

     switch ($operator) {
       
         case 'плюс':
             echo $result1 + $result2;
             break;
         case 'минус':
             echo $result1 - $result2;
             break;
         case 'умножить':
             echo $result1 * $result2;
             break;
             case 'делить': 
            if($result2 !=0){
            echo $result1/$result2;
            }else{
                echo "На нульделить нельзя";
            }
            break;
     

           
     }

   
}
?>
//Task4 sait herflerin cemi
<?php
$someString = "Lorem Ipsum is simply dummy text of the printing andfgbdddfdewoosiiiooee";
$total = 0;
$vowels = Array('a','e','i','o','u');

for ($i=0;$i<strlen($someString);$i++)
{
    for ($j = 0;$j<5;$j++)
        if ($someString[$i] == $vowels[$j])
        {
            $total++;
            break;
        }
}
echo $total;

?>
//Task 5 Ulduzlarin ardicillagnan gelmesi *-**-***
<?php
for($x=1;$x<=5;$x++)
{
   for ($y=1;$y<=$x;$y++)
    {
	 echo "*";
	    if($y< $x)
		 {
		   echo " ";
		 }
     }
 echo "<br>";
}

?>
//Task 6//To make it 1-12-123-1234

for($i=1;$i<=5;$i++)
  {

     for($j=1;$j<=$i;$j++)
        {
          echo $j;
        }
      echo "<br />";
  }
  
  //Task7 *-**-***
  for($i=1;$i<=5;$i++)
  {

     for($j=1;$j<=$i;$j++)
        {
          echo '*';
        }
      echo "<br />";
  }
//Task8 en cox isledilen herflerin miqdari ve herf ozu
<?php
$text='Loremore recently with desktop  of Lorem Ipsum';
for ($i=0;$i<strlen($text);$i++) {
    
   $bukva = $text[$i];
if(!isset($letters[$bukva])) {
    
         $letters[$bukva] = 0;
     }
     $letters[$bukva]++;// = $letters[$bukva]+1;

   }

foreach ($letters as $key => $value) {
    
 print $key." ".$value." raz <br>";
}

?>


//9Task en cox isledilen Herfin miqdari ve herflerin sayi
<?php
$str = "tsssqsss";
$count=0;
$patt = 'q';
for($i=0;$i<strlen($str);$i++){
    echo $str[$i].'<br>';
    if($str[$i]==$patt) {
        $count ++;
    }

} 
print  $count;

?>
<?php
$arr = [25,3,1,44,54,13,5,22,9122,22];
$Amax = 0;
$Amin = $arr[0];

foreach($arr as $key => $value) {
    
    if($value >= $Amax ) {
		$Amax = $value; 
		
	}
	
	if($value <= $Amin ) {		
		$Amin = $value; 
	}
	

}
echo "boyuk reqem: $Amax <br>";
echo "kicik reqem: $Amin";

?>

//\

<?php

$someString = "bdddfdewoosiiiooee";
$total = 0;
$massiv=[];
$vowels = Array('a','e','i','o','u');
for($i=0; $i<strlen($someString); $i++){
        $herf = $someString[$i];

  
         for ($j = 0; $j < count($vowels); $j++) {

         $saitherf = $vowels[$j];

          if ($herf == $saitherf) {
            $massiv[] = $saitherf;
           $total++;
          }


        }
   }  

echo "Butun saitler <br>";
 
foreach($massiv as $vowel) {
    echo "$vowel ";
}
echo "<br>";
echo "Saitlerin cemi $total";

?>

day-2
//Task-1-Samit herflerin cixisi ve sayi
<?php
$someString = "orem Ipsum is simply dummy text of the printing andfgbdddfdewoosiiiooee";
$total = 0;
$massa=[];
$consontants=Array('m','s','p','f','t','h','g','c','z','z');
for($i=0; $i<strlen($someString); $i++){
        $currentChar = $someString[$i];

        for ($j = 0; $j < count($consontants); $j++) {
        
         $currentConsontant = $consontants[$j];
        
          if ($currentChar == $currentConsontant) {
            $massa[] = $currentConsontant;
          }


        }
   }  

echo "Butun samitler <br>";
 
foreach($massa as $const) {
    echo "$const ";
}
 

?>
<br>
<?php
//Sait herflerin cixisi ve sayi
$someString = "orem Ipsum is simply dummy text of the printing andfgbdddfdewoosiiiooee";
$total = 0;
$massiv=[];
$vowels = Array('a','e','i','o','u');
for($i=0; $i<strlen($someString); $i++){
        $currentChar = $someString[$i];

  
         for ($j = 0; $j < count($vowels); $j++) {
        
         $currentVowel = $vowels[$j];
        
          if ($currentChar == $currentVowel) {
            $massiv[] = $currentVowel;
            $total++;
          }


        }
   }  

echo "Butun saitler <br>";
 
foreach($massiv as $vowel) {
    echo "$vowel ";
}
echo "<br>";
echo "Saitlerin cemi $total";
 
?>
//saitlerin ve samitlerin bir funksiyanin aaltinda cixisi ve onlarin sayi
<?php
$someString = "orem Ipsum is simply dummy text of the printing andfgbdddfdewoosiiiooee";
$total = 0;
$tota = 0;
$massiv=[];
$massa=[];
$consontants=Array('m','s','p','f','t','h','g','c','z','z');
$vowels = Array('a','e','i','o','u');
for($i=0; $i<strlen($someString); $i++){
        $currentChar = $someString[$i];

  
         for ($j = 0; $j < count($vowels); $j++) {
        
         $currentVowel = $vowels[$j];
        
          if ($currentChar == $currentVowel) {
            $massiv[] = $currentVowel;
            $total++;
          }
      }

            for ($a = 0; $a < count($consontants); $a++) {
        
         $currentConsontant = $consontants[$a];
        
          if ($currentChar == $currentVowel) {
            $massa[] = $currentConsontant;
            $tota++;
          }


        }
   } 

echo "Saitler ve samitler  <br>";
 
foreach($massiv as $vowel) {
    echo "$vowel ";
}
echo '<br>';
foreach($massa as $cons) {
    echo "$cons ";
}
echo "<br>";
echo "Saitlerin cemi $total";
echo "<br>";
 echo "Samitlerin  cemi $tota";
?>

//Task butun olan saitlerden bir denesin cixartmaq 



<?php
$someString = "bdddfdewoosuiiiooee";
$total = 0;
$massiv=[];

$vowels = Array('a','e','i','o','u');
for($i=0; $i<strlen($someString); $i++){
        $herf = $someString[$i];

  
         for ($j = 0; $j < count($vowels); $j++) {

         $saitherf = $vowels[$j];

          if ($herf == $saitherf) {
            $massiv[] = $saitherf;

          }


        }
   }  

echo "Butun saitler <br>";
  
  if(!isset($massiv)){
    $massiv=0;
    $massiv++;


  }
foreach(array_unique($massiv) as $vowel=>$value){
 echo $value;

    print($vowel);



}
echo "<br>";


//echo "$total";


//echo "Saitlerin cemi $total";
 
?>
day-3
 <?php
 //ancaq  sayini cixarca biler 
$text = 'It is a long established fact that a reader' ;
$count =0;


for ($i=0;$i<strlen($text);$i++) { 
    

    $herf = $text[$i];

    if($herf=='e') {
        $count = $count+1;
    }

}
echo $count;

 ?>
 
 
 
 $simvoli = array();
$text = 'privet prog';


 for($i=0;$i<strlen($text);$i++) {

 	$bukva = $text[$i];



 	if (in_array( $bukva,$simvoli))
 	{
 		
 	}

 	else  {

    array_push($simvoli, $bukva);

}
     

 	

}
 print_r($simvoli);
 
 //Cumlenin bir terefinni tapmaq

<?php



$string="sdjfh ssssskdh sdkj sdh";
$count=0;

for($i=0;$i<=strlen($string)/2;$i++){

    echo $string[$i];


}



?>



















