<?php

include 'class/App.php';
$app = new App();
$app->run();

echo $app->response();
?>