<?php
class Commande {
    private $idCommande;
    private $idClient;
    private $statut;
    private $dateCommande;

    public function __construct($idCommande, $idClient, $statut, $dateCommande) {
        $this->idCommande = $idCommande;
        $this->idClient = $idClient;
        $this->statut = $statut;
        $this->dateCommande = $dateCommande;
    }
    public function getIdCommande() {
        return $this->idCommande;
    }

    public function setIdCommande($idCommande) {
        $this->idCommande = $idCommande;
    }

    public function getIdClient() {
        return $this->idClient;
    }

    public function setIdClient($idClient) {
        $this->idClient = $idClient;
    }

    public function getStatut() {
        return $this->statut;
    }

    public function setStatut($statut) {
        $this->statut = $statut;
    }

    public function getDateCommande() {
        return $this->dateCommande;
    }

    public function setDateCommande($dateCommande) {
        $this->dateCommande = $dateCommande;
    }
    public function passerCommande() {
        $this->statut = "En cours";
        echo "Commande {$this->idCommande} passée \n";
    }

   public function mettreAJourStatut($nouveauStatut) {
    $this->statut = $nouveauStatut;
    echo "Statut d la commande {$this->idCommande} mis à jour : {$this->statut}\n";
}

}


?>