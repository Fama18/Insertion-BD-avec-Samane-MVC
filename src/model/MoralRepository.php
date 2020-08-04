<?php
namespace src\model;
use \libs\system\Model;

class MoralRepository extends Model {

    public function __construct() {
        parent::__construct();
    }

    public function addMoral($clientMoral) {
        $this->db->persist($clientMoral);
        $this->db->flush();

        return $clientMoral->getIdClientMoral();
    }

}
?>