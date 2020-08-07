<?php

    $name = "kartik";
    $value = 28022001;
    $expiration = time() + (60*60*24*7);

    setcookie($name,$value,$expiration);

?>

<html>
    <head>
        <title>Setting up a cookie...</title>
    </head>
    <body>
        <h1>Setting a cookie...</h1>
        <h2>Please check your browser setting to verify if the cookie is stored...</h2>
    </body>
<html>