<?php

require_once('inc/connect-db.php');


if(isset($_GET['idCountry'])){
    

    $HeadOfState = $_GET['HeadOfState'];
    $GovernmentForm =  $_GET['GovernmentForm'];
    $LifeExpectancy =  $_GET['LifeExpectancy'];
    $idCountry =  $_GET['idCountry'];
    $sql = "UPDATE Country SET HeadOfState=:HeadOfState,GovernmentForm=:GovernmentForm,LifeExpectancy=:LifeExpectancy WHERE id=:id";

    try {
    $stmt = $pdo->prepare($sql);
    $stmt->bindValue(':HeadOfState', $HeadOfState, PDO::PARAM_STR);
    $stmt->bindValue(':GovernmentForm', $GovernmentForm, PDO::PARAM_STR);
    $stmt->bindValue(':LifeExpectancy', $LifeExpectancy, PDO::PARAM_STR);
    $stmt->bindValue(':id', $idCountry, PDO::PARAM_STR);
    $stmt->execute();
    }
    catch ( Exception $e ) {
        die ("Erreur dans la requete ".$e->getMessage());
    }   


    if($sql){
        header ('location: index.php?succes_updateCountry');  
    }
}


else if(isset($_GET['idCity'])){
    


    
    $Population =  $_GET['Population'];
    $idCity =  $_GET['idCity'];
    $sql2 = "UPDATE Country SET Population=:Population WHERE id=:id";

    try {
    $stmt = $pdo->prepare($sql2);
    $stmt->bindValue(':Population', $Population, PDO::PARAM_STR);
    $stmt->bindValue(':id', $idCity, PDO::PARAM_STR);
    $stmt->execute();
    }
catch ( Exception $e ) {
die ("Erreur dans la requete ".$e->getMessage());
    }   


    if($sql2){
        header ('location: index.php?succes_updateCity');  
    }
}


