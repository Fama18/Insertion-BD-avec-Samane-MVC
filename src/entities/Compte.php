<?php
use Doctrine\ORM\Annotation as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * @Entity
 * @Table(name="Compte")
 **/
class Compte {
    /**
     * @Id
     * @Column(type="integer")
     * @GeneratedValue
     */
    private $id;
    /**
     * @Column(type="string")
     */
    private $numagence;
    /**
     * @Column(type="string")
     */
    private $cleRib;
    /**
     * @Column(type="string")
     */
    private $NumCompte;
    /**
     * Many Compte have one ClientPhysique. This is the owning side.
     * @ManyToOne(targetEntity="ClientPhysique", inversedBy="Comptes")
     * @JoinColumn(name="ClientPhysique_id", referencedColumnName="idClientPhysique")
     */
    private $clientPhysique;
    /**
     * Many Compte have one ClientMoral. This is the owning side.
     * @ManyToOne(targetEntity="ClientMoral", inversedBy="Comptes")
     * @JoinColumn(name="ClientMoral_id", referencedColumnName="idClientMoral")
     */
    private $clientMoral;
    /**
     * Many Comptes have Many TypeComptes.
     * @ManyToMany(targetEntity="TypeCompte", mappedBy="Comptes")
     */
    private $TypeComptes;

    public function __construct() {
        $this->TypeComptes = new ArrayCollection();
    }
     //getteurs
    public function getId() {
        return $this->id;
    }
     public function getNumAgence() {
        return $this->numagence;
    }
    public function getCleRib() {
        return $this->cleRib;
    }
    public function getNumCompte() {
        return $this->NumCompte;
    }
    public function getClientPhysique() {
        return $this->clientPhysique;
    }
    public function getClientMoral() {
        return $this->clientMoral;
    }
    public function getTypeComptes() {
        return $this->TypeComptes;
    }

    //setteurs
    public function setId($id) {
        $this->id = $id;
    }
    public function setNumAgence($numagence) {
        $this->numagence = $numagence;
    }
    public function setCleRib($cleRib) {
        $this->cleRib = $cleRib;
    }
    public function setNumCompte($NumCompte) {
        $this->NumCompte = $NumCompte;
    }
    public function setClientPhysique($clientPhysique) {
        $this->clientPhysique = $clientPhysique;
    }
    public function setClientMoral($clientMoral) {
        $this->clientMoral = $clientMoral;
    }
    public function setTypeComptes($TypeComptes) {
        $this->TypeComptes = $TypeComptes;
    }
}
?>