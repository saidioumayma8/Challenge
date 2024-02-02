<?php
interface GestionnairePanier {
    public function ajouterproduct($produit, $qantite);
    public function calculerMontantTotal();
    public function afficherPanier();
}
?>