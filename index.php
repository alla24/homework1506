
<?php



include 'header.php';
include 'contact_form.php';
/**
 * Created by PhpStorm.
 * User: AIR
 * Date: 15.06.2016
 * Time: 21:22
 */
$news=[['Вітаю вас на своїй сторінці!',
    '08.06.2016','resources/PA072009.jpg',
    'Тут ви можете знайти інформацію про мене,
 завантажити резюме або зв\'язтися зі мною заповнивши форму зворотнього звязку.<br />
  <br /> Сайт перебуває у тестовому режимі, тому функціонування на даний момент є обмеженим.
   Бажаю приємного перегляду!',
    '\"aboutmyself.html\"'],
    ['Веб розробка та програмування',
        '08.06.2016','http://php-academy.kiev.ua/logo.png',
        'Цей сайт є домашнім завданням в курсі PHP Інтенсив (4 місяці) в PHP Academy.
         PHP Academy - це школа програмування, в активі якої офлайнові курси по розробці web-додатків, 
         а також онлайн-програма навчання програмістів - Devionity','http://php-academy.kiev.ua/']];

//associative array
$newsAssoc=[['name'=>'Вітаю вас на своїй сторінці!',
    'date'=>'08.06.2016',
    'image'=>'resources/PA072009.jpg',
    'description'=>'Тут ви можете знайти інформацію про мене,
 завантажити резюме або зв\'язтися зі мною заповнивши форму зворотнього звязку.<br />
  <br /> Сайт перебуває у тестовому режимі, тому функціонування на даний момент є обмеженим.
   Бажаю приємного перегляду!',
    'link'=>'aboutmyself.html'],

    ['name'=>'Веб розробка та програмування',
        'date'=>'08.06.2016',
        'image'=>'http://php-academy.kiev.ua/logo.png',
        'description'=>'Цей сайт є домашнім завданням в курсі PHP Інтенсив (4 місяці) в PHP Academy.
         PHP Academy - це школа програмування, в активі якої офлайнові курси по розробці web-додатків, 
         а також онлайн-програма навчання програмістів - Devionity',
        'link'=>'http://php-academy.kiev.ua/']];

$footer='Alla Sadovets &copy; All rights reserved';?>


<!DOCTYPE HTML>
<html>
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <title>Домашня робота №4</title>
    <link rel="stylesheet" href="styles.css" type="text/css" media="screen" />
</head>

<body>

<div id="main">
    <?php echo $header;?>
    <div id="right-null">
        <div id="right">
            <div id="contact">
                <h2> Зв'язатися зі мною</h2>
                <?php echo $contact_form;?>
            </div>
        </div>
    </div>

    <div id="left-null">
        <div id="left">

            <?php
            foreach ($news as $item){
               echo     <<<body
            <h2> $item[0] </h2>
            | $item[1] |
            <p>
                <img src= $item[2] alt="image" height="100" align="left" />
                $item[3]
            </p>
            <span class="readmore"><a href= $item[4] > Читати більше ...</a></span>"
body;

            }

            //associative array
            foreach ($newsAssoc as $item){
                echo     <<<body
            <h2> {$item['name']} </h2>
            | {$item['date']} |
            <p>
                <img src= {$item['image']} alt="image" height="100" align="left" />
                {$item['description']}
            </p>
            <span class="readmore"><a href= {$item['link']} > Читати більше ...</a></span>"
body;

            }
            ?>
      </div>
    </div>
    <hr class="noscreen" />
    <div id="footer"> <?php echo $footer; ?> </div>
</div>
</body>
</html>


