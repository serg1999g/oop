<?php
class Database 
{
    public $db;
    
    public function __construct($host, $user, $pass, $db)
    {
        $this->db = mysqli_connect($host, $user, $pass);
        if(!$this->db) {
            exit('no connection');
        }

        if(!mysqli_select_db($this->db, $db))
        {
            exit('no table');
        }

        mysqli_query($this->db, "SET NAMES cp-1251");

        return $this->db;
    }

    public function get_all_db()
    {
        $sql = "SELECT id, title, descr FROM catalog LIMIT 10";
        $res = mysqli_query($this->db, $sql);
        if(!$res) {
            return false;
        }
        // массив статей
        for($i = 0; $i < mysqli_num_rows($res); $i++) {
            $row[] = mysqli_fetch_array($res, MYSQLI_ASSOC);
        }

        return $row;
    }

    public function get_one_db($id)
    {
        $sql = "SELECT id, title, descr FROM catalog WHERE id='$id'";
        $res = mysqli_query($this->db, $sql);
        
        if(!$res) {
            return false;
        }
        $row = mysqli_fetch_array($res, MYSQLI_ASSOC);

        return $row;
    }
}