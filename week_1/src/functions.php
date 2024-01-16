<?php

//Задание 1
function task1($arr, $bool = false)
{
    foreach ($arr as $item) {
        echo "<p>" . $item . "</p>";
    }
    if ($bool == true) {
        $string = implode(' ', $arr);
        return $string;
    }
}
?>

<?php
//Задание 2


function task2(string $symbol, ...$args){
  foreach ($args as $arg) {
    if (is_int($args)) {
      echo "В списке не число";
    }
  }

  switch ($symbol) {
    case '+':
      return $result1 = array_shift($args) + array_sum($args);
      case '-':
        return array_shift($args) - array_sum($args);
        case '/':
          $result = array_shift ($args);
          foreach ($args as $arg) {
            $result = $result / $arg;
          }
          return $result;
          case '*':
            $result = 1;
            foreach ($args as $arg) {
              $result = $result * $arg;
            }            
            return $result;
            default:
            echo "Нужно поменять символ";
}
}
?>

<?php
//Задание 3

function task3(int $a, int $b){

  $result = '<table>';
  for ($i = 1; $i <= $a; $i++){
    $result .='<tr>';
    for ($j = 1; $j < $b; $j++) {
      $result .= '<td>';
      $result .= $i * $j;
      $result .= '</td>';
    }
    $result .= '</tr>';
  }
  $result .='</table>';
  echo $result;
}
?>
<?php 

//Задание 4

function task4 () {
echo date ('d.n.Y. H:i');
echo '<br>';
echo strtotime('15.01.2024 00:00:00');
echo '<br>';
}
?>
<?php 

//Задание 5

function task5 () {
  $karl = 'Карл у Клары украл Кораллы';
  echo str_replace('К','', $karl);
  echo '<br>';
  $lemon = 'Две бутылки лимонада';
  echo str_replace('Две','Три', $lemon);

  }
?>

<?php 

//Задание 6

function task6 () {
  echo '<br>';
  file_put_contents('test.txt', 'Hello, again');
  
  $content = file_get_contents("test.txt");
  echo $content;
  }

?>
