<?php


//. Всички думи, в които се съдържа “is”
$str = 'The car is vary nice and it is finished';
preg_match_all('/is/', $str, $matches);
var_dump($matches);
echo "\n";

//2. Всички думи, които завършват на “ting”
$str1 = 'Hello Ting is a name, remember ting is different from Ting';
preg_match_all('/ting+/i', $str1, $matches1);
var_dump($matches1);
echo "\n";

//3. Валидна дума”
$str2 = 'Hello Ting is a name, remember ting is different from Ting';
preg_match_all('/[a-z]+/i', $str2, $matches2);
var_dump($matches2);
echo "\n";

//4.Валидно изречение
$str3 = 'Hello Ting is a name, remember ting is different from Ting!';
preg_match_all('/[\.\?\!]$/', $str3, $matches3);
var_dump($matches3);
echo "\n";

//5.Валиден български GSM номер
$str4 = 'Hello my telephone number is 0894 058 371!';
preg_match_all('/([0-9]{10})|([0-9]{4}\s[0-9]{3}\s[0-9]{3})/', $str4, $matches4);
var_dump($matches4);
echo "\n";

//6. Валиден HTML tag
$str5 = 'Hello this is a open html tag \'<html>\' and this is \'</html>\' closing tag !';
preg_match_all('@(\<{1}[a-z]{1,}\>{1})|(\<{1}\/+[a-z]{1,}\>{1})@', $str5, $matches5);
var_dump($matches5);
echo "\n";

//7. Валиден PHP statement
$str6 = 'Hello this is a open html tag \'<?php\' and this is \'?>\' closing tag !';
preg_match_all('@\<{1}\?{1}php{1}|\?{1}\>{1}@', $str6, $matches6);
var_dump($matches6);
echo "\n";

//8. Всички хора с име Иван в текст
$str7 = 'Иван е едно от най-известните имена. Иван се среща и в други балакански държави.
			Името Иван е хуаво име.';
preg_match_all('@Иван@', $str7, $mathces7);
var_dump($mathces7);
echo "\n";

//9. Всички коли с СТ регистрация

$str8 = 'Автомобилъ с регистрация A 4732 СТ се блъсна, но СТ от регистрацията е на мястото си!';
preg_match_all('@СТ@', $str8, $mathces8);
var_dump($mathces8);
echo "\n";


//10 и 11. Всички мейли в gmail,abv,yahoo
$str9 = 'Пример за поща на gmail,abv and yahoo са: ronaldo7@gmail.com, hasan99@abv.bg, hris_pleven@gmail.com!';
preg_match_all('/[a-zA-Z0-9_\.+]+@(gmail|yahoo|abv)+\.(com|bg)/', $str9, $mathces9);
var_dump($mathces9);
echo "\n";


//12. Всички числа между 1000 и 19000
$str10 = 'Мачни числата  1002, 18758, 10000, 2005, а не 20001, 999';
preg_match_all('/1+[0-9]{3,4}|[2-9]+[0-9]{3}/', $str10, $mathces10);
var_dump($mathces10);
echo "\n";

//13. всички валидни CSS класове
$str11 = 'Това е валиден CSS клас - .classname{ }, това също - .myFont{ }';
preg_match_all('/\.[a-z]+{\s}/i', $str11, $mathces11);
var_dump($mathces11);
echo "\n";

//14. Началото на всички валидни PHP while цикли
$str12 = 'Това е валидно начало на while цикъл - while( ){';
preg_match_all('/while\(\s\)\{/', $str12, $mathces12);
var_dump($mathces12);
echo "\n";

//15. Валиден SQL SELECT стейтмънт
$str13 = 'Това е валиден sql statement - SELECT name from USERS where id=5';
preg_match_all('/select\s[a-z]{2,}\sfrom\s[a-z]{2,}\swhere\s[a-z]{2,}\=[a-z0-9]/i', $str13, $mathces13);
var_dump($mathces13);
