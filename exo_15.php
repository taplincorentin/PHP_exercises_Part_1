<?php
    class Personne {
        private string $_nom;
        private string $_prenom;      //on définit les propriétés de la classe
        private DateTime $_ddn;

        function __construct(string $nom, string $prenom, string $ddn)
        {
            $this->_nom = $nom;
            $this->_prenom = $prenom;
            $this->_ddn = new DateTime($ddn);
        }

        function get_nom():string {
            return $this->_nom;     //méthode pour récupérer le nom
        }        

        function get_prenom():string {
            return $this->_prenom;     //méthode pour récupérer le prénom
        }
        
        function get_ddn() :DateTime {
            return $this->_ddn;        //méthode pour récupérer la date de naissance
        }

        function age() {
            $aujd = new DateTime('now');
            return $this-> get_ddn() -> diff($aujd)->y;
                
        }

        public function __toString()
        {
            return $this-> get_prenom()." ".$this-> get_nom(). " a ".$this-> age(). " ans"."\n";
        }
    }

    $p1 = new Personne("DUPONT","Michel","1980-02-19");
    $p2 = new Personne("DUCHEMIN","Alice","1985-01-17");       // Instanciation de deux personnes: p1 et p2

    

    echo $p1;
    echo $p2;     // affichage des valeurs grâce aux méthodes
    
    // var_dump($p1->age());

?>