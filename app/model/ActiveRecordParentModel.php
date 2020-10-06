<?php

namespace Dva\Hotels\Model;

use Dva\Hotels\Core\DB;

abstract class ActiveRecordParentModel
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
        $db = DB::getConnect();
        $sql = sprintf('SELECT * FROM %s WHERE id = :id', static::getTableName());
        $stmt = $db->prepare($sql);
        $stmt->execute([
            'id' => $id
        ]);
        $res = $stmt->fetchObject(static::class);
        return $res ? $res : null;
    }
}