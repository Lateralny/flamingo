<?php

class Test extends Dbh {
    public function getUsers(){
        $sql = "SELECT * FROM profile";
        $stmt = $this->connect()->querry($sql);
        while($row = $stmt->fetch()){

        }
    }
}