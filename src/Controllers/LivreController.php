<?php

namespace Controllers;

use Core\View;
use Models\Livre;

class LivreController
{
    public function index()
    {
        $livres = Livre::jointure();
        new View('livres/index', compact("livres"));
    }

    public function show($request, $id)
    {
        $livre = Livre::getById($id);

        var_dump($livre);
    }

    public function delete($request, $name)
    {
        Livre::DeleteLivre($name);

    }
    public function create($request, $name)
    {
        Livre::InsertLivre($name);
        
    }
    
    public function update($request, $id, $name)
    {
        Livre::UpdateLivre($name,$id);
    
    }

    public function creationPage() {
        $auteurs = Livre::all();
        new View('auteurs/create', compact("auteurs"));
    }
    
    public function deletePage() {
        $auteurs = Livre::all();
        new View('auteurs/delete', compact("auteurs"));
    }

    public function updatingPage() {
        $auteurs = Livre::all();
        new View('auteurs/delete', compact("auteurs"));
    }
}
