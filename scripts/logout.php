<?php

//destrói a sessão
session_destroy();
//redireciona pagina inicial
header('location: index.php?rota=nome');


?>