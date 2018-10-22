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
