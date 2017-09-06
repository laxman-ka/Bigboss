<?php


class laxman
{
    public function getlist($table, $cond)
    {
        $con = mysqli_connect('localhost', 'root', 'Infi@1234', 'Bigboss');

        if (!$con) {
            die('connection failed'.mysqli_connect_error());
        }

        $sql = 'select * from '.$table.' where '.$cond.'';

        $result = mysqli_query($con, $sql);

        return $result;
    }

    public function insertlist($table, $cols = [], $vals = [])
    {
        $con = mysqli_connect('localhost', 'root', 'Infi@1234', 'Bigboss');

        if (!$con) {
            die('connection failed'.mysqli_connect_error());
        }

        $cols = implode(',', $cols);
        $vals = "'".implode("', '", $vals)."'";

        if (empty($cols)) {
            $sql2 = 'insert into  '.$table.' values('.$vals.')';
        } else {
            $sql2 = 'insert into  '.$table.'('.$cols.') values('.$vals.')';
        }

        $result2 = mysqli_query($con, $sql2);

        return $result2;
    }

    public function getAll($table)
    {
        $con = mysqli_connect('localhost', 'root', 'Infi@1234', 'Bigboss');

        if (!$con) {
            die('connection failed'.mysqli_connect_error());
        }

        $sql = 'select * from '.$table;

        $result = mysqli_query($con, $sql);

        return $result;
    }
}
