<?php
class ProduitPhysique extends Produit {

    private $aaa;

    public function __construct($id, $nom, $prix, $stock, $aaa) {
        parent::__construct($id, $nom, $prix, $stock);
        $this->aaa = $aaa;
    }

    public function afficherdetails() {
        echo "Produit physique - ID: {$this->idproduct}, Nom: {$this->nom}, Prix: {$this->prix}, Stock: {$this->stock}, Dimension: {$this->aaa}\n";
    }
     
}?>