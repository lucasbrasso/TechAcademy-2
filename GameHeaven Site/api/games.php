<?php
    header('Access-Control-Allow-Origin: *');
    header("Content-type: application/json; charset=utf-8");

    $path = "http://localhost/TechAcademy-2/GameHeaven%20Site/api/";

    $games[0] = array("id"=>1, "nome"=>"Crimson Curse", "descricao"=>"<p></p>",
    "poster"=>"{$path}poster_sf6.jpg","banner"=>"{$path}sf6.jpg");

    $games[1] = array("id"=>2, "nome"=>"Cyber Gun", "descricao"=>"<p></p>",
    "poster"=>"{$path}poster_sf6.jpg","banner"=>"{$path}sf6.jpg");

    $games[2] = array("id"=>3, "nome"=>"Desordeon", "descricao"=>"<p></p>",
    "poster"=>"{$path}poster_sf6.jpg","banner"=>"{$path}sf6.jpg");

    $games[3] = array("id"=>4, "nome"=>"Flying Chicken", "descricao"=>"<p></p>",
    "poster"=>"{$path}poster_sf6.jpg","banner"=>"{$path}sf6.jpg");

    $games[4] = array("id"=>5, "nome"=>"Meowtopia", "descricao"=>"<p></p>",
    "poster"=>"{$path}poster_sf6.jpg","banner"=>"{$path}sf6.jpg");

    $games[5] = array("id"=>6, "nome"=>"Omega Collapse", "descricao"=>"<p></p>",
    "poster"=>"{$path}poster_sf6.jpg","banner"=>"{$path}sf6.jpg");

    echo json_encode($games);