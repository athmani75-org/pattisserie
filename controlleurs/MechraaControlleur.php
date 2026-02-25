<?php

class MechraaControlleur
{
    public function index()
    {
        echo "Welcome to the Mechraa page!";
    }
    public function ajouter()
    {
        include_once 'views/Ajouter.php';
    }
}
