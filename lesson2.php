<?php 
/////////////
// Урок 2
/////////////
// Задание 1 
/////////////

echo "Задание 1.<br> Объявить две целочисленные переменные $a и $b и задать им произвольные начальные значения. Затем написать скрипт, который работает по следующему принципу:<br>

если $a и $b положительные, вывести их разность<br>
если $а и $b отрицательные, вывести их произведение<br>
если $а и $b разных знаков, вывести их сумму<br>
ноль можно считать положительным числом.<br><br>";

$a = rand(-10,10);
$b = rand(-10,10);
echo "$a - первое число <br> $b - второе число <br>";

if ($a>=0 && $b>=0) {
	$result = $a - $b;
	echo "Числа положительные, разность :  $result <br>";}
 elseif ($a<0 && $b<0) {
 	$result = $a * $b;
 	echo "Числа отрицательные, произведение : $result <br>";}
 else {
 	$result = $a + $b; 
 	echo "Числа разных знаков, сумма : $result <br>";}


/////////////
// Задание 2 
/////////////

echo "<br><br>Задание 2.<br> Присвоить переменной $а значение в промежутке [0..15]. С помощью оператора switch организовать вывод чисел от $a до 15. <br><br>";

$c = rand(0, 15);

echo "Переменная равна: $c <br>";

switch ($c) {
    case 0:
      echo "C равно $c <br>";
			$c++;
    case 1:
      echo "C равно $c <br>";
			$c++;
    case 2:
      echo "C равно $c <br>";
			$c++;
    case 3:
      echo "C равно $c <br>";
			$c++;       
    case 4:
      echo "C равно $c <br>";
			$c++;
    case 5:
      echo "C равно $c <br>";
			$c++;
    case 6:
      echo "C равно $c <br>";
			$c++;
    case 7:
      echo "C равно $c <br>";
			$c++;
    case 8:
      echo "C равно $c <br>";
			$c++;
    case 9:
      echo "C равно $c <br>";
			$c++;       
    case 10:
      echo "C равно $c <br>";
			$c++;
    case 11:
      echo "C равно $c <br>";
			$c++;
    case 12:
      echo "C равно $c <br>";
			$c++;
    case 13:
      echo "C равно $c <br>";
			$c++;
    case 14:
      echo "C равно $c <br>";
			$c++;
    case 15:
      echo "C равно $c <br>";
			$c++;          
}

/////////////
// Задание 3 
/////////////

echo "<br><br>Задание 3.<br> Реализовать основные 4 арифметические операции в виде функций с двумя параметрами. Обязательно использовать оператор return. <br><br>";

$x = rand(1,10);
$y = rand(1,10);

echo "Переменная X равна: $x <br>";
echo "Переменная Y равна: $y <br>";
function plus($x,$y) {
	$result = $x + $y; 
	echo "Сложение - $result <br>";
	return;
}

function minus($x,$y) {
	$result = $x - $y; 
	echo "Разница - $result <br>";
	return;
}

function multiply($x,$y) {
	$result = $x * $y; 
	echo "Произведение - $result <br>";
	return;
}

function div($x,$y) {
	if ($x==0 || $y==0) {
		echo "На ноль делить нельзя!";
	} else {
		$result = $x / $y; 
		echo "Деление - $result <br>";
		return;
	}
}
plus($x,$y);
minus($x,$y);
multiply($x,$y);
div($x,$y);



/////////////
// Задание 4 
/////////////

echo "<br><br>Задание 4.<br> Реализовать функцию с тремя параметрами: function mathOperation($arg1, $arg2, $operation), где $arg1, $arg2 – значения аргументов, $operation – строка с названием операции. В зависимости от переданного значения операции выполнить одну из арифметических операций (использовать функции из пункта 3) и вернуть полученное значение (использовать switch). <br><br>";

echo "Переменная X равна: $x <br>";
echo "Переменная Y равна: $y <br>";

function mathOperation($arg1,$arg2, $operation) {
	switch ($operation) {
    case plus:
      return plus($arg1,$arg2);
			break;
    case minus:
      return minus($arg1,$arg2);
			break;
    case multiply:
      return multiply($arg1,$arg2);
			break;
    case div:
      return div($arg1,$arg2);
			break;         
	}
}

echo mathOperation($x,$y, plus);
echo mathOperation($x,$y, minus);
echo mathOperation($x,$y, multiply);
echo mathOperation($x,$y, div);

/////////////
// Задание 5 
/////////////

echo "<br><br>Задание 5.<br> Посмотреть на встроенные функции PHP. Используя имеющийся HTML шаблон, вывести текущий год в подвале при помощи встроенных функций PHP. <br><br>";


/////////////
// Задание 6 
/////////////

echo "<br><br>Задание 6.<br> *С помощью рекурсии организовать функцию возведения числа в степень. Формат: function power($val, $pow), где $val – заданное число, $pow – степень. <br><br>";

$val = rand(1, 15); 
echo "Переменная val равна: $val <br>";

function power($val, $pow) {
	
	if ($pow > 1) {
   	return $val*(power($val, $pow-1));

  } elseif ($pow = 1) {
  	return $val*$pow;
  }
	
}

$round6 = power($val, 5);
echo $round6;

/////////////
// Задание 7
/////////////

echo "<br><br>Задание 7.<br> *Написать функцию, которая вычисляет текущее время и возвращает его в формате с правильными склонениями, например:<br>

22 часа 15 минут<br>
21 час 43 минуты <br><br>";

$minutes = date(i);

function formated_date() {
	 
	if (date(G)==2 || date(G)==3 || date(G)==4 || date(G)==22 || date(G)==23 || date(G)==24) {
		$result = date(G); 
		echo "$result часа ";
	} elseif (date(G)==1 || date(G)==21) {
		$result = date(G); 
		echo "$result час ";
	} else {
		$result = date(G); 
		echo "$result часов ";
	}

	$mins = substr(date(i), 1);
	if ($mins==1) {
		$result = date(i);
		echo "$result минута";
	} elseif ($mins==2 || $mins==3 || $mins==4 ) {
		$result = date(i);
		echo "$result минуты";
	} else {
		$result = date(i);
		echo "$result минут";
	}	
}

formated_date()
?>