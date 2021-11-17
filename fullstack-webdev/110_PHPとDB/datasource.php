<?php

namespace db;

use PDO;

// データベースに接続を行うクラス
class DataSource
{

    private $conn;
    private $sqlResult;
    public const CLS = 'cls';

    public function __construct($host = 'localhost', $port = '8889', $dbName = 'test_phpdb', $username = 'test_user', $password = 'pwd')
    {

        $dsn = "mysql:host={$host};port={$port};dbname={$dbName};";
        $this->conn = new PDO($dsn, $username, $password);
        // fetchは基本連想配列にして、指定があれば変えるようにする
        $this->conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $this->conn->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
    }

    // 操作系
    public function selectOne($sql = "", $params = [], $type = '', $cls = '')
    {
        $result = $this->select($sql, $params, $type, $cls);
        return count($result) > 0 ? $result[0] : false;
    }

    public function select($sql = "", $params = [], $type = '', $cls = '')
    {
        $stmt = $this->executeSql($sql, $params);
        if ($type === static::CLS) {
            return $stmt->fetchAll(PDO::FETCH_CLASS, $cls);
        } else {
            return $stmt->fetchAll();
        }
    }

    public function execute($sql = '', $params = [])
    {
        $this->executeSql($sql, $params);
        return $this->sqlResult;
    }

    private function executeSql($sql = '', $params = [])
    {
        $stmt = $this->conn->prepare($sql);
        $this->sqlResult = $stmt->execute($params);
        return $stmt;
    }

    // 接続系
    public function begin()
    {
        $this->conn->beginTransaction();
    }

    public function commit()
    {
        $this->conn->commit();
    }

    public function rollback()
    {
        $this->conn->rollback();
    }
}
