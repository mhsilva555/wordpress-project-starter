<?php

function cadastrar_cliente(){

    $post = $_POST['dados'];
    parse_str($post, $dados);

    $cadastro = new \App\Controllers\CadastrarCliente;
    $response = $cadastro->send($dados);

    echo $response;
    wp_die();
}
add_action('wp_ajax_cadastrar_cliente', 'cadastrar_cliente');
add_action('wp_ajax_nopriv_cadastrar_cliente', 'cadastrar_cliente');


function login_ajax(){

    $post = $_POST['dados'];
    parse_str($post, $dados);

    $user_login = sanitize_text_field($dados['user']);
    $user_password = sanitize_text_field($dados['password']);
    $remember = ($dados['remember'] == 'on') ? true : false;

    \App\Controllers\Login::sigin($user_login, $user_password, $remember);

    wp_die();
}
add_action('wp_ajax_login_ajax', 'login_ajax');
add_action('wp_ajax_nopriv_login_ajax', 'login_ajax');


function logout_ajax(){
    wp_logout();

    wp_die();
}
add_action('wp_ajax_logout_ajax', 'logout_ajax');
add_action('wp_ajax_nopriv_logout_ajax', 'logout_ajax');
