<?php

class Warrior extends Character
{
    // (Classe mage)
    public $critiqueAttack = 0;

    function __construct(string $name) {
        $this->name = $name;
    }
    
    public function choiceAttack() {
        $attack = 0;
        $random = rand(1, 10);
        if ($random > 3){
            //20% de chance
            if($this->critiqueAttack == 0){
                $this->critiqueAttack ++;
                $this->lastAttack = "{$this->name} charge son coup critique {$this->critiqueAttack}";
            }
            else if($this->critiqueAttack == 1){
                $this->critiqueAttack = 15;
                $attack = rand(5, 15);
                $attack *= rand(10, 20);
                $this->lastAttack = "{$this->name} utilise son attaque critique et lui inflige {$attack} PV";
                return $attack;
            }
            return $attack;
        } else {
            //80% de chance
            $attack = rand(5, 15);
            $this->lastAttack = "{$this->name} lui met un coup de queud et lui inflige {$attack} PV";
            return $attack;
        }
        
    }
}