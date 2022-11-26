<?php

// define('BASE' , '/framework_alexandre/');
define('HOST', 'framework_alexandre.local');
define('USUARIO', 'root');
define('SENHA', 'root');
define('DB', 'ProjectCode');

$conexao = mysqli_connect(HOST, USUARIO, SENHA, DB) or die('não foi possivel se conectar na plataforma ProjectCode!');
