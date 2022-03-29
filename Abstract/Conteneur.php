<?php 
abstract class Conteneur {
    private $animaux = [];

    public function ajouter($animal) {
        array_push($this->animaux, $animal);
    }

    public function retirer($animal) {
        $this->animaux = array_diff($this->animaux, [$animal]);
    }

    public function getAnimauxNumber () {
        return count($this->animaux);
    }

    public function getAnimaux() {
        $i = 0;
        foreach($this->animaux as $animal) {
            $i ++;
            echo $i . " : " . $animal . '<br>';
        }
    }

    abstract function enfermerAnimal($animal);
    
}
?>