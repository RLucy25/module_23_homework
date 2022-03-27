<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Practice </title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
    <div class="flex-container">

        <div class="fullname">
                   
                    <p> <?php echo $example_persons_array [ 0] ["fullname"]; ?> </p>
                    <p> Задание 1:
                        getFullnameFromParts принимает как аргумент три строки — фамилию, имя и отчество. Возвращает как результат их же, но склеенные через пробел.
Пример: как аргументы принимаются три строки «Иванов», «Иван» и «Иванович», а возвращается одна строка — «Иванов Иван Иванович».
                        
                    <p class="answer">Ответ: <?php echo($getFullnameFromParts);?> </p>
                    </p>
                    <p>
                        Задание 2:
                        getPartsFromFullname принимает как аргумент одну строку — склеенное ФИО. Возвращает как результат массив из трёх элементов с ключами ‘name’, ‘surname’ и ‘patronomyc’.
Пример: как аргумент принимается строка «Иванов Иван Иванович», а возвращается массив [‘surname’ => ‘Иванов’ ,‘name’ => ‘Иван’, ‘patronomyc’ => ‘Иванович’].
                    <p class="answer">Ответ: <?php var_dump($getPartsFromFullname);?><p/>
                    </p>
                    <p>
                        Задание 3:
                        Разработайте функцию getShortName, принимающую как аргумент строку, содержащую ФИО вида «Иванов Иван Иванович»
                        и возвращающую строку вида «Иван И.», где сокращается фамилия и отбрасывается отчество.
                        Для разбиения строки на составляющие используйте функцию getPartsFromFullname.
                        <p class="answer">Ответ: <?php echo ($getShortName);?></p>
                    </p>
                    <p>
                        Задание 4:
                        При разработке информационной системы вы всячески стараетесь избежать сбора персональных данных.
                         Однако, видимо, дизайнера забыли об этом предупредить, и
                         он разработал два вида интерфейса — “мужской” и “женский”.
                         Получилось очень здорово, и вы решили определять пол автоматически по ФИО.
                 Разработайте функцию getGenderFromName, принимающую как аргумент строку, содержащую ФИО (вида «Иванов Иван Иванович»). 
                        <p class="answer">Ответ: <?php echo getGenderFromName($a,$b,$c);?></p>
                    </p>
        </div>
          
    </div>


</body>
</html>
