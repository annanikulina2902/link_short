<?php

$conn = mysqli_connect('localhost','root','root','short-link');

if(mysqli_connect_errno())
{
    echo 'Ошибка в подключении к БД ('.mysqli_connect_errno().'): '.mysqli_connect_error();
    exit();
}