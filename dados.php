<?php
session_start();
$despFixas  = $_GET['despfixas'];
$despVariav = $_GET['despVariav'];
$horasServ  = '';
$capacProd  = 220;

$cvunit     = 275;


$impostos   = '';
$lucro      = '';


$total = $_GET['despfixas'] + $_GET['despVariav'];
echo $total;
