<?php 
class Dauphin extends Animal implements Aquatique {
    public function nager() {
        return 'Je nage';
    }

    public function __toString() {
        return 'Je suis un dauphin';
    }

    public function seDeplacer() {
        $this->nager();
    }
}
?>