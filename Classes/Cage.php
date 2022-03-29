<?php 
class Cage extends Conteneur {
    function enfermerAnimal($animal) {
        if ($animal instanceof Terrestre) {
            $this->ajouter($animal);
        } else {
            throw new Exception("L'animal n'est pas terrestre");
        }
    }
}
?>