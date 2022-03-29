<?php 
class MartinPecheur extends Animal implements Volatile, Aquatique {
    public function voler() {
        return 'Je vole';
    }

    public function nager() {
        return 'Je nage';
    }

    public function __toString() {
        return 'Je suis un martin pêcheur';
    }

    public function seDeplacer() {
        $this->nager();
    }
}
?>