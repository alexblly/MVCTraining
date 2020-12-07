<?php

namespace MVCTraining\Blog\Model;

class RecipeManager
{
    protected function dbConnect()
    {
        $db = new \PDO('mysql:host=localhost;dbname=recette;charset=utf8', 'root', 'root');
        return $db;
    }
}
