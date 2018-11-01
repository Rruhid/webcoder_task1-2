//Practice Practice 30-oktyabr
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
$dizi=array(1,2,3,4);
foreach($dizi as $say){
    $sum=$say*2;
    echo "$sum,";
}

 <?php
$letter = range("a","d");
print_r ($letter);
?>
 
 
$dizi=range("a","d");
foreach($dizi as $anatar =>$deger){
    echo "$anatar.sirada $deger var.<br>";
}
//output
// 0.sirada a var.
// 1.sirada b var.
// 2.sirada c var.
// 3.sirada d var.

 
 //The length of a string
$name="how get list of words from array which has more and less than 3 vowels separately  by only using a logic without any substr_count or preg_match?";
$total=0;
 for($i=0;$i<strlen($name);$i++){
    $total++;
 }
 echo $total;

post
 <?php
if(isset($_POST['submit_reg'])){
	$var=file("data.txt");
	$userData = $_POST['email'] . " " . $_POST['password'] . "\r\n";
	$lines=0;
		$db = fopen("data.txt", "a+");
		foreach($var as $key=>$value){
			$user = (explode(' ', $value));
			if ($_POST["password"] === $_POST["confirm_password"]) {
					//print_r($value);
				if (trim($user[0]) == $_POST['email']) {
					$lines++;
				}
				break;
				
			} 
		}
			if($lines){
					echo "The email is already exists ";
				}else{
				 fwrite($db,$userData."\r\n");
				 fclose($db);
				 echo "you are registered successfully ";
			  }
} 
?>

<?php
if (isset($_POST['submit_log'])) {
	$email =isset($_POST['email']);
	$password =isset($_POST['password']);
    $file = explode( PHP_EOL, file_get_contents( "data.txt" ));
    $auth = false;
 foreach( $file as $line ) {
	list($email, $password) = explode(" ", $line);

    if ($_POST['email'] == $email && $_POST['password'] == $password) {
        $auth =true;
        break; 
    }
}
		if($auth) {
			echo "Login successfull!";
		} else {
			echo "Invalid username or password";
		}
	}
?>
				  /*
$i = 1;

 // register start
 if (isset($_POST['name'])){
     $name = $_POST['name'];
     $surname= $_POST['surname'];
     $email = $_POST['email'];
     $password = $_POST['password'];
     $rpassword = $_POST['rpassword'];
     $myfile = fopen("newfile.txt", "r") or die("Unable to open file!");
     $cavab = fread($myfile,filesize("newfile.txt"));
     $cavab2 = explode(":",$cavab);
     print_r($cavab2);
     fclose($myfile);
     for ($i = 0;$i < count($cavab2);$i++) {
         if ($cavab2[$i] == $email) {
             $k = 1;
             echo 'bu emailde qeydiyyatmiz artiq movcuddur';
             break;

         }
     }
     if ($password == $rpassword && $k != 1){

    $file = 'newfile.txt';
// // Dosyaya artirilacaq yeni kişi
$person = ':'.$email.':'.$password.':'.$name.':'.$surname."\r\n";
file_put_contents($file, $person, FILE_APPEND);
     echo 'qeyd oldunuz';

     }
     else{
         echo '<br>oooops<br>';
     }
 }
//register end
//login start
 if (isset($_POST['loginemail'])){
     $loginmail = $_POST['loginemail'];
     $loginpassword= $_POST['loginpassword'];
     $myfile = fopen("newfile.txt", "r") or die("Unable to open file!");
      $cavab = fread($myfile,filesize("newfile.txt"));
     $cavab2 = explode(":",$cavab);
    fclose($myfile);
     for ($i = 0;$i < count($cavab2);$i++) {
         if ($cavab2[$i] == $loginmail) {
            $i++;
             if ($cavab2[$i] == $loginpassword) {
                 $y = 1;
                 $content =<<<HTML
<div class="reset">
    <h3>parolu deyisdir</h3>
    <form action="" enctype="multipart/form-data" method="post">
    <input type="text" value="{$loginmail}" name="oldmail"><br>
        <label>evvelki parol</label><input type="text" name="oldpassword"><br>
        <label>yeni parol</label><input type="password" name="resetpassword"><br>
        <input type="submit">

    </form>
</div>
HTML;
        echo $content;
                 break;
             }
         }
     }
     if ($y != 1){
         echo 'login ve ya parol sef yazilib';
     }

 }
//login end
// reset password start
 if (isset($_POST['oldpassword'])) {
     $oldmail = $_POST['oldmail'];
     $oldpassword = $_POST['oldpassword'];
     $newpassword = $_POST['resetpassword'];
     echo $oldmail.'<br>';

     $myfile = fopen("newfile.txt", "r") or die("Unable to open file!");
     $cavab = fread($myfile, filesize("newfile.txt"));
     $cavab2 = explode(":", $cavab);
     fclose($myfile);
     for ($i = 0; $i < count($cavab2); $i++) {
         if ($cavab2[$i] == $oldmail) {
             $i++;
             if ($cavab2[$i] == $oldpassword) {
                 $cavab2[$i] = $newpassword;

                // parolu deyis file code
                 $cavab2 = implode(':',$cavab2);
                 $myfile = fopen("newfile.txt", "w") or die("Unable to open file!");
                 fwrite($myfile, $cavab2);
                 fclose($myfile);
                // parolu deyis file code end
             }
             else{
                 echo 'kohne parolnuz uygun gelmir';
             }
             break;
         }
     }
 }
 // reset password end
 */


