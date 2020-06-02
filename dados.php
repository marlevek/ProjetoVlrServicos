<?php

$despFixas  = $_GET['despfixas']; //usuário preencherá
$despVariav = $_GET['custoVariav']; //usuário preencherá
$horasServ  = ''; //usuário preencherá
$capacProd  = 220; //usuário preencherá
$cfunit     = '$despFixas / $capacProd'; // preenchido automaticamente 
$cfunitServ = '$cfunit * $horasServ'; //preenchido automaticamente
$cvunit     = ''; //usuário preencherá
$cut        = '$cfunit + $cvunit'; //preencido automaticamente
$impostos   = ''; //usuário preencherá
$lucro      = ''; //usuário preencherá
$tm         = '(100/100-($lucro + $impostos))'; //preenchido automaticamente
$pv         = '$cut * $tm';//esse vai ser preenchido automaticamente e é o valor final do serviço e deve preencher o campo valor do serviço
