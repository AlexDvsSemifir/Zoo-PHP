<?php 
class Aigle extends Animal implements Volatile {
    public function voler() {
        return 'Je vole';
    }

    public function __toString() {
        return 'Je suis un aigle';
    }
    public function seDeplacer() {
        $this->voler();
    }
}
?>