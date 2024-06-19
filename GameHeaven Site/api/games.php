<?php
    header('Access-Control-Allow-Origin: *');
    header("Content-type: application/json; charset=utf-8");

    $path = "https://www.professorburnes.com.br/stem/images/";

    $games[2] = array("id"=>2, "nome"=>"Crimson Curse", "descricao"=>"<p></p>",
    "poster"=>"{$path}poster_sf6.jpg","banner"=>"{$path}sf6.jpg");

    $games[2] = array("id"=>2, "nome"=>"Cyber Gun", "descricao"=>"<p></p>",
    "poster"=>"{$path}poster_sf6.jpg","banner"=>"{$path}sf6.jpg");

    $games[2] = array("id"=>2, "nome"=>"Desordeon", "descricao"=>"<p></p>",
    "poster"=>"{$path}poster_sf6.jpg","banner"=>"{$path}sf6.jpg");

    $games[2] = array("id"=>2, "nome"=>"Flying Chicken", "descricao"=>"<p></p>",
    "poster"=>"{$path}poster_sf6.jpg","banner"=>"{$path}sf6.jpg");

    $games[2] = array("id"=>2, "nome"=>"Meowtopia", "descricao"=>"<p></p>",
    "poster"=>"{$path}poster_sf6.jpg","banner"=>"{$path}sf6.jpg");

    $games[2] = array("id"=>2, "nome"=>"Omega Collapse", "descricao"=>"<p></p>",
    "poster"=>"{$path}poster_sf6.jpg","banner"=>"{$path}sf6.jpg");

    echo json_encode($games);