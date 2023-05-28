<?php
// UWAGA
// Alternatywnie można usunąć operację include i wkleić zwartość pliku strona.html powyżej znacznik php
include("strona.html");
// // // // //

function skrypt1(){
    $connection = mysqli_connect("localhost", "root", "", "firma");
    $query = "SELECT imie, nazwisko, adres, miasto, czyrodo, czybadania FROM pracownicy WHERE id=2;";
    $result = mysqli_query($connection, $query);
    $response = mysqli_fetch_row($result);
    echo("
        <h3> dane </h3>
        <p> 
            $response[0] $response[1]
        </p>
        <hr>
        <h3> adres </h3>
        <p> 
            $response[2] $response[3]
        </p>
        <hr>
    ");
    if($response[4]==1)
        echo("<p>RODO: podpisano</p>");
    else
        echo("<p>RODO: niepodpisano</p>");
    if($response[5]==1)
        echo("<p>Badania: aktualne</p>");
    else
        echo("<p>Badania: nieaktualne</p>");
    
    mysqli_close($connection);

}

function skrypt2(){
    $connection = mysqli_connect("localhost", "root", "", "firma");
    $query = "SELECT COUNT(*) FROM pracownicy;";
    $result = mysqli_query($connection, $query);
    $response = mysqli_fetch_row($result);
    echo($response[0]);
    mysqli_close($connection);
}

function skrypt3(){
    $connection = mysqli_connect("localhost", "root", "", "firma");
    $query = "SELECT id, imie, nazwisko FROM pracownicy WHERE id=2;";
    $result = mysqli_query($connection, $query);
    $response = mysqli_fetch_row($result);
    echo("
        <img src='$response[0].jpg' alt='pracownik' class='image'>
        <h2>$response[1] $response[2]</h2>
    ");

    $query2 = "SELECT pracownicy.id, stanowiska.nazwa, stanowiska.opis FROM pracownicy JOIN stanowiska ON pracownicy.stanowiska_id = stanowiska.id WHERE pracownicy.id = 2;";
    $result2 = mysqli_query($connection, $query2);
    $response2 = mysqli_fetch_row($result2);
    echo("
        <h4>$response2[1]</h4>
        <h5>$response2[2]</h5>
    ");
    mysqli_close($connection);
}

?>
