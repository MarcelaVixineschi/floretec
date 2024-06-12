<?php

$arvore = [1]["nome"];

//Rotas
//Redireciona de acordo com o link para a pag principal
header("Location: http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]/App/views/pages/principal.php");