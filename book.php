
<form method="post" action ="test.php">
<h4>Yabanci dil</h4>
<select name="kursdili[]">
<option value="Almanca">Almanca</option>
<option value="Inglisce">Inglisce</option>
<option value="Frans">France</option>
</select>
<br>
<input type="submit" value="gonder">
</form>
<?php
if(isset($_POST['kursdili'])){
    
    echo "Secidiyiniz yabanci dili";
    foreach($_POST['kursdili'] as $key =>$value){
        echo $value;
    }
}
?>
