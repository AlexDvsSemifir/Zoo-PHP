<?php 
class Zoo {
    private $cages = [];
    private $volieres = [];
    private $aquariums = [];

    public function ajouterCage($cage) {
        array_push($this->cages, $cage);
    }

    public function ajouterVoliere($voliere) {
        array_push($this->volieres, $voliere);
    }

    public function ajouterAquarium($aquarium) {
        array_push($this->aquariums, $aquarium);
    }

    public function getAnimaux() {
        $i = 0;
        foreach($this->cages as $cage) {
            $i ++;
            echo "Cage :" . '<br>'; 
            echo $i . " : " . $cage->getAnimaux() . '<br>';
        }
        foreach($this->volieres as $voliere) {
            echo "Voliere :" . '<br>'; 
            $i ++;
            echo $i . " : " . $voliere->getAnimaux() . '<br>';
        }
        foreach($this->aquariums as $aquarium) {
            echo "Aquarium :" . '<br>'; 
            $i ++;
            echo $i . " : " . $aquarium->getAnimaux() . '<br>';
        }
    }
}
?>