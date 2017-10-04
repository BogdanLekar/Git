<?php 

$date = time();

$birthday = 1998;
$dey_birthday = "04.10";

$day = strftime('%d.%m', $date);
$d = strftime('%d', $date);
$m = strftime('%m', $date);
$y = strftime('%Y', $date);
$count_y = $y - $birthday;

echo "<p>Малышка родилась - {$dey_birthday}.{$birthday}</p>";
if ($day == $dey_birthday) {
    echo "<p>Сегодне Леточке День Рождения! Ей - {$count_y}!</p>";
} elseif (($m < 10) || ($m == 10 && $d < 04)) {
    echo "<p>Ждём когда Леточке будет День Рождения! В этом году ей исполнится {$count_y}!</p>";
} else {
    echo "<p> В этом году Леточке уже был день рождения. Ей - {$count_y}!</p>";
}


?>