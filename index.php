<?php 

$date = time();

$birthday = 1998;
$dey_birthday = "04.10";

$day = strftime('%d.%m', $date);
$d = strftime('%d', $date);
$m = strftime('%m', $date);
$y = strftime('%Y', $date);
$count_y = $y - $birthday;

?>

<!DOCTYPE html>
<html lang="ru">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Тахай чпокай и ебитесь</title>
<title>2 title</title>
<title>Miy 3 title</title>

<meta name="description" content=""> 

<script type="text/javascript" src="scripts/jquery-3.1.1.min.js"></script>

<!--[if lt IE 8]>
<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<link href="_styles/IE.css" rel="stylesheet" type="text/css" />
<![endif]-->

<link href="main.css" rel="stylesheet" type="text/css" />
</head>

<body>

<div id="birthdey_program">
<?php
echo "<p>Малышка родилась - {$dey_birthday}.{$birthday}</p>";
if ($day == $dey_birthday) {
    echo "<p>Сегодне Леточке День Рождения! Ей - {$count_y}!</p>";
} elseif (($m < 10) || ($m == 10 && $d < 04)) {
    echo "<p>Ждём когда Леточке будет День Рождения! В этом году ей исполнится {$count_y}!</p>";
} else {
    echo "<p> В этом году Леточке уже был день рождения. Ей - {$count_y}!</p>";
}
?>
</div>

</body>
</html> 