
<?php

class Utilisateur {
    public $id;
    public $nom;
    public $email;

    public function inscription() {
        
    }

    public function connexion() {
        
    }

    public function miseajourprofil() {
       
    }
}

class Client extends Utilisateur {
    public $carte_credit;

    public function achat() {
        
    }
}

class Administrateur extends Utilisateur {
    public $niveau_acces;

    public function gererutilisateur() {
       
    }
}

// Affichage
class produit {
    protected $idproduct;
    protected $nom;
    protected $prix;
    protected $stock;

    public function __construct( $idproduct, $nom, $prix, $stock) {
        $this->idproduct = $idproduct;
        $this->nom = $nom;
        $this->prix = $prix;
        $this->stock = $stock;
        
    }
}
class ProduitPhysique extends Produit {

    private $aaa;

    public function __construct($id, $nom, $prix, $stock, $aaa) {
        parent::__construct($id, $nom, $prix, $stock);
        $this->aaa = $aaa;
    }

    public function afficherdetails() {
        echo "Produit physique - ID: {$this->idproduct}, Nom: {$this->nom}, Prix: {$this->prix}, Stock: {$this->stock}, Dimension: {$this->aaa}\n";
    }
     
}
class ProduitNumeriique extends Produit {

    private $bbb;

    public function __construct($id, $nom, $prix, $stock, $bbb){
        parent::__construct($id, $nom, $prix, $stock);
        $this->bbb = $bbb;
    }

    public function afficherdetails(){
        echo "Produit physique - ID: {$this->idproduct}, Nom: {$this->nom}, Prix: {$this->prix}, Stock: {$this->stock}, Dimension: {$this->bbb}\n";
    }
     
}
// panier
interface GestionnairePanier {
    public function ajouterproduct($produit, $qantite);
    public function calculerMontantTotal();
    public function afficherPanier();
}

class PanierAchat implements GestionnairePanier {
    private $items = [];

    public function ajouterproduct($produit, $qantite) {
        $idProduit = $produit->idproduct;

        if (!isset($this->items[$idProduit])) {
            $this->items[$idProduit] = ['produit' => $produit, 'qantite' => 0];
        }

        $this->items[$idProduit]['qantite'] += $qantite;
    }

    public function calculerMontantTotal() {
        $montantTotal = 0;

        foreach ($this->items as $item) {
            $montantTotal += $item['produit']->prix * $item['qantite'];
        }

        return $montantTotal;
    }

    public function afficherPanier() {
        foreach ($this->items as $item) {
            echo "Produit ID: {$item['produit']->idproduct}, Nom: {$item['produit']->nom}, Quantité: {$item['qantite']}\n";
        }
    }
}
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
