<?php

class Database {
    static private $pdo;
    static public $operators = ["=", "<>", "and", "or", "like"];
    private $table;

    public static function connect(string $method)
    {
        static::$pdo = $method;
        return new static;
    }

    public function table(string $name)
    {
        $this->table = $name;
        return $this;
    }

    public function insert(array $data)
    {
        var_dump("Connected to database using " . self::$pdo);
        var_dump("INSERT INTO {$this->table} VALUES({$data})");
    }

    public static function create(array $data)
    {
        var_dump('Creating a new database with ' . self::$pdo);
    }

    public function getMethod()
    {
        return $this::$pdo;
    }
}

header('Content-Type:text/plain', true);

Database::connect('pdo')->table('users')->insert(['username' => 'Terry', 'password' => 'secret']);
