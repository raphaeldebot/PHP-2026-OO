<?php

class Tama
{
    public function __construct(
        private string $nom,
        private int $faim = 50,
    ) {
        $this->nom = $nom;
    }
    // constantes
    const int FAIM_MINIMUM = 0;

    const int FAIM_MAXIMUM = 100;


    public function getFaim(): int
    {
        return $this->faim;
    }

    public function manger()
    {
        $this->faim = $this->borner($this->faim - 20);
    }

    public function jouer()
    {
        $this->faim = $this->borner($this->faim + 15);
    }

    public function etat()
    {
        $etat = "🐣 {$this->nom} a une faim de {$this->faim}/100";
        return $etat;
    }

    private function borner(int $valeur): int
    {
        return max(0,self::FAIM_MINIMUM,min(self::FAIM_MAXIMUM, $valeur));
    }
}

