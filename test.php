//Practice 
 <?php
$str="en cox enaan nenjnaadfnn";
$count=0;
$herf='a';

for($i=0;$i<strlen($str);$i++){

    if($str[$i]==$herf){

     $count++;
    }


}
echo $count;
echo'-';
echo $herf;

?>
//randpom sayilarin bilinmesi
$sayi=rand(0,9);
$sonuc=($sayi>5?'5 den boyukdur':'5 den kicikdir');
echo $sonuc;

$ne=' ';
$a=empty($ne)?'Beli bosdur':'Bos deyil';
echo $a;
//$num='23';

$num=23;
$a=is_int($num)?'nomredir':'Nomre deyil';
echo $a;

$num=23.32;
//$num=2332;
$a=is_float($num)?'Noktali':'Noktasiz';
echo $a;


<?php 
  
$num = 12; 
if (is_numeric($num)) { 
        echo $num . " is numeric"; 
    } 
    else { 
        echo $num . " is not numeric"; 
    } 
?> 


$rakam=35;
$num=(($rakam % 2)==0)?'cetnoye':'necetnoe';
echo $num;


$fiyat=2.99;
if(is_float($fiyat)){
    echo $fiyat.'neceloe cislo';
}elseif(is_int($fiyat)){
    echo $fiyat.'sayi tam sayidir';

}

<?php
$i=rand(0,2);
if($i==0){
    echo "sayi 0 dir";
}elseif($i==1){
    echo "sayi 1 dir";
}elseif($i==2){
    echo "sayi 2 dir";
}

?>
<form method ="post" action="">
<select name="yil">
<?php
for($i=date("Y");$i<=date("Y")+4;$i++){
    echo "<option value=\"$i\">$i</option>\n\r";
}
?>
 
 
for($i=0;$i<=10;$i++){
  echo"$i";
}
echo "<br>";
for($i=10;$i>5;$i--){
    echo $i;
}
echo"<br>";
for($i=2;$i<=12;$i+=2){
    echo "$i";
}
echo"<br>";
for($i=22;$i>10;$i-=2){
    echo $i;
}






