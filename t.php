<?php

///IGNORE this file

/**
 * Created by PhpStorm.
 * User: AIR
 * Date: 15.06.2016
 * Time: 21:22
 */
include_once 't.php';

if ($_SERVER['REQUEST_URI']=='/'){        //array, Variables set by the web server
    $Page='index';
    $Module='index';
}
else{
    $URL_Path=parse_url($_SERVER['REQUEST_URI'],PHP_URL_PATH);//retrieve just URL_PATH component as a string.
    $URL_Parts=explode('/',trim($URL_Path,'/')); //Split URL path by '/', after '/' are stripped from the beginning and end of the path
    $Page=array_shift($URL_Parts);//   shifts the first value of the array URI Path off and returns it, shortening the array by one element and moving everything down.
    $Module=array_shift($URL_Parts); //Returns the shifted value, or NULL if array is empty or is not an array.

    if(!empty($Module)){
        $Param=array();
        for ($i=0;$i<count($URL_Parts);$i++){
            $Param[$URL_Parts[$i]]=$URL_Parts[++$i];
        }
    }
}

if ($Page=='index' and $Module=='index') echo 'Головна сторінка';
else if ($Page=='aboutmyself')

    $photo="";
$header_img = "";
?>


<!DOCTYPE HTML>
<html>
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <title>Домашня робота №2</title>
    <link rel="stylesheet" href="styles.css" type="text/css" media="screen" />
</head>

<body>

<div id="main">
    <div id="header" >
        <h1>Сайт Алли Садовець</h1>
    </div>
    <div id="navi">
        <ul>
            <li><a href="">Головна</a></li>
            <li><a href="">Про себе</a></li>
            <li><a href="">Резюме</a></li>
            <li><a href="">Фотографії</a></li>
            <li><a href="">Контакти</a></li>
        </ul>
    </div>
    <div id="right-null">
        <div id="right">
            <div id="contact">
                <h2> Зв'язатися зі мною</h2>
                <form id="contactform" name="contact" method="post" action="#">
                    <p class="note"><span class="req">*</span> Поля з зірочкою обов'язкові для заповнення</p>
                    <div class="row">
                        <label for="name">Ваше ім'я <span class="req">*</span></label>
                        <input type="text" name="name" id="name" class="txt" tabindex="1" placeholder="Введіть ваше ім'я" required>
                    </div>

                    <div class="row">
                        <label for="email">E-mail <span class="req">*</span></label>
                        <input type="email" name="email" id="email" class="txt" tabindex="2" placeholder=" address@gmail.com" required>
                    </div>

                    <div class="row">
                        <label for="subject">Тема <span class="req">*</span></label>
                        <input type="text" name="subject" id="subject" class="txt" tabindex="3" placeholder="Тема листа" required>
                    </div>

                    <div class="row">
                        <label for="message">Повідомлення <span class="req">*</span></label>
                        <textarea name="message" id="message" class="txt" tabindex="4" required></textarea>
                    </div>

                    <div >
                        <input type="submit" id="submitbtn" name="submitbtn" tabindex="5" value="Відправити лист">
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div id="left-null">
        <div id="left">
            <h2> Вітаю вас на своїй сторінці!</h2>
            | 08.06.2016 |
            <p>
                <img src="" alt="image" width="221" height="165" align="left" />
                Тут ви можете знайти інформацію про мене, завантажити резюме або зв'язтися зі мною заповнивши форму зворотнього звязку.<br /> <br /> Сайт перебуває у тестовому режимі, тому функціонування на даний момент є обмеженим. Бажаю приємного перегляду!
            </p>
            <span class="readmore"><a href=""> Читати більше ...</a></span>

            <h2>Веб-технології та програмування</h2>
            | 08.06.2016 |
            <p>
                <img src="http://php-academy.kiev.ua/logo.png" alt="image"  height="75" align="left" />
                Цей сайт є домашнім завданням в курсі PHP Інтенсив (4 місяці) в PHP Academy. PHP Academy - це школа програмування, в активі якої офлайнові курси по розробці web-додатків, а також онлайн-програма навчання програмістів - Devionity
            </p>
            <span class="readmore"><a href="http://php-academy.kiev.ua/"> Читати більше...</a></span>
        </div>
    </div>
    <hr class="noscreen" />
    <div id="footer"> Alla Sadovets &copy; All rights reserved</div>
</div>
</body>
</html>