<?php

namespace Models;

use Facades\DB;
use PDO;

class Animal
{
    const TABLE = "animals";

    public static function all()
    {
        return DB::query('SELECT * FROM ' . self::TABLE)->fetchAll(PDO::FETCH_CLASS, self::class);
    }

    public static function getById($id)
    {
        $sql = DB::prepare('SELECT * FROM ' . self::TABLE . ' WHERE id = :id');
        $sql->execute([':id' => $id]);

        return $sql->fetchAll(PDO::FETCH_CLASS, self::class);
    }

    public static function InsertAni($name) {

        $type = "mammifere";
        $sql = DB::prepare('INSERT INTO ' . self::TABLE . ' (name,type) VALUES (:name,:type)');
        $sql->bindParam(':name', $name);
        $sql->bindParam(':type', $type);
        $sql->execute();

    }
}
