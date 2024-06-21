<?php
    header('Access-Control-Allow-Origin: *');
    header("Content-type: application/json; charset=utf-8");

    $path = "http://localhost/TechAcademy-2/GameHeaven%20Site/img/";
    $caminho = "jogo/";

    $games[0] = array("id"=>1, "nome"=>"Crimson Curse", "descricao"=>"<p></p>",
    "poster"=>"{$path}cc-Vbanner.jpg","banner"=>"{$path}cc-banner.jpg","jogo"=>"{$caminho}crimsonCurse/index.html");

    $games[1] = array("id"=>2, "nome"=>"Cyber Gun", "descricao"=>"<p></p>",
    "poster"=>"{$path}cg-Vbanner.jpg","banner"=>"{$path}cg-banner.jpg","jogo"=>"{$caminho}Cybergun/index.html");

    $games[2] = array("id"=>3, "nome"=>"Desordeon", "descricao"=>"<p></p>",
    "poster"=>"{$path}des-Vbanner.jpg","banner"=>"{$path}des-banner.jpg","jogo"=>"{$caminho}Desordeon/index.html");

    $games[3] = array("id"=>4, "nome"=>"Flying Chicken", "descricao"=>"<p></p>",
    "poster"=>"{$path}fc-Vbanner.jpg","banner"=>"{$path}fc-banner.jpg","jogo"=>"{$caminho}flyingChicken/index.html");

    $games[4] = array("id"=>5, "nome"=>"Meowtopia", "descricao"=>"<p></p>",
    "poster"=>"{$path}mw-Vbanner.jpg","banner"=>"{$path}mw-banner.jpg","jogo"=>"{$caminho}Meowtopia/index.html");

    $games[5] = array("id"=>6, "nome"=>"Omega Collapse", "descricao"=>"<p></p>",
    "poster"=>"{$path}oc-Vbanner.jpg","banner"=>"{$path}oc-banner.jpg","jogo"=>"{$caminho}omegaCollapse/index.html");

    echo json_encode($games);