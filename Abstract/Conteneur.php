<?php 
abstract class Conteneur {
    private $animaux = [];

    /**
     * Ajoute un animal dans la lsite d'animaux
     */
    public function ajouter($animal) {
        array_push($this->animaux, $animal);
    }

    /**
     * Retourne la liste des animaux
     */
    public function retirer($animal) {
        $this->animaux = array_diff($this->animaux, [$animal]);
    }

    /**
     * Retourne le nombre d'animaux
     */
    public function getAnimauxNumber () {
        return count($this->animaux);
    }

    /**
     * Retourne la liste des animaux
     */
    public function getAnimaux() {
        $i = 0;
        foreach($this->animaux as $animal) {
            $i ++;
            echo $i . " : " . $animal . '<br>';
        }
    }

    /**
     * Permet d'enfermer un animal dans un conteneur
     * Vérifie le type de l'animal et l'ajoute uniquement si il correspond bien au type attendu pour le conteneur,
     * puis appelle la méthode 'ajouter'
     */
    abstract function enfermerAnimal($animal);
    
}
?>