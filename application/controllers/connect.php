<?php

//connect to server

$con =mysql_connect("cpanel.vorane.com","voraneco_adil","30111995");

if(!$con)
{
    die(mysql_error());
}

//select a database

$db =mysql_select_db("voraneco_healthy-time");

if(!$db)
{
    die(mysql_error());
}

?>