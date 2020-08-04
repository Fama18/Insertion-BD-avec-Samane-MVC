<?php
use \libs\system\Controller;
use src\model\MoralRepository;

class MoralController extends Controller {

    public function __construct() {
        parent::__construct();
    }
 
    public function index() {
        return $this->view->load("moral/index");
    }
    public function clientMoral() {
        extract($_POST);

            if(isset($btn22)) {
            $moral = new MoralRepository();
            $client_moral = new ClientMoral();

            $client_moral->setNomEmployeur($nomEmployeur);
            $client_moral->setAdresseEmployeur($AdresseEmployeur);
            $client_moral->setRaisonSocial($raisonSocial);
            $client_moral->setNumIdent($numIdent);

            $moral->addMoral($client_moral);
            }
        return $this->view->load("moral/clientMoral");
        
    }

    

}
?>