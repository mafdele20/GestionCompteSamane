<?php
use libs\system\Controller;

class LoginController extends Controller{

    public function index(){ 
            $data ['nom'] = "gadiaga" ;
            return $this->view->load("login/index",$data);   
          
    }

    public function login(){
        
    }
}