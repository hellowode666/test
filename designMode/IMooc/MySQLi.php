<?php

namespace Imooc\Database;

use IMooc\IDatabase;

class MySQLi implements IDatabase
{
    protected $conn;

    function connect($host, $user, $passwd, $dbname)
    {
        // TODO: Implement connect() method.
        $conn = mysqli_connect($host,$user,$passwd,$dbname);
        $this->conn = $conn;
    }

    function query($sql)
    {
        // TODO: Implement query() method.
        return mysqli_query($this->conn,$sql);
    }

    function close()
    {
        // TODO: Implement close() method.
        mysqli_close($this->conn);
    }
}