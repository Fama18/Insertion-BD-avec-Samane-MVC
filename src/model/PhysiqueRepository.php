<?php
namespace src\model;
use \libs\system\Model;

class PhysiqueRepository extends Model {

    public function __construct() {
        parent::__construct();
    }

    public function addPhysique($clientPhysique) {
        $this->db->persist($clientPhysique);
        $this->db->flush();

        return $clientPhysique->getIdClientPhysique();
    }

}
?>