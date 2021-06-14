<?php

namespace Controllers;

use Core\View;
use Models\Animal;

class AnimalController
{
    public function index()
    {
        $animals = Animal::all();

        new View('animals/test', compact("animals"));
    }

    public function show($request, $id)
    {
        $animal = Animal::getById($id);

        var_dump($animal);
    }
    
    public function create($request,$name)
    {
        Animal::InsertAni($name);

        var_dump('succes');
        
    }
}
