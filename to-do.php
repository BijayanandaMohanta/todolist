<?php
    class todo{
        private $host = "localhost";
        private $username = "root";
        private $password = "";
        private $dbname = "test";
        public $con;

        public function __construct()
        {
            try{
                $this->con = new mysqli($this->host, $this->username,$this->password,$this->dbname);
            }
            catch(Exception $e){
                echo $e->getMessage();
            }
        }

        public function insertData($title,$content,$warning){
            $sql = "INSERT INTO todo(title,content,warning) VALUES ('$title','$content','$warning')";
            try {
                $this->con->query($sql);
                return true;
            } catch (Exception $e) {
                echo $e->getMessage();
            }
        }

        public function displayData(){
            $sql = "SELECT * FROM todo";
            $data = array();
            try{
                $query = $this->con->query($sql);
                if($query->num_rows > 0){
                    while($row = $query->fetch_assoc()){
                        $data[] = $row;
                    }
                    return $data;
                }else{
                    return false;
                }
            }
            catch(Exception $e){
                echo $e->getMessage();
            }
        }

    }
?>