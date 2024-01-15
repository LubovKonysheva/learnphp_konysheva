<?php

//Задание 1
  $name = 'Люба Конышева';
  $age = 31;

  echo "Меня зовут $name. <br>";
  print "Мне $age год. <br>";
  echo '<br>';

  print "\"!|/'\"\\"

  ?>

  <?php
  //Задание 2.

  echo '<br>';
  const ONE = 80;
  const TWO = 23;
  const THREE = 40;

  const FOUR = ONE - TWO - THREE;
  $krask = FOUR;

 echo "<br> Красками было выполнено $krask работ";

  ?>

<?php
  //Задание 3.

  echo '<br>';

 $age = rand (0, 100);

if($age >= 18 && $age <= 65) {
    echo "Вам еще работать и работать ($age)";
}
elseif ($age > 65) {
    echo "Вам пора на пенсию ($age)";
}
elseif ($age >= 1 && $age <= 17) {
    echo "Вам ещё рано работать ($age)";
}
elseif ($age < 1) 
    echo "Неизвестный возраст ($age)";

?>

  
<?php
  //Задание 4.

  
  $day = 2;

  switch ($day) {
    case 1:
        echo "<br> Это рабочий день";
        break;
    case $day <= 5:
        echo "<br> Это рабочий день";
        break;
    case 6:
        echo "<br> Это выходной";
        break;
    case 7:
        echo "<br> Это выходной";
        break;
    case $day > 7:
        echo "<br> Неизвестное число";
        break;
    default:
    echo "<br> Неизвестное число";
    break;
}
  ?>

<?php
  //Задание 5.

  $keys = array('model', 'speed', 'doors', 'year');
  $item = array('X5', '120', '5', '2015');
  $bmw = array_combine($keys, $item);

  $keys1 = array('model', 'speed', 'doors', 'year');
  $item1 = array('camry', '120', '4', '2000');
  $toyota = array_combine($keys1, $item1);

  $keys2 = array('model', 'speed', 'doors', 'year');
  $item2 = array('insignia', '200', '5', '2012');
  $opel = array_combine($keys2, $item2);

echo '<pre>';
print_r($bmw);
print_r($toyota);
print_r($opel);
echo '</pre>';

  ?>

<?php
  //Задание 5/2.

  $car = array
  (
      'bmw' => $bmw,
      'toyota' => $toyota,
      'opel' => $opel,
  );

  foreach ($car as $key => $item) {
    echo '<br>CAR ' . $key . '<br>' . $car[$key]['model'] . ' ' . $car[$key]['speed'] . ' ' . $car[$key]['doors'] . ' ' . $car[$key]['year'] . '<br>';
}

  ?>

<?php
  //Задание 6.

  echo '<br><table border="2" cellpadding="7"><tr>';
for ($i = 1; $i <= 10; $i++) {
	echo '<td>';
	for ($a=1; $a <=10; $a++) { 
		echo $i.' х '.$a;
		if (($i % 2 == 0) && ($a % 2 == 0)) {
			echo ' = ('.$i*$a.')<br>';
		} else if (($i % 2 != 0) && ($a % 2 != 0)) {
			echo ' = ['.$i*$a.']<br>';
		} else {
			echo ' = '.$i*$a.'<br>';
		}
	}
	echo '</td>';
}
echo '</tr></table>';

  ?>