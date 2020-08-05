<?php
use \libs\system\Controller;
use src\model\CompteRepository;

class CompteController extends Controller {

    public function __construct() {
        parent::__construct();
    }

    public function compte() {
        extract($_POST);

            if(isset($btn)) {
            $comptes = new CompteRepository();
            $compte = new Compte();

            $compte->setNumAgence($numagence);
            $compte->setCleRib($cleRib);
            $compte->setNumCompte($NumCompte);
            $compte->setClientPhysique($clientPhysique);

            $comptes->addCompte($compte);
            }
        return $this->view->load("compte/compte");

    }



}
?>