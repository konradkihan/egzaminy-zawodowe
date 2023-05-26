<?php
include("wedkuj.html");


function skrypt1(){
    $connection = mysqli_connect("localhost", "root", "", "wedkowanie");
    $query = "SELECT nazwa, wystepowanie FROM ryby WHERE styl_zycia=1;";
    $result = mysqli_query($connection, $query);
    while ($response = mysqli_fetch_row($result)){
        echo("<li>
        $response[0], występowanie: $response[1]
        </li>");
    }
    mysqli_close($connection);
}

?>