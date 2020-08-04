<?php
use \libs\system\Controller;
use src\model\PhysiqueRepository;

class PhysiqueController extends Controller {

    public function __construct() {
        parent::__construct();
    }
    public function clientPhysique() {
        extract($_POST);

            if(isset($btn2)) {
            $physique = new PhysiqueRepository();
            $client_physique = new ClientPhysique();

            $client_physique->setNumCni($numCni);
            $client_physique->setNom($nom);
            $client_physique->setPrenom($prenom);
            $client_physique->setCivilite($civilite);
            $client_physique->setDateDeNaissance($DateDeNaissance);
            $client_physique->setAdresse($adresse);
            $client_physique->setEmail($email);
            $client_physique->setTelephone($telephone);


            $physique->addPhysique($client_physique);
            }
        return $this->view->load("physique/clientPhysique");
        
    }

    

}
?>