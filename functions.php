<?php
function pswGen($lung){
    $alfabeto = 'abcdefghijklmnopqrstuvwxyz';
    $upperalfabeto = strtoupper($alfabeto);
    $numeri = '0123456789';
    $simboli = '[]()/<>*#!%&?;@-_.';
    $unione = $alfabeto.$upperalfabeto.$numeri.$simboli;
    var_dump($unione);
    $password = '';
    var_dump($_GET['lunghezza']);
    $lung = $_GET['lunghezza'];
    // while lunghezza$password non è uguale a $lung continua a prelevare da $unione

    while(strlen($password) < $lung){
        $elem = rand(0, strlen($unione)-1);
        $prova = substr($unione,$elem,1);
        $password .= $prova;
    }
    // echo $password;
    return $password = str_shuffle($password);
}