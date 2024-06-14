<?php
/**
 * @author : Gaellan
 * @link : https://github.com/Gaellan
 */


class CategoryController
{
    private CategoryManager $cm;

    public function __construct()
    {
        $this->cm = new CategoryManager();
    }

    public function getCategories() : void
    {
        $categories = $this->cm->findAllCategories();

        $template = "templates/get_categories.phtml";

        require "templates/layout.phtml";
    }
}