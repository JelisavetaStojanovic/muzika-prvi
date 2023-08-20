<?php

class DatabaseConnection {
    private $host;
    private $username;
    private $password;
    private $dbname;
    private $conn;

    public function __construct($host, $username, $password, $dbname) {
        $this->host = $host;
        $this->username = $username;
        $this->password = $password;
        $this->dbname = $dbname;

        $this->conn = new mysqli($this->host, $this->username, $this->password, $this->dbname);

        if ($this->conn->connect_error) {
            die("Connection failed: " . $this->conn->connect_error);
        }
    }

    public function insert($table, $data) {
        $columns = implode(', ', array_keys($data));
        $values = "'" . implode("', '", $data) . "'";

        $sql = "INSERT INTO $table ($columns) VALUES ($values)";

        if ($this->conn->query($sql) === TRUE) {
            return $this->conn->insert_id;
        } else {
            return false;
        }
    }

    public function select($table, $condition = '') {
        $sql = "SELECT * FROM $table";

        if ($condition !== '') {
            $sql .= " WHERE $condition";
        }

        $result = $this->conn->query($sql);

        if ($result->num_rows > 0) {
            $data = [];
            while ($row = $result->fetch_object()) {
                $data[] = $row;
            }
            return $data;
        } else {
            return [];
        }
    }

    public function update($table, $data, $condition) {
        $set = implode(', ', array_map(function ($key, $value) {
            return "$key = '$value'";
        }, array_keys($data), $data));

        $sql = "UPDATE $table SET $set WHERE $condition";

        if ($this->conn->query($sql) === TRUE) {
            return true;
        } else {
            return false;
        }
    }

    public function delete($table, $condition) {
        $sql = "DELETE FROM $table WHERE $condition";

        if ($this->conn->query($sql) === TRUE) {
            return true;
        } else {
            return false;
        }
    }

    public function executeQuery($sql) {
        $result = $this->conn->query($sql);
        if ($result === TRUE) {
            return true;
        } elseif ($result === FALSE) {
            return false;
        } else {
            $data = [];
            while ($row = $result->fetch_object()) {
                $data[] = $row;
            }
            return $data;
        }
    }

    public function close() {
        $this->conn->close();
    }
}
