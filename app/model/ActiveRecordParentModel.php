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

    private $table = "feedbacks";


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
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return string
     */
    public function getText(): string
    {
        return $this->text;
    }

    /**
     * @return Article[]
     */
    public static function getAll($tables): array
    {
        $qwe = static::getTableName();
        $db = DB::getConnect();
        $sql = sprintf('SELECT * FROM %s', $tables);
        $stmt = $db->query($sql);

        return $stmt->fetchAll();


    }

    protected function getDB()
    {
        return DB::getConnect();
    }

    private function underscoreToCamelCase(string $source): string
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