<?php
function pswGen($lung){
    $alfabeto = 'abcdefghijklmnopqrstuvwxyz';
    $upperalfabeto = strtoupper($alfabeto);
    $numeri = '0123456789';
    $simboli = '[]()/<>*#!%&?;@-_.';
    $unione = $alfabeto.$upperalfabeto.$numeri.$simboli;
    // var_dump($unione);
    $password = '';
    // var_dump($_POST['lunghezza']);
    $lung = $_POST['lunghezza'];
    
    // while lunghezza$password non è uguale a $lung continua a prelevare da $unione

    while(strlen($password) < $lung){
        $random = rand(0, strlen($unione)-1);
        $elemento = substr($unione,$random,1);
        $password .= $elemento;
    }
    // echo $password;
    return $password = str_shuffle($password);
};

function getElem($var){
    $random = rand(0, strlen($var)-1);
    $elemento = substr($var,$random,1);
    return $elemento;
};