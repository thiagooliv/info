<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
            $msg = array("status"=>"Info","mensagem"=>"Nos desculpamos pela inconveniência.");
            print_r($msg);
            echo "<br>";
            echo $msg["status"].": ".$msg["mensagem"];
        ?>
    </body>
</html>
