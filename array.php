
<?php
//java-da 100000 təsadüfi ədədlərin daxilində hansı ədəddən
//neçə dənə olduğunu tapan console proqramı qurmaq.
//Bu təsadüfi ədədlərin seçim aralığı 1-100 arası olmalıdır.


//massivi yaradiriq
$random_number_array = range(0, 100000);
//massivin tesadufunu yaratmaq
shuffle($random_number_array );
//secim araligini yaratmaq
$random_number_array = array_slice($random_number_array ,0,100);
echo "<pre>";
print_r($random_number_array);
echo "</pre>";
?>
<!--consola gondermek-->
<script>
    console.log(<?= json_encode($random_number_array); ?>);
</script>


