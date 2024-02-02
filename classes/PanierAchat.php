<?php
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
?>