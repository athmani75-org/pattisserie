<?php
/**
 * Created by PhpStorm.
 */
class HomeControlleur
{
    /**
     * HomeControlleur index function.
     */
    public function index()
    {
       include_once 'views/hallo.php';
    }
    public function ajouter()
    {
        include_once 'views/Ajouter.php';
    }
}
