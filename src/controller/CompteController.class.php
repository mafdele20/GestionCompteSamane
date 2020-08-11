<?php
use libs\system\Controller;
use src\model\CompteRepository;

class CompteController extends Controller{  

    public function __construct(){
        parent::__construct();
    }

    public function index(){

        return $this->view->load("compte/index");
    }

    public function add(){
        $modelCompte = new CompteRepository();
        if(isset($_POST['valider']))
        {
            extract($_POST);

            $compte = new Compte();
            $compte->setNumero($numCompte);
            $compte->setCleRib("comp-".$numCompte);
            $compte->setDate($dateO);
            $compte->setSolde($solde);
            $type =$modelCompte->getCompteByName($typeCompte);
            $compte->setTypeCompte($type);
            $etat = $modelCompte->getEtat(2);
            $compte->setEtats($etat);
            $compte->setFrais($agio);
           
        
            if(isset($ancien)){
            
             $client = $modelCompte->getClient($idclient);
      
             $compte->setProprietaire($client);
             $ok =1;
      
               if ($client != null){
      
                  $a = $modelCompte->addCompte($compte);
      
               }else{
                  $ok = 0;
               }   
                  $data['ok'] = $ok;
                  return $this->view->load("compte/add", $data);
         
            }
            if(isset($nouveau)){
               
                  $type =$modelCompte->getCientByName($typeClient);
      
                       $client = new Client();
                       $client->setNom($nom);
                       $client->setPrenom($prenom);
                       $client->setAdresse($adresse);
                       $client->setEmail($email);
                       $client->setTelephone($tel);
                       $client->setSalaire($salaire);
                       $client->setNomEntreprise($nomentreprise);
                       $client->setTypeClient($type);
                     
                       $cli = $modelCompte->addClient($client);
                     
                    $idClient = $modelCompte->getClient($cli);    
                
                    $compte->setProprietaire($idClient);
                    $comp =$modelCompte->addCompte($compte);
      
                     if($comp != null){
                        $ok = 1;
                        $data['ok'] = $ok;
                        return $this->view->load("compte/add", $data);
                     }else{
                       $ok = 0;
                       $data['ok'] = $ok;
                       return $this->view->load("compte/add", $data);
                     }
      
            }
        
        }else{
            return $this->view->load("compte/add");
        }
    }

    public function liste(){

        $modelCompte = new CompteRepository();
        
        $data['listeCompte'] = $modelCompte->listeCompte();
        return $this->view->load("compte/liste", $data);
    }

  
    public function edit($id){
        
        $modelCompte = new CompteRepository();
        
        $data['compte'] = $modelCompte->getCompte($id);
        // var_dump($modelCompte->getCompte($id));
        return $this->view->load("compte/edit", $data);
    }
     
   }

?>