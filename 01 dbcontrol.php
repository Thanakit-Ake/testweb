<?php
    class db{
        private $db;
        private $debug;
        function __construct($user,$pass,$dbname,$debug){
            $this->debug = $debug;
            $this->db = new mysqli("localhost",$user,$pass,$dbname);
            $this->db->set_charset("utf8");
            if($this->db->connect_errno){
                echo "Failed to Connect to MySQL : ". 
                    $this->db->connect_errno;
                exit();
            }else{
                $this->debug_text("Conect Sucess......");
            }
        }
        //query
        function sel_data($sql){
            $result = $this->db->query($sql);
            $this->debug_text($sql);
            $data = $result->fetch_all(MYSQLI_ASSOC);
            if($this->debug){
                echo "<pre>";
                echo print_r($data);
                echo "</pre>";
           
            }
            return $data;
        }
         function query($sql){
             $result = $this->db->query($sql);
               return $result; 
        }
        function debug_text($text){
            if($this->debug){
                echo"Debug :{$text}<br>";
            }  
        }
         function close(){
            $this->db->close();
        }      
    }
        // $my_db = new db("Thanakit","YjrXlOiawfhOxGOK","book",true);
        // $my_db->query("select * from user");
?>