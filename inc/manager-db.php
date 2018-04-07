<?php

/* ------------------------------------------------------------------------
Crée le 07/04/2018 par Adelaide Donovan
---------------------------------------------------------------------------
Page 'connect-db.php',  Connexion a la base de donnée de l'entreprise
---------------------------------------------------------------------------
L'utilisateur :

---------------------------------------------------------------------------

L'administrateur :

------------------------------------------------------------------------ */

require_once('connect-db.php');



function getAllCountryByContinent($continentName) {
    global $pdo;
    $query = "SELECT * FROM Country WHERE Continent=:Continent;";
    try {
        $prep = $pdo->prepare($query);
        $prep->bindValue(':Continent', $continentName);
        $prep->execute();       
        $result = $prep->fetchall(PDO::FETCH_OBJ);
        return $result;      
        }
    catch ( Exception $e ) {
        die ("Erreur dans la requete ".$e->getMessage());
    }
}





function getAllCityByCountry($idCountry) {
    global $pdo;
    $query = "SELECT * FROM City WHERE idCountry=:idCountry;";
    try {
        $prep = $pdo->prepare($query);
        $prep->bindValue(':idCountry', $idCountry);
        $prep->execute();       
        $result = $prep->fetchall(PDO::FETCH_OBJ);
        return $result;      
        }
    catch ( Exception $e ) {
        die ("Erreur dans la requete ".$e->getMessage());
    }
}






function getAllLanguageByCountry($idCountry) {
    global $pdo;
    $query = "SELECT Country.Name,CountryLanguage.Percentage,Language.Name as NameLanguague FROM Language,CountryLanguage,Country WHERE idCountry=:idCountry AND idLanguage=Language.id AND Country.id = CountryLanguage.idCountry;";
    try {
        $prep = $pdo->prepare($query);
        $prep->bindValue(':idCountry', $idCountry);
        $prep->execute();       
        $result = $prep->fetchall(PDO::FETCH_OBJ);
        return $result;      
        }
    catch ( Exception $e ) {
        die ("Erreur dans la requete ".$e->getMessage());
    }
}







function getAllByIdCountry($idCountry) {
    global $pdo;
    $query = "SELECT * FROM Country WHERE id=:idCountry ";
    try {
        $prep = $pdo->prepare($query);
        $prep->bindValue(':idCountry', $idCountry);
        $prep->execute();       
        $result = $prep->fetchall(PDO::FETCH_OBJ);
        return $result;      
        }
    catch ( Exception $e ) {
        die ("Erreur dans la requete ".$e->getMessage());
    }
}




function getAllByIdCity($idCity) {
    global $pdo;
    $query = "SELECT * FROM City WHERE id=:idCity ";
    try {
        $prep = $pdo->prepare($query);
        $prep->bindValue(':idCity', $idCity);
        $prep->execute();       
        $result = $prep->fetchall(PDO::FETCH_OBJ);
        return $result;      
        }
    catch ( Exception $e ) {
        die ("Erreur dans la requete ".$e->getMessage());
    }
}
?>