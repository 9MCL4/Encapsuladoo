<?php
require_once 'pessoa.php';
$pessoa = new pessoa ();
$pessoa->setNome('Maria');
echo $pessoa->getNome();