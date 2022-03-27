

<?php
$example_persons_array = [
    [
        'fullname' => 'Иванов Иван Иванович',
        'job' => 'tester',
    ],
    [
        'fullname' => 'Степанова Наталья Степановна',
        'job' => 'frontend-developer',
    ],
    [
        'fullname' => 'Пащенко Владимир Александрович',
        'job' => 'analyst',
    ],
    [
        'fullname' => 'Громов Александр Иванович',
        'job' => 'fullstack-developer',
    ],
    [
        'fullname' => 'Славин Семён Сергеевич',
        'job' => 'analyst',
    ],
    [
        'fullname' => 'Цой Владимир Антонович',
        'job' => 'frontend-developer',
    ],
    [
        'fullname' => 'Быстрая Юлия Сергеевна',
        'job' => 'PR-manager',
    ],
    [
        'fullname' => 'Шматко Антонина Сергеевна',
        'job' => 'HR-manager',
    ],
    [
        'fullname' => 'аль-Хорезми Мухаммад ибн-Муса',
        'job' => 'analyst',
    ],
    [
        'fullname' => 'Бардо Жаклин Фёдоровна',
        'job' => 'android-developer',
    ],
    [
        'fullname' => 'Шварцнегер Арнольд Густавович',
        'job' => 'babysitter',
    ],
];
?>

<?php
	$arr = ['Иванов', 'Иван', 'Иванович'];
	$getFullnameFromParts = $arr[0]." ".$arr[1]." ".$arr[2];
?>
<?php
$str = 'Иванов Иван Иванович';
$keys = ['surname', 'name', 'patronomyc'];	
    $arr = explode(' ', $str);
    $getPartsFromFullname = array_combine($keys, $arr);  
?>    
<?php 
    $first.= mb_substr($str, 0, 1, 'utf-8');
    $getShortName = $getPartsFromFullname ["name"]." ".$first.".";
?>
<?php 
    $name = $getPartsFromFullname ["name"];
function gender1($name)
{
    mb_strtolower($name);
    $nameEnds = (mb_substr($name, -1, 1));
 
    if ($nameEnds == 'й' || $nameEnds == 'н') {
        return  1;
    } elseif ($nameEnds == 'а') {
        return -1;
    } else 
        return null. 0;
};
$surname = $getPartsFromFullname ["surname"];
function gender2($surname)
{
    mb_strtolower($surname);
    $surnameEnds = (mb_substr($surname, -1, 1));
 
    if ($surnameEnds == 'в') {
        return  1;
    } elseif ($surnameEnds == 'а') {
        return -1;
    } else 
        return null. 0;
};

$patronomyc = $getPartsFromFullname ["patronomyc"];
function gender3($patronomyc)
{
    mb_strtolower($patronomyc);
    $patronomycEnds = (mb_substr($patronomyc, -2, 2));
 
    if ($patronomycEnds == 'ич') {
        return  1;
    } elseif ($patronomycEnds == 'на') {
        return -1;
    } else 
        return null. 0;
};

$a = gender1($name);
$b = gender2($surname);
$c = gender3($patronomyc);
function getGenderFromName($a,$b,$c)
{
        $gender = $a + $b + $c;
    if ($gender>0) {
        return 'мужской';
    } elseif ($gender<0) {
        return 'женский';
    } else 
        return null. 'пол неопределен';
};
?>
<?php
include 'main.php';
?>