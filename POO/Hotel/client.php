<?php
class Client
{
    private string $nom;
    private string $prenom;
    private DateTime $dateNaissance;
    private array $reservations;

    public function __construct(string $nom, string $prenom)
    {
        // initialisation
        $this->nom = $nom; 
        $this->prenom = $prenom;
        $this->reservations = [];
    }

    public function getNom(): string
    {
        return $this->nom;
    }
    
    public function getPrenom(): string
    {
        return $this->prenom;
    }
    

    public function ajouterReservation(Reservation $reservation) 
    {
        $this->reservations[] = $reservation;
    }
    public function afficherReservations() {
        $result = "<h1>Reservation de $this>/h1>";
        foreach ($this->reservations as $reservation) {
            $result .= $reservation."<br>";
        }
        return $result;
    }

    public function ajouterReservations(Reservation $reservations)
    {
        $this->reservations = $reservations;
    }

public function afficherReservation() {
        $result ="<h1>Reservation $this</h1>";
        foreach ($this->reservations as $reservation) {
            $result .= $reservation->JoursReserves()." (". $reservation->getClient().getChambre().")<br>";
        }
        return $result;
    }


    public function __toString(): string
    {
        return $this->prenom . ' ' . $this->nom."né le ".$this->dateNaissance." dont le numéro client est : ";
    }
}
?>