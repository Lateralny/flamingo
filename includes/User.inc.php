<?php
 class User extends Database
 {

     public function getAllUsers()
     {
         $stmt = $this->connect()->query("SELECT * FROM profile");
         while($row = $stmt->fetch())
         {
             $uid = $row['email'];
             return $uid;
         }
     }
     private function isRegistered($email) {
         $query = NULL;
         if(!is_numeric($email))
         {
             $query = query("SELECT * FROM user WHERE `user`.`email` = '$email';") or die("Bad query!");
         }
         return mysqli_num_rows($query); //mysql_num_rows($query);????????
     }
    /*protected function getUser($name)
    {
        $sql = "SELECT * FROM profile WHERE nickname = ?";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$name]);

        $result = $stmt->fetchAll();
        return $result;
    }*/

 }
