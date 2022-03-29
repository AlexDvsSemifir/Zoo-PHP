<?php 
abstract class Animal {

    /**
     * Fait manger l'animal
     */
    public function manger() {
        return 'Je mange';
    }

    /**
     * Fait dormir l'animal
     */
    public function dormir() {
        return 'Je dors';
    }

    abstract function __toString();

    /**
     * Permet de déplacer l'animal
     * Appel la méthode appropriée en fonction du type (terrestre, volant ou aquatique)
     */
    abstract function seDeplacer();
}

?>