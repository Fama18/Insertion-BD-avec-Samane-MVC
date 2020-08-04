<?php
use Doctrine\ORM\Annotation as ORM;
use Doctrine\Common\Collections\ArrayCollection;
/**
 * @Entity
 * @Table(name="TypeCompte")
 **/
class TypeCompte {
    /**
     * @Id
     * @Column(type="integer")
     * @GeneratedValue
     */
    private $id;
    /**
     * @Column(type="string")
     */
    private $libelle;
    /**
     * Many TypeCompte have Many Comptes.
     * @ManyToMany(targetEntity="Compte", inversedBy="TypeComptes")
     * @JoinTable(name="TypeCompte_Compte")
     */
    private $Comptes;

    public function __construct() {
        $this->Comptes = new ArrayCollection();
    }
    //getteurs
    public function getId() {
        return $this->id;
    }
    public function getLibelle() {
        return $this->libelle;
    }
    public function getComptes() {
        return $this->Comptes;
    }

    //setteurs
    public function setId($id) {
        $this->id = $id;
    }
    public function setLibelle($libelle) {
        $this->libelle = $libelle;
    }
    public function setComptes($Comptes) {
        $this->Comptes = $Comptes;
    }
}
?>