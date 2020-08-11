<?php
 use Doctrine\ORM\Annotation as ORM;
 use Doctrine\Common\Collections\ArrayCollection;


/**
 * @Entity @Table(name="typecomptes")
**/
class TypeCompte
{

        /** @Id @Column(type="integer") @GeneratedValue **/
        private $id;

        /** @Column(type="string") **/
        private $libelle;

        /**
         * One typecompte has many comptes. This is the inverse side.
         * @OneToMany(targetEntity="Compte", mappedBy="typeCompte")
         */
        private $comptes;

        public function __construct()
        {
           $this->clients = new ArrayCollection();
    
        }
    
        public function getId()
        {
                return $this->id;
        }
    
        public function setId($id){
                $this->id = $id;
        }
        public function getLibelle()
        {
            return $this->libelle;
        }

        public function setLibelle($libelle)
        {
                $this->libelle = $libelle;
        }

        public function getComptes()
        {
            return $this->comptes;
        }
            
        public function setComptes($comptes)
        {
            $this->comptes = $comptes;
        }
        
}

?>