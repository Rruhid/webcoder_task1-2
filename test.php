//Practice Practice 30-oktyabr
http://jsfiddle.net/kYwXX/19/
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
    if ($_POST["password"] === $_POST["confirm_password"]) {

        $var=file("data.txt");
        $exists=false;

        foreach($var as $key=>$value){
            $user = (explode(' ', $value));
            if (trim($user[0]) == $_POST['email']) {
                $exists = true;
                break;
            }

        }

        if($exists){
            echo "The email is already exists ";
        }else{
            $userData = $_POST['email'] . " " . $_POST['password'] . PHP_EOL;
            file_put_contents("data.txt", $userData.PHP_EOL, FILE_APPEND);
            echo "you are registered successfully ";
        }
    }else{
        echo "Confirm password must match password";
    }
} 
?>

<?php
if (isset($_POST['submit_log'])) {

	$email =isset($_POST['email']);

	$password =isset($_POST['password']);

	$file = file( "data.txt", FILE_SKIP_EMPTY_LINES|FILE_IGNORE_NEW_LINES );
	
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
//password change
				      <?php

//Your variables
$email = $_POST['email'];
$old_password = $_POST['password'];
$new_password = $_POST['new_password'];

//Call the function to change the password
changePassword( $email, $old_password, $new_password );

function changePassword( $email, $old_password, $new_password){

    //The status will be updated to true if successful.
    //This function returns boolean.
    $status = false;

    //The new password can't have spaces
    if( strpos( $new_password, " " ) !== false ){
        return $status;
    }

    //Read the file.
    $file = fopen( "data.txt", "r+", FILE_SKIP_EMPTY_LINES | FILE_IGNORE_NEW_LINES );
    $read = fread( $file, filesize( "data.txt" ));

    //Close the file
    fclose( $file );

    //Explode the data. There are two values which make up a user, so chunk into users.
    $data = array_chunk( explode( " ", $read ), 2 );

    //The names of each element (purely to make code easier)
    $keys = array(
            "email",
            "password"
        );

    //For every user in the data file.
    foreach( $data as $userID=>$user ){
        //Combine the user data with keys
        $user = array_combine( $keys, $user );

        //If the current credentials are correct
        if( $user["email"] == $email && $user["password"] == $old_password ){
            //Change the password on this user
            $user["password"] = $new_password;

            //Update the user record
            $data[$userID] = $user;

            //We have changed the user password, change status
            $status = true;

            //Since we updated the user, we don't need to proceed through the loop
            break 1;
        }
    }

    //This is the output data
    $outputData = array();

    //Since we broke the array into users, we need to put it back into a 1d array
    foreach($data as $userID=>$user){
        $outputData[] = implode( ' ', $user );
    }

    //Implode the array so we can put it back in the file
    $outputData = implode( " ", $outputData );

    //Write the data to the file.
    file_put_contents( "data.txt", $outputData );

    //Return the status, which will be true.
    return $status;
}


