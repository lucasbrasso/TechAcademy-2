<?php
    header('Access-Control-Allow-Origin: *');
    header("Content-type: application/json; charset=utf-8");

    $path = "http://localhost/TechAcademy-2/GameHeaven%20Site/jogo/";

    $jogo[0] = array("id"=>1, "nome"=>"Crimson Curse", "descricao"=>"<p></p>",
    "jogo"=>"{$path}poster_sf6.jpg");

    $jogo[1] = array("id"=>2, "nome"=>"Cyber Gun", "descricao"=>"<p></p>",
    "poster"=>"{$path}poster_sf6.jpg");

    $jogo[2] = array("id"=>3, "nome"=>"Desordeon", "descricao"=>"<p></p>",
    "poster"=>"{$path}poster_sf6.jpg");

    $jogo[3] = array("id"=>4, "nome"=>"Flying Chicken", "descricao"=>"<p></p>",
    "poster"=>"{$path}poster_sf6.jpg");

    $jogo[4] = array("id"=>5, "nome"=>"Meowtopia", "descricao"=>"<p></p>",
    "poster"=>"{$path}poster_sf6.jpg");

    $jogo[5] = array("id"=>6, "nome"=>"Omega Collapse", "descricao"=>"<p></p>",
    "poster"=>"{$path}poster_sf6.jpg");

    echo json_encode($jogo);