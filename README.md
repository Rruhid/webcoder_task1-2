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

