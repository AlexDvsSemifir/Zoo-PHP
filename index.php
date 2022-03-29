<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zoo</title>
</head>


<body>

<?php 
require_once "./Interfaces/Volatile.php";
require_once "./Interfaces/Aquatique.php";
require_once "./Interfaces/Terrestre.php";
require_once "./Abstract/Animal.php";
require_once "./Abstract/Conteneur.php";

?>

<h1>Le ZOO</h1>

<h2>Test des instances d'animaux</h2>

<h3>Chat</h3>

<?php require_once "./Classes/Chat.php" ?>
<?php 
$chat = new Chat();
echo $chat;
echo $chat->seDeplacer();
?>

<h3>Aigle</h3>

<?php require_once "./Classes/Aigle.php" ?>
<?php 
$aigle = new Aigle();
echo $aigle;
echo $aigle->seDeplacer();
?>

<h3>Dauphin</h3>

<?php require_once "./Classes/Dauphin.php" ?>
<?php 
$dauphin = new Dauphin();
echo $dauphin;
echo $dauphin->seDeplacer();
?>

<h3>Martin Pecheur</h3>

<?php require_once "./Classes/MartinPecheur.php" ?>

<?php 
$martin = new MartinPecheur();
echo $martin;
echo $martin->seDeplacer();
?>

<h2>Test des cages</h2>

<h3>Cage</h3>
<?php require_once './Classes/Cage.php' ?>
<?php 
$cage = new Cage();
$cage->enfermerAnimal($chat);
$cage->enfermerAnimal($chat);
echo $cage->getAnimaux();
?>

<h3>Aquarium</h3>

<?php require_once './Classes/Aquarium.php' ?>
<?php 
$Aquarium = new Aquarium();
$Aquarium->enfermerAnimal($dauphin);
$Aquarium->enfermerAnimal($dauphin);
$Aquarium->enfermerAnimal($dauphin);
echo $Aquarium->getAnimaux();

?>

<h3>Voliere</h3>
<?php require_once './Classes/Voliere.php' ?>
<?php 
$voliere = new Voliere();
$voliere->enfermerAnimal($martin);
$voliere->enfermerAnimal($martin);
$voliere->enfermerAnimal($martin);
$voliere->enfermerAnimal($martin);
$voliere->enfermerAnimal($martin);
$voliere->enfermerAnimal($martin);
echo $voliere->getAnimaux();
?>

<h2>Zoo</h2>

<?php require_once './Classes/Zoo.php'?>

<?php 
$zoo = new Zoo();
$zoo->ajouterCage($cage);
$zoo->ajouterCage($cage);
$zoo->ajouterCage($cage);
$zoo->ajouterVoliere($voliere);
$zoo->ajouterVoliere($voliere);
$zoo->ajouterAquarium($Aquarium);
$zoo->getAnimaux();
?>
    
</body>
</html>