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
//Task 6




