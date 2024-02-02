<?php
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
?>