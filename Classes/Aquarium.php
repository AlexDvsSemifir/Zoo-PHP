<?php 
class Aquarium extends Conteneur {
    function enfermerAnimal($animal)
    {
        if ($animal instanceof Aquatique) {
            $this->ajouter($animal);
        } else {
            throw new Exception("L'animal n'est pas Aquatique");
        }
    }
}
?>