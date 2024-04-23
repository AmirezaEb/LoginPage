<?php


#----- Constants -----#
const SendBy = 'info@heroexpert.ir'; #Email Host Address
const GitHub = 'https://github.com/AmirezaEb'; #Link to github
const LinkedIn = 'https://www.linkedin.com/in/amirreza-ebrahimi-9623052a9'; #Link to LinkedIn
const Telegram = 'https://t.me/HeroExpert_ir'; #Link to Telegram
const Instagram = 'https://www.instagram.com/amireza._.eb'; #Link to Gmail

#----- DataBase -----#


$userName = 'root'; #Db username
$dbName = 'login'; #Db name
$passWord = ''; #Db password

try {
    $connect = new PDO('mysql:host=localhost;dbname=' . $dbName, $userName, $passWord);
    $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    #echo "Connecting Successfully";
} catch (Exception $e) {
    #echo "Connect Failed : " . $e->getMessage();
}

