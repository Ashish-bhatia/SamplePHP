<?php
echo  "<h1>Welcome to Php Deployed on Openshift.";
echo  "<h2>This page will display some details about the server page." ;
echo "<h2>Server Name new:  <br>";
echo $_SERVER['SERVER_NAME'];
echo "<br>";
echo "<h2>Http Host:  <br>";
echo $_SERVER['HTTP_HOST'];
echo "<br>";
echo "<h2>Script Name: <br>";
echo $_SERVER['SCRIPT_NAME'];
echo "<br>";
echo "<h2>Server Address: <br>";
echo $_SERVER['SERVER_ADDR'];
echo "<br>";
echo "<h2>Server Port: <br>";
echo $_SERVER['SERVER_PORT'];
?>
