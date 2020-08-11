<?php
/*==================================================
MODELE MVC DEVELOPPE PAR Ngor SECK
ngorsecka@gmail.com
(+221) 77 - 433 - 97 - 16
PERFECTIONNEZ CE MODELE ET FAITES MOI UN RETOUR
POUR TOUTE MODIFICATION VISANT A L'AMELIORER.
VOUS ETES LIBRE DE TOUTE UTILISATION.
===================================================*/
namespace src\model; 

use libs\system\Model; 
	
class  CompteRepository extends Model{
	
	/**
	 * Methods with DQL (Doctrine Query Language) 
	 */
	public function __construct(){
		parent::__construct();
	}

	public function getCompte($id)
	{
		if($this->db != null)
		{
			return $this->db->getRepository('Compte')->find(array('id' => $id));
		}
	}
	
	public function addCompte($compte)
	{
		if($this->db != null)
		{
			$this->db->persist($compte);
			$this->db->flush();

			return $compte->getId();
		}
	}
	
	public function deleteCompte($id){
		if($this->db != null)
		{
			$compte = $this->db->find('Compte', $id);
			if($compte != null)
			{
				$this->db->remove($compte);
				$this->db->flush();
			}else {
				die("Objet ".$id." does not existe!");
			}
		}
	}
	
	public function updateTest($compte){
		if($this->db != null)
		{
			$getCompte = $this->db->find('Compte', $compte->getId());
			if($getCompte != null)
			{
				$getCompte->setValeur1($compte->getValeur1());
				$getCompte->setValeur2($compte->getValeur2());
				$this->db->flush();

			}else {
				die("Objet ".$compte->getId()." does not existe!!");
			}	
		}
	}
	
	public function listeCompte(){
		if($this->db != null)
		{
			return $this->db->createQuery("SELECT c FROM Compte c")->getResult();
		}
	}
	
	public function listeComptesById($id)
	{
		if($this->db != null)
		{
			return $this->db->getRepository('Compte')->findBy(array('id' => $id));
		}
	}
	
	public function listeOfCompteById($id)
	{
		if($this->db != null)
		{
			return $this->db->createQuery("SELECT c FROM Compte c WHERE c.id = " . $id)->getSingleResult();
		}
	}

	public function listeOfCompte()
	{
		if($this->db != null)
		{
			return $this->db->getRepository('Compte')->findAll();
		}
    }
    
     public function getCompteByName($compte)
    {
        if($this->db != null)
		{
	    	return $this->db->createQuery("SELECT t FROM TypeCompte t WHERE t.libelle = '$compte'")->getSingleResult();
        }
    }
    public function getCientByName($client)
    {
        if($this->db != null)
		{
	    	return $this->db->createQuery("SELECT t FROM TypeClient t WHERE t.libelle = '$client'")->getSingleResult();
        }
    }
    public function getClient($client)
    {
        if($this->db != null)
		{
         return $this->db->find('Client',$client);
        }
    }
    public function getEtat($etat)
    {
        if($this->db != null)
		{
         return $this->db->find('Etat',$etat);
        }
    }

    public function addClient($client)
    {
        if($this->db != null)
		{
             $this->db->persist($client);
             $this->db->flush();

             return $client->getId();
        }
    }
   
	
}