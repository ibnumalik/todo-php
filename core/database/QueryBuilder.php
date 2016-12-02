<?php 

class QueryBuilder
{
    protected $pdo;
    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }
    public function selectAll($table)
    {
        $statement = $this->pdo->prepare("select * from {$table}");
        $statement->execute();
        return $statement->fetchAll(PDO::FETCH_CLASS);
    }
    public function insert($table, $val)
    {
        $sql = sprintf(
            'insert into %s (%s) values (%s)',
            $table,
            implode(', ',  array_keys($val)),
            ':' . implode(', :', array_keys($val))
        );
        try {
            $statement = $this->pdo->prepare($sql);
            $statement->execute($val);
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }
}
