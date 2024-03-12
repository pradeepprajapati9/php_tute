<style>
    *{
        font-family:sans-serif;
        font-weight:bold;
        font-size:20px;
    }
</style>
<?php

class database
{
    private $HostName="localhost";
    private $RootName="root";
    private $PasswordName="";
    private $DbName="prectice";

    private $result=array();
    private $mysqli="";
    private $con=false;
    // connecton database
    public function __construct()
    {
        if (!$this->con) {
            $this->mysqli=new mysqli($this->HostName, $this->RootName, $this->PasswordName, $this->DbName);
            $this->con=true;
            if ($this->mysqli->connect_error) {
                array_push($result, $this->mysqli->connect_error);
                return false;
            }
        } else {
            return true;
        }
    }


    //insert data into database
    public function insert($table, $params=array())
    {
        if ($this->tableExists($table)) {
            $col=implode(',', array_keys($params));
            $val=implode("','", $params);
            $sql="INSERT INTO $table ($col)VALUES('$val')";
            if ($this->mysqli->query($sql)) {
                array_push($this->result, $this->mysqli->insert_id);
                return true;
            } else {
                array_push($this->result, $this->mysqli->error);
                return false;
            }
        } else {
            return false;
        }
    }

    //update detail from database
    public function update($table, $params=array(), $where=null)
    {
        if ($this->tableExists($table)) {
            $args=array();
            foreach ($params as $key=>$value) {
                $args[]="$key='$value'";
            }
            $string=implode(',', $args);
            $sql=" UPDATE $table SET $string ";
            if ($where !=null) {
                $sql.= " WHERE $where ";
            }
            if ($this->mysqli->query($sql)) {
                array_push($this->result, $this->mysqli->affected_rows);
                return true;
            } else {
                array_push($this->result, $this->mysqli->error);
                return false;
            }
        } else {
            return false;
        }
    }

    // delete detail from database
    public function delete($table, $where=null)
    {
        if ($this->tableExists($table)) {
            $sql="DELETE FROM $table";
            if ($where !=null) {
                $sql.=" WHERE $where ";
            }
            if ($this->mysqli->query($sql)) {
                array_push($this->result, $this->mysqli->affected_rows);
                return true;
            } else {
                array_push($this->result, $this->mysqli->error);
                return false;
            }
        } else {
            return false;
        }
    }

    // know the table is exists
    public function tableExists($table)
    {
        $sql="SHOW TABLES FROM $this->DbName LIKE '$table' ";
        $tableIndb=$this->mysqli->query($sql);
        if ($tableIndb) {
            if ($tableIndb->num_rows==1) {
                return true;
            } else {
                array_push($this->result, $table.'table does not exists');
                return false;
            }
        }
    }

    public function getResult()
    {
        $va = $this->result;
        $this->result = array();
        return $va;
    }

    //close
    public function __destract()
    {
        if ($this->con) {
            if ($this->mysqli->close()) {
                $this->con=false;
                return true;
            }
        } else {
            return false;
        }
    }
}
