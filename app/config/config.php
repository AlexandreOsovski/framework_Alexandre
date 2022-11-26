<?php

define('BASE', '/framework_alexandre/');

define('UNSET_URI_COUNT', 1);
define('DEBUG_URI', false);

define('DB_HOST', 'framework_alexandre.local');//Endereço
define('DB_USER', 'root');
define('DB_PASS', 'root');
define('DB_NAME', 'projetcode');

$conexao = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME) or die('não foi possivel se conectar na plataforma ProjectCode!');
