<?php
    header('Access-Control-Allow-Origin: *');
    header("Content-type: application/json; charset=utf-8");

    $path = "http://localhost/TechAcademy-2/GameHeaven%20Site/img/";

    $banners[0] = array("nome"=>"Crimson Curse","imagem"=>"{$path}cc-banner.jpg","id_game"=>1);
    $banners[1] = array("nome"=>"Cyber Gun","imagem"=>"{$path}cg-banner.jpg","id_game"=>2);
    $banners[2] = array("nome"=>"Desordeon","imagem"=>"{$path}des-banner.jpg","id_game"=>3);
    $banners[2] = array("nome"=>"Flying Chicken","imagem"=>"{$path}fc-banner.jpg","id_game"=>4);
    $banners[2] = array("nome"=>"Meowtopia","imagem"=>"{$path}mw-banner.jpg","id_game"=>5);
    $banners[2] = array("nome"=>"Omega Collapse","imagem"=>"{$path}oc-banner.jpg","id_game"=>6);

    echo json_encode($banners);