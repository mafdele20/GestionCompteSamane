<?php
use libs\system\Controller;

class MafController extends Controller{

    public function index(){ 
            $data ['nom'] = "gadiaga" ;
            return $this->view->load("maf/index",$data);   
          
    }
}