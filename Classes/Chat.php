<?php 

class Chat extends Animal implements Terrestre {
    public function marcher() {
        return 'Je marche';
    }

    public function goLitiere() {
        return 'Je vais faire caca et mettre des graviers partout';
    }

    public function __toString() {
        return 'Je suis un chat';
    }

    public function seDeplacer() {
        $this->marcher();
    }
}
?>