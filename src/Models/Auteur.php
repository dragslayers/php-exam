<?php

namespace Models;

use Facades\DB;
use PDO;

class Auteur
{
    const TABLE = "auteurs";

    public static function all()
    {
        return DB::query('SELECT * FROM ' . self::TABLE)->fetchAll(PDO::FETCH_CLASS, self::class);
    }

    public static function getById($request,$id)
    {
        $sql = DB::prepare('SELECT * FROM ' . self::TABLE . ' WHERE id = :id');
        $sql->execute([':id' => $id]);

        return $sql->fetchAll(PDO::FETCH_CLASS, self::class);
    }

    public static function InsertAuteur($name) {

        $sql = DB::prepare('INSERT INTO ' . self::TABLE . ' (name) VALUES (:name)');
        $sql->bindParam(':name', $name);
        $sql->execute();

    }

    public static function DeleteAuteur($name) {

        $sql = DB::prepare('DELETE FROM ' . self::TABLE . ' WHERE name = ?');
        $sql->bindParam(1, $name,PDO::PARAM_STR);
        $sql->execute();

    }

    public static function UpdateAuteur($name,$id) {

        $sql = DB::prepare('UPDATE ' . self::TABLE . ' SET ' . ' name = ? where id = ?');
        $sql->bindParam(1, $name, PDO::PARAM_STR);
        $sql->bindParam(2, $id, PDO::PARAM_INT);
        $sql->execute();

    }
}
