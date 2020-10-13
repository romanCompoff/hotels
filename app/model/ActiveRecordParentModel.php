<?php

namespace Dva\Hotels\Model;

use Dva\Hotels\Core\DB;
use Dva\Hotels\Core\Validator;

abstract class ActiveRecordParentModel
{
    /** @var int */
    private $id;

    /** @var string */
    private $text;

    /** @var string */
    private $userName;

    public static $schema = [];


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
    
    public function setId($id)
    {
        $this->id = $id;
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

    public static function setRulesForValidator(Validator $validator)
    {
        $validator->setRules(static::$schema);
    }

    public static function getByPageName(string $pageName)
    {
        $db = DB::getConnect();
        $sql = sprintf('SELECT * FROM %s WHERE pageName = :pageName', static::getTableName());
        $stmt = $db->prepare($sql);
        $stmt->execute([
            'pageName' => $pageName
        ]);
        $res = $stmt->fetch();
        return $res ? $res : null;
    }
}