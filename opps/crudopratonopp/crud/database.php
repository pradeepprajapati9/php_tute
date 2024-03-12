<?php

class database
{
    private $db_host="localhost";
    private $db_user="root";
    private $db_pass="";
    private $db_name="prectice";

    private $mysqli="";
    private $result=array();
    private $con=false;

    // connection_status
    public function __construct()
    {
        if (!$this->con) {
            $this->mysqli=new mysqli($this->db_host, $this->db_user, $this->db_pass, $this->db_name);
            $this->con=true;
            if ($this->mysqli->connect_error) {
                array_push($reslut, $this->mysqli->connect_error);
                // return false;
            }
        } else {
            // return true;
        }
    }

//  Insert Data
    public function Insert($table, $parameter=array())
    {
        if ($this->tableExists($table)) {
            $table_col=implode(',', array_keys($parameter));
            $table_val=implode("','", $parameter);
            $sql="INSERT INTO $table ( $table_col ) VALUES( '$table_val' )";
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

    // Update Data
    public function Update($table, $parameter=array(), $where= null)
    {
        if ($this->tableExists($table)) {
            $args=array();
            foreach ($parameter as $key => $value) {
                $args[]="$key='$value'";
            }

            $sql="UPDATE $table SET ".implode(',', $args);
            if ($where !=null) {
                $sql.="WHERE $where";
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

//  Delete Data
    public function Delete($table, $where= null)
    {
        if ($this->tableExists($table)) {
            $sql="DELETE FROM $table ";
            if ($where !=null) {
                $sql.="WHERE $where";
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

    // Select Data with multiple option
    public function Select($table, $rows =null, $join=null, $where=null, $order=null, $limit=null)
    {
        if ($this->tableExists($table)) {
            $sql=" SELECT $rows FROM $table ";
            if ($join !=null) {
                $sql.=" JOIN $join ";
            }
            if ($where !=null) {
                $sql.=" WHERE $where ";
            }
            if ($order !=null) {
                $sql.=" ORDER $order ";
            }
            if ($limit !=null) {
                if (isset($_GET['page'])) {
                    $page=$_GET['page'];
                } else {
                    $page=1;
                }
                $start=($page - 1) * $limit;
                $sql.=" LIMIT $start, $limit ";
            }
            $query=$this->mysqli->query($sql);
            if ($query) {
                $this->result=$query->fetch_all(MYSQLI_ASSOC);
                return true;
            } else {
                array_push($this->result, $this->mysqli->error);
                return false;
            }
        } else {
            return false;
        }
    }

    // pagination
  public function pagination($table, $join=null, $where=null, $limit=null)
  {
      if ($this->tableExists($table)) {
          if ($limit != null) {
              $sql="SELECT COUNT(*) FROM $table";
              if ($join != null) {
                  $sql.="JOIN $join";
              }
              if ($where != null) {
                  $sql.="WHERE $where";
              }
              $query=$this->mysqli->query($sql);
              $total_record=$query->fetch_array();
              $total_record=$total_record[0];
              $total_page= ceil($total_record/$limit);
              $url = basename($_SERVER['PHP_SELF']);

              if (isset($_GET['page'])) {
                  $page=$_GET['page'];
              } else {
                  $page=1;
              }

              $output= "<ul class='pagination'>";
              if($page>1){
                $output.="<li><a href='$url?page=".($page-1)."'>Prev</a></li>"; 
              }
              if ($total_record>$limit) {
                  for ($i=1; $i<=$total_record; $i++) {
                      if ($i==$page) {
                          $cls="class='active'";
                      } else {
                          $cls="";
                      }
                      $output.="<li><a $cls href='$url?page=$i'>$i</a></li>";
                  }
              }
              if($total_page>$page){
                $output.="<li><a href='$url?page=".($page+1)."'>Next</a></li>"; 
              }
              $output.="</ul>";

              echo $output;
          } else {
              return false;
          }
      }
  }


    public function Sql($sql)
    {
        $query=$this->mysqli->query($sql);
        if ($query) {
            $this->result=$query->fetch_all(MYSQLI_ASSOC);
            return true;
        } else {
            array_push($this->result, $this->mysqli->error);
            return false;
        }
    }

    public function tableExists($table)
    {
        $sql="SHOW TABLES FROM $this->db_name LIKE '$table'";
        $tableInDb=$this->mysqli->query($sql);
        if ($tableInDb) {
            if ($tableInDb->num_rows==1) {
                return true;
            } else {
                array_push($this->result, $table."Does Not Exists In This Database.");
                return false;
            }
        }
    }

    public function getResult()
    {
        $val = $this->result;
        $this->result = array();
        return $val;
    }

    // msqli close method
    public function __destruct()
    {
        if ($this->con) {
            if ($this->mysqli->close()) {
                $this->con=false;
                // return true;
            }
        } else {
            // return false;
        }
    }
}
