
<?php
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
?>