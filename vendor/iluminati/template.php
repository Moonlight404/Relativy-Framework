<?php
/**
 * Relavify - A PHP Framework For Web
 *
 * @package  Relavify
 * @author   Alexandre Silva
 */

require ("bootstrap/framework.php");

function css(){
    $str = file_get_contents('env.json');
    $json = json_decode($str, true);
    $framework = $json['framework'];
    echo frameworkCSS($framework);
}

function js(){
    $str = file_get_contents('env.json');
    $json = json_decode($str, true);
    $framework = $json['framework'];
    echo frameworkJS($framework);
}

function template($h1){
    $template = '<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>'.$h1.'</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        '. css() .'

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: "Nunito", sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }
            .full-height {
                height: 100vh;
            }
            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }
            .position-ref {
                position: relative;
            }
            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }
            .content {
                text-align: center;
            }
            .title {
                font-size: 84px;
            }
            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }
            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            <div class="content">
                <div class="title m-b-md">
                    '.$h1.'
                </div>
            </div>
        </div>
    </body>
    '. js() .'
</html>';
            return $template;
}