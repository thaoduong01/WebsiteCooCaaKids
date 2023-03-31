<?php
    class database{
        var $_dbh = '';
        var $_sql = '';
        var $_curror = NULL;

        public function __construct(){
            try{
                $this->_dbh = new PDO('mysql:host=localhost; dbname=quanaotreem', 'root', '');
                $this->_dbh->query('set names "utf8"');
            }
            catch(PDOException $ex){
                die($ex->getMessage());
            }
        }

        public function setQuery($sql){
            $this->_sql = $sql;
        }

        public function execute($options=array()){

            $this->_curror = $this->_dbh->prepare($this->_sql);

            if($options){
                for($i=0; $i<count($options); $i++){
                    $this->_curror->bindParam($i+1, $options[$i]);
                }
            }
            $this->_curror->execute();
            return $this->_curror;
        }

        public function loadAllRows($options=array()){
            if(!$options){
                if(!$result = $this->execute()){
                    return false;
                }
                else{
                    if(!$result = $this->execute($options))
                        return false;
                }
                return $result->fetchAll(PDO::FETCH_OBJ);
            }
        }

        public function loadRow($option=array()){
            if(!$option){
                if(!$result = $this->execute())
                    return false;
            }
            else{
                if(!$result = $this->execute($option))
                    return false;
            }
            return $result->fetchAll(PDO::FETCH_OBJ);
        }

        public function loadRecord($option=array()){
            if(!$option){
                if(!$result = $this->execute())
                    return false;
            }
            else{
                if(!$result = $this->execute($option))
                    return false;
            }
            return $result->fetchAll(PDO::FETCH_OBJ);
        }

        public function getLastId(){
            return $this->_dbh->lastInsertId();
        }

        public function disconnect(){
            $this->_dbh = NULL;
        }
    }
?>