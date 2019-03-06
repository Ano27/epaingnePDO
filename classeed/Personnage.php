<?php
/**
 * Created by PhpStorm.
 * User: Etudiant
 * Date: 06/03/2019
 * Time: 10:47
 */

class Personnage
{
    public $name;
    public $life = 100;
    public $attack;
    public $size;
    public $weight;
    public $race;

    public function marcher() : string
    {
        return 'Je marche !';
    }

    public function recupererPointDeVie() : int
    {
        return $this->life;
    }
}
