<?php
    class Fruits{
        private $nom;
        private $poids; 
        private $prix;
    
        const POMME = "pomme";
        const CERISE = "cerise";

        const POMME_IMG = "images/pomme.png";
        const CERISE_IMG = "images/cerise.png";

        public function __construct($nom, $poids){
            $this->nom = $nom;
            $this->poids = $poids;
            $this->prix = $this->getPrixFruit($nom);
        }

        private function getPrixFruit($nom){
            if($nom === self::POMME){
                return 15;
            } else if($nom == self::CERISE){
                return 21;
            }
        }

        public function __toString(){
            $affichage = "<div class='card'>";
            $affichage .= $this->getAffichageImage();
            $affichage .= "<b>Nom : </b>" . $this->nom . "<br>";
            $affichage .= "<b>Poids : </b>" . $this->poids . "<br>";
            $affichage .= "<b>Prix : </b>" . $this->prix . "<br>";
            $affichage .= "</div>";
            return $affichage;
        }

        private function getAffichageImage(){
            if ($this->nom === self::POMME){
                return "<img src='" . self::POMME_IMG . "' alt='Image de pomme' height='180'><br>";
            }else if ($this->nom === self::CERISE){
                return "<img src='" . self::CERISE_IMG . "' alt='Image de cerise'><br>";
            }
        }
    }
?>