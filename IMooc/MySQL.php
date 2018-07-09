<?php
namespace IMooc\Database;

use IMooc\IDatabase;

class MySQL implements IDatabase
{
    protected $conn;

    function connect($host, $user, $passwd, $dbname)
    {
        // TODO: Implement connect() method.
        $conn = mysql_connect($host,$user,$passwd);
        mysql_select_db($dbname,$conn);
        $this->conn = $conn;
    }

    function query($sql)
    {
        // TODO: Implement query() method.
        $res = mysql_query($sql,$this->conn);
        return $res;
    }

    function close()
    {
        // TODO: Implement close() method.
        mysql_close($this->conn);
    }
}