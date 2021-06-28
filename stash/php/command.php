<?php
$local= "localhost";
$user ="root";
$pass ="";
$db ="stash";

if(!$conn = mysqli_connect($local,$user,$pass,$db))
{
    die ("connection error") ;
}
