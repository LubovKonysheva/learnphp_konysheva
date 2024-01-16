<?php
require('./src/functions.php');


//Задание 4

function task4 () {
echo date ('d.n.Y. H:i');
echo '<br>';
echo strtotime('15.01.2024 00:00:00');
echo '<br>';
}



//Задание 5

function task5 () {
$karl = 'Карл у Клары украл Кораллы';
echo str_replace('К','', $karl);
echo '<br>';
$lemon = 'Две бутылки лимонада';
echo str_replace('Две','Три', $lemon);
}



//Задание 6

function task6 () {
echo '<br>';
file_put_contents('test.txt', 'Hello, again');

$content = file_get_contents("test.txt");
echo $content;
}


task1(['Маша', 'Ваня'], false);
echo task2("*", 1, 2, 3);
task3(8,8);
task4();
task5();
task6();