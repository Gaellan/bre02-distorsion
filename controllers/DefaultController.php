<?php
/**
 * @author : Gaellan
 * @link : https://github.com/Gaellan
 */


class DefaultController
{
    public function __construct()
    {

    }

    public function home() : void
    {
        echo "Je veux afficher la home<br>";
    }

    public function notFound() : void
    {
        echo "La route n'existe pas<br>";
    }
}