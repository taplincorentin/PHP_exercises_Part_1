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
        function set_nom($nom){
            $this->_nom =$nom;
        }
        function get_nom():string {
            return $this->_nom;     //méthode pour récupérer le nom
        }     

        function set_prenom($prenom){
            $this->_prenom =$prenom;
        }

        function get_prenom():string {
            return $this->_prenom;     //méthode pour récupérer le prénom
        }
        
        function set_ddn($ddn) {
            $this->_ddn =$ddn;
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
?>