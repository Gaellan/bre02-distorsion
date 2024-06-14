<?php
/**
 * @author : Gaellan
 * @link : https://github.com/Gaellan
 */
class Router
{
    private DefaultController $dc;
    private CategoryController $cc;
    public function __construct()
    {
        $this->dc = new DefaultController();
        $this->cc = new CategoryController();
    }

    /* 1 URL === 1 ROUTE === UNE MÉTHODE DE CONTROLLER */
    public function handleRequest(? string $route) : void
    {
        if($route !== null && $route === 'home') {
            $this->dc->home();
        }
        else if($route !== null && $route === 'add-category')
        {
            echo "Je veux afficher la route pour ajouter une catégorie<br>";
        }
        else if($route !== null && $route === 'get-category')
        {
            echo "Je veux afficher la route pour recuperer une catégorie<br>";
        }
        else if($route !== null && $route === 'get-categories')
        {
           $this->cc->getCategories();
        }
        else if($route !== null && $route === 'add-room')
        {
            echo "Je veux afficher la route pour ajouter un salon<br>";
        }
        else if($route !== null && $route === 'get-rooms')
        {
            echo "Je veux afficher la route pour recuperer les salon<br>";
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
            $this->dc->home();
        }
        else
        {
            $this->dc->notFound();
        }
    }
}