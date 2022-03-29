<?php 
abstract class Animal {
    public function manger() {
        return 'Je mange';
    }

    public function dormir() {
        return 'Je dors';
    }

    abstract function __toString();

    abstract function seDeplacer();
}

?>