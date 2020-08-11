<?php
 use Doctrine\ORM\Annotation as ORM;
 use Doctrine\Common\Collections\ArrayCollection;


/**
 * @Entity @Table(name="comptes")
**/
class Compte{

        /** @Id @Column(type="integer") @GeneratedValue **/
        private $id;

        /** @Column(type="string") **/
        private $cleRib;

        /** @Column(type="string") **/
        private $date;

        /** @Column(type="string") **/
        private $numero;

        /** @Column(type="decimal") **/
        private $solde;
        
        /** @Column(type="decimal") **/
        private $frais;
         
        /**
         * Many compte have one typecompte. This is the owning side.
         * @ManyToOne(targetEntity="TypeCompte", inversedBy="comptes")
         * @JoinColumn(name="type_compte_id", referencedColumnName="id")
         */
        private $typeCompte;

        /**
         * Many comptes have one client. This is the owning side.
         * @ManyToOne(targetEntity="Client", inversedBy="comptes")
         * @JoinColumn(name="client_id", referencedColumnName="id")
         */
        private $proprietaire;

         /**
         * Many Comptes have Many etats.
         * @ManyToMany(targetEntity="Etat", inversedBy="comptes")
         * @JoinTable(name="comptes_etats")
         */
         private $etats;

        public function __construct()
        {
        
        }
        public function getId(){
            return $this->id;
        }

        public function setId($id){
            $this->id = $id;
        }

        public function getCleRib(){
            return $this->cleRib;
        }

        public function setCleRib($cleRib){
            $this->cleRib = $cleRib;
        }

        public function getDate(){
            return $this->date;
        }

        public function setDate($date){
            $this->date = $date;
        }

        public function getNumero(){
            return $this->numero;
        }

        public function setNumero($numero){
            $this->numero = $numero;
        }

        public function getSolde(){
            return $this->solde;
        }

        public function setSolde($solde){
            $this->solde = $solde;
        }

        public function getFrais(){
            return $this->frais;
        }

        public function setFrais($frais){
            $this->frais = $frais;
        }

        public function getTypeCompte(){
            return $this->typeCompte;
        }

        public function setTypeCompte($typeCompte){
            $this->typeCompte = $typeCompte;
        }

        public function getProprietaire(){
            return $this->proprietaire;
        }

        public function setProprietaire($proprietaire){
            $this->proprietaire = $proprietaire;
        }

        public function getEtats()
        {

             return $this->etats;

        }

         public function setEtats($etats)
         {

            $this->etats[] = $etats;
         
         }
}



?>