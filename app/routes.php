<?php

Routes::map('clientes-cadastrados/detalhes-cliente/:id', function($params){
    Routes::load(VIEWS . 'partials/cadastros/detalhes-cliente.blade.php', $params);
});

Routes::map('/clientes-cadastrados/search', function () {
    $params = $_GET;
    $results = \App\Controllers\ListarClientes::searchClients($params);
    Routes::load(VIEWS . 'page-clientes-cadastrados.blade.php', $results);
});
