<?php
namespace app\Core;

use config\Database;

class Model
{
    protected $db;
    public string $table;

    public function __construct() {
        try {
            $database = new Database();
            $this->db = $database->getConnection();
        }
        catch (\PDOException $e)
        {
            $message = $e->getMessage();
            error_log("$message ][ $e->errorInfo \n", 3, 'error.log');
        }
    }

    public function get_with_id(int $id, array $attributes=null)
    {
        $atts= ($attributes)?implode(', ', $attributes):'*';
        $result = $this->db->prepare('select '.$atts.' from '.$this->table. ' where id=:id');
        $result->execute(['id'=>$id]);
        return $result->fetch();
    }


    public function sql(string $sql, array $execute, int $count)
    {
        $result = $this->db->prepare($sql);
        $result->execute($execute);
        /*
         * 1 = all
         * 2 = one
         * 3 count
         */
        return $count==1?$result->fetchAll():($count==2?$result->fetch():($count==3?$result->rowCount():null));
    }
    public function get_all(int $id, array $attributes=null)
    {
        $atts= ($attributes)?implode(', ', $attributes):'*';
        $result = $this->db->prepare('select '.$atts.' from '.$this->table. ' where id=:id');
        $result->execute(['id'=>$id]);
        return $result->fetchAll();
    }

    public function all(array $attributes=null)
    {
        $atts= ($attributes)?implode(', ', $attributes):'*';
        $result = $this->db->prepare('select '.$atts.' from '.$this->table);
        $result->execute();
        return $result->fetchAll();
    }

    public function insert(array $attributes)
    {
        $columns = implode(',', array_keys($attributes));
        $values = implode(',', array_fill(0, count($attributes), '?'));
        $sql = "INSERT INTO ".$this->table." ($columns) VALUES ($values)";
        $stmt = $this->db->prepare($sql);
        $i = 1;
        foreach ($attributes as $value) {
            $stmt->bindValue($i++, $value);
        }
        return $stmt->execute();
    }
}