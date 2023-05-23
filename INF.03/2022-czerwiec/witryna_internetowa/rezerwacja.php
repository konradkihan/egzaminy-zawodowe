<?php
echo("<h1>Dodano rezerwację do bazy</h1>");
$connection = mysqli_connect("localhost", "root", "", "baza");
$query = "INSERT INTO rezerwacje (data_rez, liczba_osob, telefon) 
VALUES ('".$_POST["data"]."', '".$_POST["osoby"]."', '".$_POST["telefon"]."' );";
mysqli_query($connection, $query);
mysqli_close($connection);
?>