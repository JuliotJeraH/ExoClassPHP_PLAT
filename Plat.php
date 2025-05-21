<?php 
class Plat {
    public $nom;
    public $quantite;
    public $prix_unitaire;

    function __construct($nom, $quantite, $prix_unitaire) {
        $this->nom = $nom;
        $this->quantite = $quantite;
        $this->prix_unitaire = $prix_unitaire;
    }
}



?>