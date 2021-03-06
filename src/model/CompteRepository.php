<?php
namespace src\model;
use \libs\system\Model;

class CompteRepository extends Model {

    public function __construct() {
        parent::__construct();
    }

    public function addCompte($compte) {
        $this->db->persist($compte);
        $this->db->flush();

        return $compte->getId();
    }

}
?>