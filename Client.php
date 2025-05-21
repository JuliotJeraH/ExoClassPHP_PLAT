<?php 
class Client {
    public $nom;
    public $num_table;
    public $liste_commandes= array();

    function __construct($nom, $num_table) {
        $this->nom = $nom;
        $this->num_table = $num_table;
    }

    function commander($p) {
        array_push($this->liste_commandes, $p);
    }

    function resumer() {
        $s = "Client: " . $this->nom . "<br>";
        $s .= "Numéro de table: " . $this->num_table . "<br>";
        $s .= "Commandes:\n";
        foreach ($this->liste_commandes as $plat) {
            $s .= "- " . $plat->nom . ": " . $plat->quantite . " x " . $plat->prix_unitaire . "Ar<br>";
        }
        $total = 0;
        for( $i = 0; $i < count($this->liste_commandes); $i++) {
            $total += $this->liste_commandes[$i]->prix_unitaire;
        }
        $s.= "\nTotal: " . $total . "Ar<br>";
        return $s;
    }
}

?>