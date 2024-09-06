<?php

// Ədədi daxil edin.
$enter_the_number = 5;


if ($enter_the_number == 2){
    echo $enter_the_number ."\t\tistisna olmaqla bütün sadə ədədlər tək ədədlərdir,".$enter_the_number."\t\tən kiçik sadə ədəddir və yeganə cüt sadə ədəddir.";
}else if ($enter_the_number == 1){
    echo "Həmişə unutmayın ki,\t\t".$enter_the_number."\t\tnə sadə, nə də mürəkkəbdir.";
}else{
    for ($i = 1; $i < $enter_the_number / 2; $i++) {
        if ($enter_the_number % 2 == 0) {
            echo "Daxil etdiyiniz\t\t". $enter_the_number ."\t\tədəd sadə ədəd deyil !";
        }else{
            echo "Daxil etdiyiniz\t\t". $enter_the_number ."\t\tədəd sadə ədədir !";
}}}
    
?>