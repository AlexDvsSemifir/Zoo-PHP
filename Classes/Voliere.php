<?php 
class Voliere extends Conteneur {
    function enfermerAnimal($animal)
    {
        if ($animal instanceof Volatile) {
            $this->ajouter($animal);
        } else {
            throw new Exception("L'animal n'est pas un volatile");
        }
    }
}
?>