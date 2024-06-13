<?php
/**
 * @author : Gaellan
 * @link : https://github.com/Gaellan
 */
class Router
{
    public function __construct()
    {

    }

    /* 1 URL === 1 ROUTE === UNE MÉTHODE DE CONTROLLER */
    public function handleRequest(? string $route) : void
    {
        if($route !== null && $route === 'home') {
            echo "Je veux afficher la home<br>";
        }
        else if($route !== null && $route === 'add-category')
        {
            echo "Je veux afficher la route pour ajouter une catégorie<br>";
        }
        else if($route !== null && $route === 'add-room')
        {
            echo "Je veux afficher la route pour ajouter un salon<br>";
        }
        else if($route !== null && $route === 'add-message')
        {
            echo "Je veux afficher la route pour ajouter un message<br>";
        }
        else if($route !== null && $route === 'show-room')
        {
            echo "Je veux afficher la route pour voir un salon<br>";
        }
        else if($route === null)
        {
            echo "Pas de route<br>";
        }
        else
        {
            echo "La route n'existe pas<br>";
        }
    }
}