<?php
    header('Access-Control-Allow-Origin: *');
    header("Content-type: application/json; charset=utf-8");

    $path = "http://localhost/TechAcademy-2/GameHeaven%20Site/img/";
    $caminho = "http://localhost/TechAcademy-2/GameHeaven%20Site/jogo/";

    $games[0] = array("id"=>1, "nome"=>"Crimson Curse", "descricao"=>"<p></p>",
    "poster"=>"{$path}cc-Vbanner.jpg","banner"=>"{$path}cc-banner.jpg","jogo"=>"{$caminho}crimsonCurse");

    $games[1] = array("id"=>2, "nome"=>"Cyber Gun", "descricao"=>"<p></p>",
    "poster"=>"{$path}cg-Vbanner.jpg","banner"=>"{$path}cg-banner.jpg");

    $games[2] = array("id"=>3, "nome"=>"Desordeon", "descricao"=>"<p></p>",
    "poster"=>"{$path}des-Vbanner.jpg","banner"=>"{$path}des-banner.jpg");

    $games[3] = array("id"=>4, "nome"=>"Flying Chicken", "descricao"=>"<p></p>",
    "poster"=>"{$path}fc-Vbanner.jpg","banner"=>"{$path}fc-banner.jpg");

    $games[4] = array("id"=>5, "nome"=>"Meowtopia", "descricao"=>"<p></p>",
    "poster"=>"{$path}mw-Vbanner.jpg","banner"=>"{$path}mw-banner.jpg");

    $games[5] = array("id"=>6, "nome"=>"Omega Collapse", "descricao"=>"<p></p>",
    "poster"=>"{$path}oc-Vbanner.jpg","banner"=>"{$path}oc-banner.jpg");

    echo json_encode($games);