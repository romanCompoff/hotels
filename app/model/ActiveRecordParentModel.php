<?php

namespace Dva\Hotels\Model;

use Dva\Hotels\Core\DB;

class ActiveRecordParentModel
{
    /** @var int */
    private $id;

    /** @var string */
    private $text;

    /** @var string */
    private $userName;


    public function __set($name, $value)
    {
        $camelCaseName = $this->underscoreToCamelCase($name);
        $this->$camelCaseName = $value;
    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @return Article[]
     */
    public static function getAll($tables): array
    {
        $db = DB::getConnect();
        $sql = sprintf('SELECT * FROM %s', $tables);
        $stmt = $db->query($sql);

        return $stmt->fetchAll();
    }

    protected function underscoreToCamelCase(string $source): string
    {
        return lcfirst(str_replace('_', '', ucwords($source, '_')));
    }

    private static function getTableName(): string 
    {
        return 'articles';
    }

    public static function getById(int $id): ?self
    {
        $db = new Db();
        $entities = $db->query(
            'SELECT * FROM `' . static::getTableName() . '` WHERE id=:id;',
            [':id' => $id],
            static::class
        );
        return $entities ? $entities[0] : null;



             

        // return $stmt->fetchObject(static::class);
    }
}