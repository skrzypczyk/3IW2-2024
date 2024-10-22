Bonjour nous sommes le
<?php

    //Commentaire sur une ligne
    /*
        plusieurs lignes
    */

    //Variables
    /*  Toujours en Anglais
     *  Pertinence du nommage
     *  Convention de nommage : camelCase (PascalCase, snake_case, kebab-case)
     *  auto déclarante
     *  typage dynamique
     */

    $myFirstname = "Yves";
    $age = 12;

    $myFirstname = &$age;
    $myFirstname = "Yves";
    echo $age;


    //Conditions classiques
    $age = 18;
    if( $age >= 18){
        echo "Majeur";
    }else{
        echo "Mineur";
    }
    //Condition ternaire
    // instruction (condition)?vrai:faux;
    echo ( $age >= 18 )?"Majeur":"Mineur";


    $myFirstname = null;

    if($myFirstname == null){
        echo "Bonjour";
    }else{
        //Concaténation
        echo "Bonjour ".$myFirstname;
    }

    echo ($myFirstname == null)?"Bonjour":"Bonjour ".$myFirstname;

    //Null coalescent
    echo "Bonjour ".($myFirstname??"");


    $scope = "Editeur";

    switch ($scope){
        case "Admin":
            echo "Peut modifier la configuration du site";
        case "Editeur":
            echo "Peut modifier tous les contenus";
        case "Auteur":
            echo "Peut modifier ses contenus";
        default:
            echo "Peut consulter le site";
            break;
    }

    //Boucles

    /*
     *  Foreach : pour un tableau
     *  While :  nb itération inconnu
     *  Do while : au moins une itération
     *  For :  itération connu
     */

/*
$dice = rand(1, 1000000);
$cpt = 1;
while ($dice != 6){
    $dice = rand(1, 1000000);
}

echo "Tentatives : ".$cpt;

$cpt = 0;
do{
    $dice = rand(1, 1000000);
    $cpt++;
}while($dice != 6);
echo "Tentatives : ".$cpt;
*/

//Incrémentation et décrémentation
$cpt = 0;
$cpt++;
++$cpt;
$cpt = $cpt +1;
$cpt += 1;


$cpt = 0;
echo $cpt; //
echo $cpt+1; //
echo $cpt; //
echo $cpt++; //
echo $cpt; //
echo --$cpt; //
echo $cpt; //
echo --$cpt++; //
echo $cpt+=1; //
echo $cpt=+1; //
echo $cpt = $cpt+1; //
echo $cpt; //


for($cpt = 0; $cpt <= 10; $cpt++){

}


//Fonctions
helloWorld();
function helloWorld()
{
    echo "Bonjour tout le monde";
}

//Variable globale : Utilisable dans tout le code
$myFirstname = "Yves";

function helloYou(&$toto)
{
    //Variable locale
    echo $toto;
}

helloYou($myFirstname);




$myFirstname = " Yves";

function cleanAndCheckFirstname(&$myFirstname)
{
    $myFirstname = trim($myFirstname);
    if(strlen($myFirstname) >= 2 && strlen($myFirstname) <= 30){
        return true;
    }
    return false;
}

if( cleanAndCheckFirstname($myFirstname) ){
    //Insertion en bdd
    // INSERT INTO
}else{
    //Affichage d'une erreur
}


?>