<?php
    header('Access-Control-Allow-Origin: *');
    header("Content-type: application/json; charset=utf-8");

    $path = "http://localhost/TechAcademy-2/GameHeaven%20Site/img/";

    $fotos[1] = array(
        array("foto"=>"{$path}cc-1.jpg"),
        array("foto"=>"{$path}cc-2.jpg"),
        array("foto"=>"{$path}cc-3.jpg"),
    );

    $fotos[2] = array(
        array("foto"=>"{$path}cg-1.png"),
        array("foto"=>"{$path}cg-2.png"),
        array("foto"=>"{$path}cg-3.png"),
    );

    $fotos[3] = array(
        array("foto"=>"{$path}des-1.jpg"),
        array("foto"=>"{$path}des-2.jpg"),
        array("foto"=>"{$path}des-3.jpg"),
    );

    $fotos[4] = array(
        array("foto"=>"{$path}fc-1.png"),
        array("foto"=>"{$path}fc-2.png"),
        array("foto"=>"{$path}fc-3.png"),
    );

    $fotos[5] = array(
        array("foto"=>"{$path}mw-1.png"),
        array("foto"=>"{$path}mw-2.png"),
        array("foto"=>"{$path}mw-3.png"),
    );

    $fotos[6] = array(
        array("foto"=>"{$path}oc-1.jpg"),
        array("foto"=>"{$path}oc-2.jpg"),
        array("foto"=>"{$path}oc-3.jpg"),
    );


    echo json_encode($fotos);

