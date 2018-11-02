<?php
//Verilmiş cümlənin daxilində ən çox istifadə olunan hərfi tapmaq.

//cumleni yaratmaq
$str = "tats dfdftteeee seeeeeeaaaaa";
//cumleni arrayya cevirmek herfle
$words = str_split($str);
//filter etmek
$words = array_filter($words, function($word) {
    return strlen($word) > 0;
});
//herflerin cemini ayri ayri mueyyenlesdirmek
$word_counts = array_count_values($words);
//arrayin ardiciliggini saxlayir
arsort($word_counts);
//arrayin deyerini cixardir
$most_common_word = key($word_counts);
echo $most_common_word;


?>
https://www.letsknowit.com/php-programming-questions

//General Tasks 

 $str = "name:john,hone:12345,ebsite:www.23.com";
 $array=explode(",",$str);
if(count($array)!=0){

  foreach($array as $value){
     
      $data=explode(":",$value);
      echo $data[0]."=".$data[1];
      echo ' ';
    
    } 
}
  
?>
$images = "image1,image2,image3";
$images = explode(',', $images);

foreach ($images as $image) {
    $string .= "'$image',";
}

echo rtrim($string, ',');

$data = "foo:*:1023:1000::/home/foo:/bin/sh";
list($user, $pass, $uid, $gid, $gecos, $home, $shell) = explode(":", $data);
echo $user; // foo
echo $pass; 
echo $uid;
echo $gid;


$arr=array ('I','am','simple','boy!');  
echo implode("-",$arr);
  
$str="I am simple boy!";  
print_r(explode(" ",$str)); 

   $str="The best time is no time";
    $arr=explode(" ",$str);
    foreach($arr as $i) echo "$i, ";  //The, best, time, is, no, time, 


  $str="The best time is no time";
    $arr=explode("time",$str);
    foreach($arr as $i) echo "$i, ";  //The best , is no , , 

    $str="The best time is no time";
    $arr=explode(" ",$str,3);
    foreach($arr as $i) echo "$i, ";  //The, best, time is no time, 

   $str="The best time is no time";
    $arr=explode(" ",$str,-1);
    foreach($arr as $i) echo "$i, ";  //The, best, time, is, no, 

$arr=array("php","js","python");
    $str=implode(" + ", $arr);
    echo "$str";  //php + js + python





