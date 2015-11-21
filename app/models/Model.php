<?php

namespace app\models;

class Model extends \PDO
{
    public function __construct()
    {
        parent::__construct($this->getDns(),db_user, db_password);
    }

    private final function getDns()
    {
        return $dns =  db_driver . ':host='.
                       db_host   . ';port='.
                       db_port   . ';dbname='.
                       db_name;
    }


    /**
     * @param string $tableName
     * @param array $data
     */
    public function insert($table, $data)
    {
        ksort($data);
        $formatted = $this->formatFieldNamesAndValues($data);
        $sth = $this->prepare("INSERT INTO $table (`{$formatted['field_names']}`) VALUES ({$formatted['field_values']})");
        $this->bindData($sth, $data);
        $sth->execute();
    }

    public function selectAll($table, $where= null,$limit=null, $fetchMode = \PDO::FETCH_ASSOC, $join=null, $fields=null)
    {
//        $sql = "Select " . empty($fields) ? '*' : implode(',', $fields) ."FROM $table";
        $fields = $fields ? $fields : '*';
        $sql = "Select $fields FROM $table ";

        if(!empty($join)){
            $sql .= ' INNER JOIN '.$join;
        }

        if(!empty($where)){
            $sql  .= " WHERE $where";
        }

        if(!empty($limit)){
            $sql  .= " Limit $limit";
        }

        $sth = $this->prepare($sql);
        $sth->execute();

        return $sth->fetchAll($fetchMode);
    }


    private function formatFieldNamesAndValues($data)
    {
        return [
            'field_names' => implode('`, `', array_keys($data)),
            'field_values'=>  ':' . implode(', :', array_keys($data))
        ];
    }

    private function bindData( \PDOStatement $handler, $data)
    {
        foreach ($data as $key => $value)
        {
            $handler->bindValue(":$key", $value);
        }
    }

    public function delete($table, $where=null, $limit = null)
    {
        if(empty($where)){
            $where = '1=1';
        }
        if(!empty($limit)){
            $limit = 'LIMIT '. $limit;
        }
        return $this->exec("DELETE FROM $table WHERE $where $limit");
    }
} 