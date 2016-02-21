<?php


//. ������ ����, � ����� �� ������� �is�
$str = 'The car is vary nice and it is finished';
preg_match_all('/is/', $str, $matches);
var_dump($matches);
echo "\n";

//2. ������ ����, ����� ��������� �� �ting�
$str1 = 'Hello Ting is a name, remember ting is different from Ting';
preg_match_all('/ting+/i', $str1, $matches1);
var_dump($matches1);
echo "\n";

//3. ������� �����
$str2 = 'Hello Ting is a name, remember ting is different from Ting';
preg_match_all('/[a-z]+/i', $str2, $matches2);
var_dump($matches2);
echo "\n";

//4.������� ���������
$str3 = 'Hello Ting is a name, remember ting is different from Ting!';
preg_match_all('/[\.\?\!]$/', $str3, $matches3);
var_dump($matches3);
echo "\n";

//5.������� ��������� GSM �����
$str4 = 'Hello my telephone number is 0894 058 371!';
preg_match_all('/([0-9]{10})|([0-9]{4}\s[0-9]{3}\s[0-9]{3})/', $str4, $matches4);
var_dump($matches4);
echo "\n";

//6. ������� HTML tag
$str5 = 'Hello this is a open html tag \'<html>\' and this is \'</html>\' closing tag !';
preg_match_all('@(\<{1}[a-z]{1,}\>{1})|(\<{1}\/+[a-z]{1,}\>{1})@', $str5, $matches5);
var_dump($matches5);
echo "\n";

//7. ������� PHP statement
$str6 = 'Hello this is a open html tag \'<?php\' and this is \'?>\' closing tag !';
preg_match_all('@\<{1}\?{1}php{1}|\?{1}\>{1}@', $str6, $matches6);
var_dump($matches6);
echo "\n";

//8. ������ ���� � ��� ���� � �����
$str7 = '���� � ���� �� ���-���������� �����. ���� �� ����� � � ����� ���������� �������.
			����� ���� � ����� ���.';
preg_match_all('@����@', $str7, $mathces7);
var_dump($mathces7);
echo "\n";

//9. ������ ���� � �� �����������

$str8 = '���������� � ����������� A 4732 �� �� ������, �� �� �� ������������� � �� ������� ��!';
preg_match_all('@��@', $str8, $mathces8);
var_dump($mathces8);
echo "\n";


//10 � 11. ������ ����� � gmail,abv,yahoo
$str9 = '������ �� ���� �� gmail,abv and yahoo ��: ronaldo7@gmail.com, hasan99@abv.bg, hris_pleven@gmail.com!';
preg_match_all('/[a-zA-Z0-9_\.+]+@(gmail|yahoo|abv)+\.(com|bg)/', $str9, $mathces9);
var_dump($mathces9);
echo "\n";


//12. ������ ����� ����� 1000 � 19000
$str10 = '����� �������  1002, 18758, 10000, 2005, � �� 20001, 999';
preg_match_all('/1+[0-9]{3,4}|[2-9]+[0-9]{3}/', $str10, $mathces10);
var_dump($mathces10);
echo "\n";

//13. ������ ������� CSS �������
$str11 = '���� � ������� CSS ���� - .classname{ }, ���� ���� - .myFont{ }';
preg_match_all('/\.[a-z]+{\s}/i', $str11, $mathces11);
var_dump($mathces11);
echo "\n";

//14. �������� �� ������ ������� PHP while �����
$str12 = '���� � ������� ������ �� while ����� - while( ){';
preg_match_all('/while\(\s\)\{/', $str12, $mathces12);
var_dump($mathces12);
echo "\n";

//15. ������� SQL SELECT ���������
$str13 = '���� � ������� sql statement - SELECT name from USERS where id=5';
preg_match_all('/select\s[a-z]{2,}\sfrom\s[a-z]{2,}\swhere\s[a-z]{2,}\=[a-z0-9]/i', $str13, $mathces13);
var_dump($mathces13);
