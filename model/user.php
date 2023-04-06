<?php
     function checkuser($username, $pass){
        $conn = connect();
        
        $stmt = $conn->prepare("SELECT * FROM User WHERE Username='".$username."' AND Password='".$pass."'");

        $stmt->execute();
        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC); //tra ve dang mang

        $kq = $stmt->fetch(); //lay tat ca

        if(count($kq)>0)
            return $kq[0]['Role'];
        else return 0;
    }

    function getuserinfo($username, $pass){
        $conn = connect();
        
        $stmt = $conn->prepare("SELECT * FROM User WHERE Username='".$username."' AND Password='".$pass."'");

        $stmt->execute();
        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC); //tra ve dang mang

        $kq = $stmt->fetchAll(); //lay tat ca

        return $kq;
    }

?>