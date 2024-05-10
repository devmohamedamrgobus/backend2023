<?php
interface dbContract
{
    public function insert($data);
    public function select($columns = "*");
    public function update($data);
    public function delete();
    public function excute();
}
class db implements dbContract
{
    private $table;

    private $sql;

    private $connection;
    public function __construct($host,$user,$password,$db,$table)
    {
        $this->connection = mysqli_connect($host,$user,$password,$db);
        $this->table = $table;
    }
     public function insert($data)
    {
        $columns = "";
        $values = "";
        foreach ($data as $column => $value) {
            $columns .= "`$column`,";
            $values .= " '$value',";
        }
        $columns = rtrim($columns,",");
        $values = rtrim($values,",");

        $this->sql = "INSERT INTO $this->table ($columns) VALUES ($values)";

        return $this;
    }

     public function select($columns = "*")
    {
        $this->sql = "SELECT $columns FROM $this->table";
        return $this;
    }

     public function update($data)
    {
        // TODO: Implement update() method.
    }

     public function delete()
    {
        // TODO: Implement delete() method.
    }

    public function excute()
    {
        mysqli_query($this->connection,$this->sql);
        return mysqli_affected_rows($this->connection);
    }

    public function all()
    {
        $query =  mysqli_query($this->connection,$this->sql);
        return mysqli_fetch_all($query,MYSQLI_ASSOC);
    }
}