<?php
/**
 * Created by PhpStorm.
 * User: Etudiant
 * Date: 06/03/2019
 * Time: 10:27
 */

class Personnage
{
    public $nom;
    public $vie = 200;
    public $attaque;
    public $taille;
    public $masse;
    public $race;

    public function marcher() :string
    {
        return "je marche";
    }

    public function recuperePointDeVie() :int
    {
        return $this->vie;
    }
}