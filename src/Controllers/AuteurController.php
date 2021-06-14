<?php

namespace Controllers;

use Core\View;
use Models\Auteur;

class AuteurController
{
    public function index()
    {
        $auteurs = Auteur::all();
        new View('auteurs/index', compact("auteurs"));
    }

    public function show($request, $id)
    {
        Auteur::getById($request,$id);

    }

    public function delete($request,$name)
    {
        Auteur::DeleteAuteur($name);
        new View('auteurs/deleting', []);

    }
    public function create($request, $name)
    {
        Auteur::InsertAuteur($name);
        new View('auteurs/creating', []);
        
    }
    
    public function update($request,$name,$id)
    {

        Auteur::UpdateAuteur($name,$id);
        new View('auteurs/creating', []);
    
    }

    public function creationPage() {
        $auteurs = Auteur::all();
        new View('auteurs/create', compact("auteurs"));
    }
    
    public function deletePage() {
        $auteurs = Auteur::all();
        new View('auteurs/delete', compact("auteurs"));
    }

    public function updatePage($request,$id) {
        $auteurs = Auteur::getById($request,$id);
        new View('auteurs/update', compact("auteurs"));
    }
    
}




