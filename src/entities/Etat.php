<?php
 use Doctrine\ORM\Annotation as ORM;
 use Doctrine\Common\Collections\ArrayCollection;




/**
 * @Entity @Table(name="Etat")
**/
class Etat
{

        /** @Id @Column(type="integer") @GeneratedValue **/
        private $id;

        /** @Column(type="string") **/
        private $libelle;

       /**
        * Many Etats have Many Comptes.
        * @ManyToMany(targetEntity="Compte", mappedBy="etats")
        */
        private $comptes;

        public function __construct()
        {
            //$this->comptes = new ArrayCollection();
        
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
            $this->comptes[] = $comptes;
        }
        
}

?>