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
