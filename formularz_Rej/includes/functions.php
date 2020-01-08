<?php
function dbConnect(){
    $user = "admin";
    $pswd = "admin";
    $host = "localhost";
    $db = "pole";

    $connection = mysqli_connect($host, $user, $pswd, $db);

    if(!$connection){
        die("Blad bazy danych! ") . mysqli_error($connection);
    } else return $connection;
}


function registerMe($connected){
    if(isset($_POST['send'])){
        $name = prepareMe($_POST['name'], $connected);
        $surname = prepareMe($_POST['surname'], $connected);
        $selection1 = prepareMe($_POST['sel1'], $connected);
        if($selection1 != 'Rolnik'){
            $selection2 = NULL;
        } else $selection2 = prepareMe($_POST['sel2'], $connected);

        $query = "INSERT INTO reg(id, Imie, Nazwisko, Rola, Rola2) VALUES (NULL, '{$name}', '{$surname}', '{$selection1}', '{$selection2}')";


       $register =  mysqli_query($connected, $query);

        if(!$register){
            die("Blad wysylania! ".mysqli_error($connected));
        }
    }
}

function prepareMe($input, $conn){
//    $input = mysqli_real_escape_string(dbConnect(), $input);
//    $input = htmlspecialchars($input);
//    $input = preg_replace("/[^a-zA-Z0-9]+/", "", $input);
//    return $input;
    $input = filter_var($input, FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_LOW);
    $input = filter_var($input,FILTER_SANITIZE_MAGIC_QUOTES);
    $input = filter_var($input, FILTER_SANITIZE_SPECIAL_CHARS, FILTER_FLAG_STRIP_LOW);
    $input = trim($input, "!@#$%^&*()'");
    $input = mysqli_real_escape_string($conn, $input);
    return $input;
}