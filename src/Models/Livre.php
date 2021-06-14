<?php

namespace Models;

use Facades\DB;
use PDO;

class Livre
{
    const TABLE = "livres";
    const TABLE_auteurs = "auteurs";

    public static function all()
    {
        return DB::query('SELECT * FROM ' . self::TABLE)->fetchAll(PDO::FETCH_CLASS, self::class);
    }
    
    public static function getById($id)
    {
        $sql = DB::prepare('SELECT * FROM ' . self::TABLE . ' WHERE id = :id');
        
        return $sql->fetchAll(PDO::FETCH_CLASS, self::class);
        $sql->execute([':id' => $id]);
    }
    
    public static function jointure()
    {
        $sql = DB::query('SELECT livres.name as livre_titre , auteurs.name as auteur_nom FROM ' . self::TABLE . ' inner join ' . self::TABLE_auteurs . ' on ' .' (livres.auteur_id = auteurs.id)');
        
        return $sql->fetchAll(PDO::FETCH_CLASS, self::class);
    }

    public static function InsertLivre($name) {

        $sql = DB::prepare('INSERT INTO ' . self::TABLE . ' (name) VALUES (:name)');
        $sql->bindParam(':name', $name);
        $sql->execute();

    }

    public static function DeleteLivre($id) {

        $sql = DB::prepare('DELETE FROM ' . self::TABLE . ' WHERE id = :id');
        $sql->bindParam(':id', $id);
        $sql->execute();

    }

    public static function UpdateLivre($id,$name) {

        $sql = DB::prepare('UPDATE ' . self::TABLE . ' SET ' . ' name = ? where id = ?');
        $sql->bindParam(2, $name, PDO::PARAM_STR);
        $sql->bindParam(1, $id, PDO::PARAM_INT);
        $sql->execute();

    }

}
