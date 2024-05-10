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
        $this->sql = "DELETE FROM `$this->table` ";
        return $this;
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

    public function get()
    {
        $query =  mysqli_query($this->connection,$this->sql);
        return mysqli_fetch_assoc($query);
    }

    public function where($column,$operator,$value)
    {
        $this->sql .= " WHERE `$column` $operator '$value'";
        return $this;
    }

    public function Andwhere($column,$operator,$value)
    {
        $this->sql .= " AND `$column` $operator '$value'";
        return $this;
    }

    public function Orwhere($column,$operator,$value)
    {
        $this->sql .= " OR `$column` $operator '$value'";
        return $this;
    }
}